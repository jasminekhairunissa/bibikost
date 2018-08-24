<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Properti;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
    	if (Auth::guard('pemilik')->check()) {
    		$this->middleware('auth:pemilik');
    	}
    	if (Auth::check()) {
    		$this->middleware('auth');
    	}
    }

    public function show()
    {	
    	if (Auth::guard('pemilik')->check())
    	{
	    	$prop = Properti::where('id_pemilik', Auth::guard('pemilik')->id())->first();
		    //dd($prop);
		    $nama = str_replace(' ', '_', $prop->nama);
		    //dd($nama);
		    return view('pages.homepemilik', ['nama'=>$nama, 'prop'=>$prop]);
		}

		if (Auth::check())
		{
			//$prop = Properti::all(); //ini nanti ubah, jangan query semua tapi query sebagian data aja
			//gimana juga cara nentuin user premium sama reg
			return view('pages.homeuserreg');

		}
    }
}
