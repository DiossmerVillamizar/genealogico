<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    //
    protected $table="serials";
    protected $guarded=[];
    protected $fillable = [
        'nombre', 'objeto_id',
    ];

    public function objetos(){
        return $this->belongsTo(Objeto::class,'objeto_id','id')->withDefault([
            'serial'=>null,"objeto_id"=>null,
        ]);
    }
}
