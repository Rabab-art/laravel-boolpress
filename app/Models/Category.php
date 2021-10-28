<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //$category->posts

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
