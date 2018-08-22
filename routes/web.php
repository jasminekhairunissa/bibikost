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
use App\Properti;

Route::get('/', function () {
    return view('pages.home');
});

Auth::routes();

Route::get('/', function () {
    return redirect()->route('home.pemilik');
});
Route::get('/home', function() {
    $prop = Properti::where('id_pemilik', Auth::guard('pemilik')->id())->first();
    //dd($prop);
    $nama = str_replace(' ', '_', $prop->nama);
    //dd($nama);
    return view('pages.homepemilik', ['nama'=>$nama, 'prop'=>$prop]);
})->name('home.pemilik');

Route::get('properti/{nama}/isidetailkost', 'KosanController@create')->name('kos.create');
Route::post('properti/{nama}/isidetailkost', 'KosanController@store')->name('kos.store');
Route::get('/daftarproperti', 'PropertiController@create')->name('prop.create');
Route::post('daftarproperti', 'PropertiController@store')->name('prop.store');
Route::get('/', 'Auth\PemilikLoginController@logoutpemilik')->name('logout.pemilik');
Route::get('properti/{prop}/{nama}', 'PropertiController@show')->name('prop.show');

Route::get('login-pemilik', function() {return redirect()->route('login');});
Route::post('login-pemilik', 'Auth\PemilikLoginController@login')->name('login.pemilik');

Route::get('aboutus', function () {
    return view('pages.aboutus');
});

Route::get('kerjasama', function () {
    return view('pages.kerjasama');
});

Route::get('carikosan', function () {
    return view('pages.carikosan');
});


Route::get('bergabung', function() {return view('auth.registerpilihan');})->name('bergabung');

Route::get('register-pemilik', 'auth\PemilikRegisterController@showRegistrationPemilikForm')->name('register.pemilik');
Route::post('register-pemilik', 'auth\PemilikRegisterController@register')->name('register.pemilik.store');
