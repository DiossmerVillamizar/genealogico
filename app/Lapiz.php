<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapiz extends Model
{
    //
    protected $table="lapizs";
    protected $fillable=[
        'color', 'marca', 'graduacion'
    ];
    public function papels(){
        return $this->hasMany(Papel::class);
    }
}
