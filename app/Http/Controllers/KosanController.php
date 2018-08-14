<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kosan;
use App\Properti;
use App\Http\Controllers\Controller;

class KosanController extends Controller
{
    public function __constructor()
    {
        $this->middleware('auth:pemilik');
    }

    public function display(){

    }
    public function create(Properti $prop){
    	return view('pages.isidetailkost', compact('prop'));
    }
    public function store(Request $request, Properti $prop){
        $fasilitas = "Tidak ada";
    	if(request('kamarmandi') !== null) {
    		$fasilitas = "kamarmandi".":".request('keterangankm').",";
    	}
    	if(request('wifi') !== null) {
    		$fasilitas = "wifi".",";
    	}
    	if(request('ac') !== null) {
    		$fasilitas = $fasilitas."ac".",";
    	}
    	if(request('dapurumum') !== null) {
    		$fasilitas = $fasilitas."dapurumum".",";
    	}
    	if(request('laundry') !== null) {
    		$fasilitas = $fasilitas."laundry".":".request('keteranganlaundry').",";
    	}
    	if(request('listrik') !== null) {
    		$fasilitas = $fasilitas."listrik".":".request('keteranganlistrik').",";
    	}
    	if(request('kasur') !== null) {
    		$fasilitas = $fasilitas."kasur".",";
    	}
    	if(request('meja') !== null) {
    		$fasilitas = $fasilitas."meja".",";
    	}
    	if(request('kursi') !== null) {
    		$fasilitas = $fasilitas."kursi".",";
    	}
    	if(request('lemari') !== null) {
    		$fasilitas = $fasilitas."lemari".",";
    	}
    	if(request('rak') !== null) {
    		$fasilitas = $fasilitas."rak";
    	}

    	$uk_kamar = request('ukuranpanjang').'x'.request('ukuranlebar');

    	$this->validate(request(), [
            'hargatahunan' => 'required|integer',
            'hargabulanan' => 'required|integer',
            'hargaharian' => 'required|integer',
            'dayatampung' => 'required|integer',
            'ukuranpanjang' => 'required|integer',
            'ukuranlebar' => 'required|integer',
        ]);

    	$kos = Kosan::create([
    		'id',
	        'id_properti' => $prop->id,
	        'hargatahunan' => request('hargatahunan'),
	        'hargabulanan' => request('hargabulanan'),
	        'hargaharian' => request('hargaharian'),
	        'dayatampung' => request('dayatampung'),
	        'ukurankamar' => $uk_kamar,
	        'fasilitas' => $fasilitas,
            'deskripsi' => request('deskripsi'),
    	]);
    	dd($kos);
    }
    public function edit(){

    }
    public function delete(){

    }
}
