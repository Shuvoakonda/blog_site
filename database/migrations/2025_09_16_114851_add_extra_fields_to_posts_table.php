<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('post_category_id')->nullable()->after('user_id')->constrained()->onDelete('cascade');
            $table->text('excerpt')->nullable()->after('author');
            $table->integer('reading_time')->default(0)->after('content');
            $table->json('gallery')->nullable()->after('reading_time');
            $table->string('meta_title')->nullable()->after('gallery');
            $table->text('meta_description')->nullable()->after('meta_title');
            $table->string('meta_keywords')->nullable()->after('meta_description');
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft')->after('meta_keywords');
            $table->boolean('is_featured')->default(false)->after('status');
            $table->boolean('allow_comments')->default(true)->after('is_featured');
            $table->timestamp('published_at')->nullable()->after('allow_comments');
            $table->integer('view_count')->default(0)->after('published_at');
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropConstrainedForeignId('post_category_id');
            $table->dropColumn([
                'excerpt',
                'reading_time',
                'gallery',
                'meta_title',
                'meta_description',
                'meta_keywords',
                'status',
                'is_featured',
                'allow_comments',
                'published_at',
                'view_count',
            ]);
        });
    }
};
