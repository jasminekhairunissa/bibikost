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
        ]);

    	$prop = Properti::create([
    		'id',
	        'id_pemillik',
	        'nama' => request('namaprop'),
	        'alamat' => request('alamatprop'),
	        //tipe properti
	        'tipe_prop'=>request('tipe_prop')
    	]);
    	if($prop->tipe_prop == 0)
    		//return redirect('properti/'.$prop->id.'/isidetailkost')->with('prop', $prop);
    		return redirect()->route('kos.create',compact('prop'));
    	else if($prop->tipe_prop == 1)
    		return redirect('properti/'.$prop->id.'/isidetailkontrakan')->with('prop', $prop);

    }
    public function edit(){

    }
    public function delete(){

    }
}
