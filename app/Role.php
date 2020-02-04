<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table="roles";
    protected $fillable = [
        'cargo',
    ];
    public function users()
    {
        //intermedio
        //return $this->belongsToMany('App\User')->using('App\RoleUser');
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
