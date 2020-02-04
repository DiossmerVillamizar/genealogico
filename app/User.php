<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable=['user_id','supplier_id'];
    //
    public function history(){
        return $this->hasOne(History::class,'user_id','supplier_id');
    }
}
