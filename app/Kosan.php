<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kosan extends Model
{
    public $table="Kosan";
    protected $fillable=[
		'id',
        'id_properti',
        'hargatahunan',
        'hargabulanan',
        'hargaharian',
        'dayatampung',
        'ukurankamar',
        'fasilitas',
    ];
    public function properti(){
        return $this->belongsTo(Properti::class);
    }
}
