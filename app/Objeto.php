<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    //
    protected $table="objetos";

    protected $fillable = [
        'nombre', 'apellido', 'modelo',
    ];
    public function serials(){
        return $this->hasOne(Serial::class);
    }
}
