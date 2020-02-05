<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['url'];//PRIMORDIAL
    /**
    * Get the owning imageable model.
    */
    public function imageable()
    {
        return $this->morphTo();
    }
}
