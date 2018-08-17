<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Pemilik;
//use Auth;

class PemilikRegisterController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest');
    }

    public function showRegistrationPemilikForm()
    {
    	return view('auth\registerpemilik');
    }

    public function register(Request $request)
    {
    	$request->validate([
    		'nama' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'ttl' => 'required|string',
            'ktp' => 'required|max:16',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:12',
    	]);

    	$pemilik = Pemilik::create([
    		'nama' => request('nama'),
    		'email' => request('email'),
    		'password' => Hash::make(request('password')),
    		'ttl' => request('ttl'),
    		'ktp' => request('ktp'),
    		'alamat' => request('alamat'),
    		'no_telp' => request('no_telp'),
    	]);
    	dd($pemilik);
    	//auth()->login($pemilik);
    	//return redirect()->route('home');
    }
}
