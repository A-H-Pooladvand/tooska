<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = ['id'];

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get all of the tags for the post.
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function getCreatedAtAttribute()
    {
        return jdate($this->attributes['created_at'])->format('Y/m/d');
    }

    public function getUpdatedAtAttribute()
    {
        return jdate($this->attributes['updated_at'])->format('Y/m/d');
    }

    public function getPublishAtFaAttribute()
    {
        return jdate($this->attributes['publish_at'])->format('Y/m/d');
    }

    public function getStatusFaAttribute()
    {
        switch ($this->attributes['status']) {
            case 'publish':
                return 'منتشر شده';
                break;
            default:
                return 'پیش نویس';
        }
    }
}
