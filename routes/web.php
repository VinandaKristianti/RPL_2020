<?php

use Illuminate\Support\Facades\Route;

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
//memanggil view/index nya
Route::get('/', function () {
    return view('welcome');
});
route::get('/Beranda','loginController@index');
route::get('/Mahasiswa','mhsControl@index_mhs');
route::get('/DosenKoor','dosen_koorControl@index_doskoor');