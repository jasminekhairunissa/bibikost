<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Properti;
use App\Http\Controllers\Controller;

class PropertiController extends Controller
{
    public function display(){

    }
    public function add(){
    	$this->validate(request(), [
            'namaprop' => 'required|string|max:255',
            'tipeprop' => 'required|string|max:255',
        ]);

    	$prop = Properti::create([
    		'id',
	        'id_pemillik' => 'abc',
	        'nama' => request('namaprop'),
	        'alamat' => request('alamatprop'),
    	]);
    	dd($prop);
    }
    public function edit(){

    }
    public function delete(){

    }
}
