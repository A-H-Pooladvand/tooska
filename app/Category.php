<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    public function categoryTypes()
    {
        return [
            [
                'title' => 'بلاگ',
                'value' => Blog::class
            ]
        ];
    }

    public function getCreatedAtAttribute()
    {
        return jdate($this->attributes['created_at'])->format('Y/m/d');
    }

    public function getUpdatedAtAttribute()
    {
        return jdate($this->attributes['updated_at'])->format('Y/m/d');
    }

    public function getCategoryTypeFaAttribute()
    {
        switch ($this->attributes['category_type']) {
            case Blog::class:
                return 'بلاگ';
                break;
            default:
                return 'غیر مجاز';
        }
    }
}
