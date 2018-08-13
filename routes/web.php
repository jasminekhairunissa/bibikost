<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('login', function () {
    return view('pages.login');
});

Route::get('aboutus', function () {
    return view('pages.aboutus');
});

Route::get('kerjasama', function () {
    return view('pages.kerjasama');
});

Route::get('carikosan', function () {
    return view('pages.carikosan');
});

Route::get('daftarproperti', function () {
    return view('pages.daftarproperti');
});

Route::post('daftarproperti', 'PropertiController@add')->name('prop.store');
Route::get('properti/{prop}/isidetailkost', 'KosanController@create')->name('kos.create');
Route::post('properti/{prop}/isidetailkost/save', 'KosanController@store')->name('kos.store');
Route::get('properti/{prop}/isidetailkontrakan', 'KontrakanController@create')->name('kontrak.create');
Route::post('properti/{prop}/isidetailkontrakan/save', 'KontrakanController@store')->name('kontrak.store');

Route::get('register', function () {
    return view('pages.register');
});

Route::get('registerpemilik', function () {
    return view('pages.registerpemilik');
});

Route::get('registerpencari', function () {
    return view('pages.registerpencari');
});

Route::resource('post', 'PostController');
