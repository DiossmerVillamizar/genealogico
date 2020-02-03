<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papel extends Model
{
    //
    protected $table="papels";
    protected $fillable=[
        'formato', 'lapiz_id',
    ];
    public function lapizs(){
        return $this->belongsTo(Lapiz::class,'lapiz_id');
    }
}
