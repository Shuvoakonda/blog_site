<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($post) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            if (is_array($post->gallery)) {
                foreach ($post->gallery as $galleryImage) {
                    Storage::disk('public')->delete($galleryImage);
                }
            }
        });

        static::updating(function ($post) {
            if ($post->isDirty('image')) {
                $original = $post->getOriginal('image');
                if ($original) {
                    Storage::disk('public')->delete($original);
                }
            }
            if ($post->isDirty('gallery')) {
                $originalGallery = $post->getOriginal('gallery');
                if (is_array($originalGallery)) {
                    foreach ($originalGallery as $galleryImage) {
                        Storage::disk('public')->delete($galleryImage);
                    }
                }
            }
        });
    }
    use HasFactory;

    protected $fillable = [
        'title',
        'short_description',
        'description',
        'slug',
        'author',
        'excerpt',
        'content',
        'image',
        'gallery',
        'reading_time',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
        'is_featured',
        'allow_comments',
        'published_at',
        'view_count',
        'user_id',
        'post_category_id',
    ];

    protected $casts = [
        'gallery'        => 'array',
        'is_featured'    => 'boolean',
        'allow_comments' => 'boolean',
        'published_at'   => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
  
    public function scopePublished($query)
    {
        return $query->where('status', 'published')
            ->where('published_at', '<=', Carbon::now());
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
    public function scopeByCategory($query, $categoryId)
    {
        return $query->where('post_category_id', $categoryId);
    }

    public function incrementViewCount()
    {
        $this->increment('view_count');
    }

    public function getFeaturedImageUrlAttribute()
    {
        if ($this->image) {
            if (filter_var($this->image, FILTER_VALIDATE_URL)) {
                return $this->image;
            }
            return asset('storage/' . $this->image);
        }
        return 'https://via.placeholder.com/800x400?text=No+Image';
    }

    public function getGalleryUrlsAttribute()
    {
        if (! $this->gallery || ! is_array($this->gallery)) {
            return [];
        }

        return array_map(function ($image) {
            if (filter_var($image, FILTER_VALIDATE_URL)) {
                return $image;
            }
            return asset('storage/' . $image);
        }, $this->gallery);
    }
    public function getReadingTimeAttribute()
    {
        $wordsPerMinute = 200;
        $wordCount      = str_word_count(strip_tags($this->content));
        $readingTime    = ceil($wordCount / $wordsPerMinute);
        return max(1, $readingTime);
    }
}
