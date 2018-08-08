<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properti extends Model
{
    protected $fillable=[
    	'id',
    	'id_pemilik',
    	'nama',
    	'alamat',
    	'jarak'
    ];
    public function kosan(){
        return $this->hasMany(Kosan::class);
    }
    public function kontrakan(){
        return $this->hasOne(Kontrakan::class);
    }
}
