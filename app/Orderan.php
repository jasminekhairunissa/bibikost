<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderan extends Model
{
	public $table="Orderan";
    protected $fillable=[
    	'id','id_pemilik','id_pencari','id_properti'
    ];
}
