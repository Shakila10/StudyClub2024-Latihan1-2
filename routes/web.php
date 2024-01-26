<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//tugas1
Route::get('/dashbor', function () {
    return view('index');
});
Route::get('mahasiswa/semua', function (){
    $mahasiswa = Mahasiswa::all();
    foreach ($mahasiswa as $data){
        echo $data->id . "." . $data->nim . "_" . $data->nama . "_" . $data->kelas . "_" . $data->des . "<br>";
    }
});

route::get('/dashbor', function(){
    return view('index');
})->name('dashbor');

use App\Http\Controllers\Mahasiswacontroller;

Route::resource('/mahasiswa', Mahasiswacontroller::class);
