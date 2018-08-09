<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kosan extends Model
{
    protected $fillable=[
		'id',
        'id_properti',
        'harga',
        'dayatampung',
        'ukurankamar',
        'fasilitas',
    ];
    public function properti(){
        return $this->belongsTo(Properti::class);
    }
}
