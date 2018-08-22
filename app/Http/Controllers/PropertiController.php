<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Properti;
use App\Http\Controllers\Controller;
use Auth;

class PropertiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:pemilik');
    }

    public function show($prop, $nama){
        $prop = Properti::where('id_pemilik', Auth::guard('pemilik')->id())->first();   
        $nama = $prop->nama;
        return view('pages.properti', ['prop'=>$prop]);
        //dd($prop);
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
	        'id_pemillik' => Auth::guard('pemilik')->id(),
	        'nama' => request('namaprop'),
	        'alamat' => request('alamatprop'),
	        //tipe properti
	        'tipe_prop'=>request('tipe_prop')
    	]);
    	if($prop->tipe_prop == 0)
    		return redirect()->route('prop.show', compact('prop'));
    	else if($prop->tipe_prop == 1)
    		return redirect()->route('prop.show', compact('prop'));

    }
    public function edit(){

    }
    public function delete(){

    }
}
