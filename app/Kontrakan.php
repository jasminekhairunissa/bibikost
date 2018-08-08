<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontrakan extends Model
{
    protected $fillable=[
		'id',
        'id_properti',
        'harga',
        'ukuranbangunan',
        'fasilitas'
    ];
    public function properti(){
        return $this->belongsTo(Properti::class);
    }
}
