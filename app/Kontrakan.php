<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontrakan extends Model
{
    public $table="Kontrakan";
    protected $fillable=[
		'id',
        'id_properti',
        'hargatahunan',
        'jumlahkamar',
        'jumlahkamarmandi',
        'ukuranbangunan',
        'fasilitas'
    ];
    public function properti(){
        return $this->belongsTo(Properti::class);
    }
}
