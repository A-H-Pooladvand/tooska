<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $guarded = ['id'];
    public function getCreatedAtAttribute()
    {
        return jdate($this->attributes['created_at'])->format('Y/m/d');
    }

    public function getUpdatedAtAttribute()
    {
        return jdate($this->attributes['updated_at'])->format('Y/m/d');
    }
}
