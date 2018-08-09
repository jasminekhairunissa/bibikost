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
    public function add(Properti $prop){
    	if(request('kamarmandi') !== null) {
    		$fasilitas = request('kamarmandi').":".request('keterangankm').",";
    	}
    	if(request('wifi') !== null) {
    		$fasilitas = $fasilitas.request('wifi').",";
    	}
    	if(request('ac') !== null) {
    		$fasilitas = $fasilitas.request('ac').",";
    	}
    	if(request('dapurumum') !== null) {
    		$fasilitas = $fasilitas.request('dapurumum').",";
    	}
    	if(request('laundry') !== null) {
    		$fasilitas = $fasilitas.request('laundry').":".request('keteranganlaundry').",";
    	}
    	if(request('listrik') !== null) {
    		$fasilitas = $fasilitas.request('listrik').":".request('keteranganlistrik').",";
    	}
    	if(request('kasur') !== null) {
    		$fasilitas = $fasilitas.request('kasur').",";
    	}
    	if(request('meja') !== null) {
    		$fasilitas = $fasilitas.request('meja').",";
    	}
    	if(request('kursi') !== null) {
    		$fasilitas = $fasilitas.request('kursi').",";
    	}
    	if(request('lemari') !== null) {
    		$fasilitas = $fasilitas.request('lemari').",";
    	}
    	if(request('rak') !== null) {
    		$fasilitas = $fasilitas.request('rak');
    	}

    	$uk_kamar = request('ukuranpanjang').'x'.request('ukuranlebar')

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
	        'hargatahunan' => request('hargabulanan'),
	        'hargatahunan' => request('hargaharian'),
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
