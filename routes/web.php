<?php

//VIEW SAJA
Route::get('/', function () {
    // session()->flush();
    return view('auth/login');
});

Route::get('/home', function () {
    return view('contents/dashboard/home');
});



Route::get('/dashboard', function () {
    return view('contents/dashboard/home');
});

Route::get('/profile', function () {
    return view('contents/profile/profile');
});

Route::get('/jadwal', function () {
    return view('contents/jadwal');
});

Route::get('/histori', function () {
    return view('contents/historipeminjaman/histori');
});

Route::get('/login', function () {
    return view('layouts/login');
});

//ADA DATANYA, TERHUBUNG KE MODEL
//dari controller beda, kalo resource pake semua method yang ada, tanpa @ satu satu method

//buat user
Route::resource('halamanuser','UsersController');

//buat TRANSAKSI
Route::resource('jadwal','ControllerTransaksi');


// Route::get('/home', 'HomeController@index')->name('home');

//buat USER
Route::resource('users','ControllerPengguna');

//buat login REGISTER
Auth::routes();

//buat halaman DASHBOARD
Route::get('/home', 'HomeController@index')->name('home');

//buat MAHASISWA
Route::resource('mahasiswa', 'ControllerMahasiswa');

//buat DOSEN
Route::resource('dosen','ControllerDosen');

//buat RUANGAN
Route::resource('ruangan','ControllerRuangan');

//buat ADMIN
Route::resource('admin','ControllerAdmin');

//buat LAB
Route::resource('lab', 'ControllerLab');

//buat HIMPUNAN
Route::resource('himpunan', 'ControllerHimpunan');

//buat HISTORI

//buat KELAS
Route::resource('kelas','ControllerKelas');

//buat CLEANING SERVICE
Route::resource('cs', 'CSController');
