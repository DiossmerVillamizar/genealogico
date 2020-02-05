<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name'];
    /**
    * Get the post's image.
    */
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
}
