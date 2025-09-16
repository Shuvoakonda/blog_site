<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
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

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
