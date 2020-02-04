<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    public function history()
    {
        return $this->hasOneThrough(History::class, 'App\User');
    }
}
