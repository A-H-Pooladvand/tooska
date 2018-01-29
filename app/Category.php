<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get all of the owning commentable models.
     */
    public function category_able()
    {
        return $this->morphTo();
    }
}
