<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    protected $guarded = ['id'];

    protected $table = 'why_choose_us';

    public function getCreatedAtAttribute()
    {
        return jdate($this->attributes['created_at'])->format('Y/m/d');
    }

    public function getUpdatedAtAttribute()
    {
        return jdate($this->attributes['updated_at'])->format('Y/m/d');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
