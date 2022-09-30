<?php

use Illuminate\Support\Facades\Route;
use App\Models\Prodi;

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
    return view ('home',[
        "prodis" => Prodi::all()
        ]);
});

Route::get('/user/{nama}', function ($nama) {
    return 'Halo '.$nama;
});

Route::get('/login', function () {
    return view('login',[
        'title'=>'Halaman Login'
    ]);
})->name('login');