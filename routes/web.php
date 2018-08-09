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

<<<<<<< HEAD
Route::get('loginpemilik', function () {
    return view('pages.loginpemilik');
});

Route::get('loginpencari', function () {
    return view('pages.loginpencari');
});

Route::get('register', function () {
    return view('pages.register');
});

Route::get('registerpencari', function () {
    return view('pages.registerpencari');
});
Route::get('registerpemilik', function () {
    return view('pages.registerpemilik');
});

=======
Route::get('isidetailkost', function () {
    return view('pages.isidetailkost');
});

Route::get('daftarproperti', function () {
    return view('pages.daftarproperti');
});
>>>>>>> 60985ab0fc14333b82892f745e61b5bd23f8b84a
Route::resource('post', 'PostController');
