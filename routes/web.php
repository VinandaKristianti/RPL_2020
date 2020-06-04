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

//route login with google
Route::get('login/google', 'loginController@redirect');
Route::get('login/google/callback', 'loginController@Callback');

route::get('/Beranda','loginController@index')->name('Beranda');
route::post('/Bye','loginController@logout')->name('BYE');
//Mahasiswa
route::get('/Mahasiswa','mhsControl@index_mhs')->middleware('auth');
route::get('/DosenKoor','dosen_koorControl@index_doskoor')->middleware('auth');
route::get('/Pkp','pkpControl@index_pkp')->middleware('auth');
route::get('/Kp','kpControl@index_kp')->middleware('auth');
route::get('/Skp','skpControl@index_skp')->middleware('auth');
route::post('/Skp/Tambah','skpControl@tambah')->middleware('auth');
route::get('/LihatJadwal','kpControl@index_ujian')->middleware('auth');

//Dosen
route::get('/ProfilDosen','dosenControl@index_profil')->middleware('auth');
route::get('/Bimbingan','dosenControl@index_bimbingan')->middleware('auth');
route::get('/Pengujian','dosenControl@index_pengujian')->middleware('auth');
route::get('/Pengajuan','dosenControl@index_pengajuan')->middleware('auth');

//Koor
route ::get('/ProfilKoor','dosen_koorControl@index_koor')->middleware('auth');
route ::get('/BimbingKoor','dosen_koorControl@index_bimbingan')->middleware('auth');
route ::get('/PengujianKoor','dosen_koorControl@index_pengujian')->middleware('auth');
route ::get('/PengajuanKoor','dosen_koorControl@index_pengajuan')->middleware('auth');
route::get('/Registrasi','dosen_koorControl@index_regis')->middleware('auth');
route::get('/Aturjadwal','dosen_koorControl@index_aturjadwal')->middleware('auth');
route::get('/Verifikasi','dosen_koorControl@index_verifikasi')->middleware('auth');
route::get('/AturKP','dosen_koorControl@index_aturkp')->middleware('auth');
