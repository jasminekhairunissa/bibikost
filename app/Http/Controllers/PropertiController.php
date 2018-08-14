<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Properti;
use App\Http\Controllers\Controller;

class PropertiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:pemilik');
    }

    public function display(){

    }
    public function create(){
        return view('pages.daftarproperti');
    }
    public function store(){
    	$this->validate(request(), [
            'namaprop' => 'required|string|max:255',
            'alamat' => request('alamatprop'),
        ]);

    	$prop = Properti::create([
    		'id',
	        'id_pemillik' => auth()->id(),
	        'nama' => request('namaprop'),
	        'alamat' => request('alamatprop'),
	        //tipe properti
	        'tipe_prop'=>request('tipe_prop')
    	]);
    	if($prop->tipe_prop == 0)
    		return redirect()->route('kos.create',compact('prop'));
    	else if($prop->tipe_prop == 1)
    		return redirect()->route('kontrakan.create',compact('prop'));

    }
    public function edit(){

    }
    public function delete(){

    }
}
