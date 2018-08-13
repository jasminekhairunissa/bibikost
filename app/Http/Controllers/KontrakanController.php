<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontrakan;
use App\Properti;
use App\Http\Controllers\Controller;

class KontrakanController extends Controller
{
    public function display(){

    }
    public function create(Properti $prop){
    	return view('pages.isidetailkontrakan', compact('prop'));
    }
    public function store(Request $request, Properti $prop){
		$fasilitas="";
    	if(request('parkiran') !== null) {
    		$fasilitas = "parkiran".",";
    	}
    	if(request('wifi') !== null) {
    		$fasilitas = $fasilitas."wifi".",";
    	}
    	if(request('ac') !== null) {
    		$fasilitas = $fasilitas."ac".",";
    	}
    	if(request('dapur') !== null) {
    		$fasilitas = $fasilitas."dapur".",";
        }
        if(request('ruangtamu') !== null) {
    		$fasilitas = $fasilitas."ruangtamu".",";
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

    	$uk_bangunan = request('ukuranpanjang').'x'.request('ukuranlebar');

    	$this->validate(request(), [
            'hargatahunan' => 'required|integer',
            'jumlahkamar' => 'required|integer',
            'jumlahkamarmandi' => 'required|integer',
            'ukuranpanjang' => 'required|integer',
            'ukuranlebar' => 'required|integer',
        ]);

    	$kontrak = Kontrakan::create([
    		'id',
	        'id_properti' => $prop->id,
	        'hargatahunan' => request('hargatahunan'),
	        'jumlahkamar' => request('jumlahkamar'),
	        'jumlahkamarmandi' => request('jumlahkamarmandi'),
	        'ukuranbangunan' => $uk_bangunan,
	        'fasilitas' => $fasilitas,
    	]);
    	dd($kontrak);
    }
    public function edit(){

    }
    public function delete(){

    }
}
