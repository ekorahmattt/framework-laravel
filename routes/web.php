<?php

use Illuminate\Support\Facades\Route;
use App\Models\Prodi;
use App\Models\User;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;

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
        "prodis" => Prodi::all(),
        "mahasiswas" => Mahasiswa::all()
        ]);
});

Route::get('/user/{nama}', function ($nama) {
    return 'Halo ' . $nama;
});

Route::get('/login', 
    [AuthController::class, 'loginView'])->name('login');

Route::post('/action-login', 
    [AuthController::class, 'actionLogin']);

Route::get('/register', function(){
    return view('register');
})->name("register");

Route::post('/action-register', 
    [AuthController::class, 'actionRegister']);
    
Route::get('/logout', 
    [AuthController::class, 'logout']);

Route::get("/mahasiswa", [MahasiswaController::class, 'index'])->name("mahasiswa.index");
Route::get("/mahasiswa/create", [MahasiswaController::class, 'create']);

Route::post("/mahasiswa/store", [MahasiswaController::class, 'store']);

Route::get("/mahasiswa/show/{id}", [MahasiswaController::class, 'show'])->name("mahasiswa.show");

Route::get("/mahasiswa/{id}/edit", [MahasiswaController::class, 'edit'])->name("mahasiswa.edit");
Route::put("/mahasiswa/{id}", [MahasiswaController::class, 'update'])->name("mahasiswa.update");
Route::delete("/mahasiswa/{id}", [MahasiswaController::class, 'destroy'])->name("mahasiswa.delete");