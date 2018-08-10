<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kosan;
use App\Properti;
use App\Http\Controllers\Controller;

class KosanController extends Controller
{
    public function display(){

    }
    public function create(Properti $prop){
    	return view('pages.isidetailkost', compact('prop'));
    }
    public function store(Request $request, Properti $prop){
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
            'hargatahunan' => 'required|integer|max:255',
            'hargabulanan' => 'required|integer|max:255',
            'hargaharian' => 'required|integer|max:255',
            'dayatampung' => 'required|integer|max:255',
            'ukuranpanjang' => 'required|integer|max:255',
            'ukuranlebar' => 'required|integer|max:255',
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
    	]);
    	dd($kos);
    }
    public function edit(){

    }
    public function delete(){

    }
}
