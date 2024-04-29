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

Route::get('/', function() {
    return view('index');
});


Route::get('produk', function() {
    $kode=[1001,1002,1003,1004,1005];
    $nama=['Gula','Garam','Minyak makan','Beras','Tepung'];
    $harga=['15000','5000','17000','100000','10000'];
    $jenis=count($kode);
    return view('produk', compact('kode','nama','jenis','harga'));
    
});

Route::get('formtambahproduk', function() {
    $jenis=['Alat Tulis','Sembako','Elektronik'];
    $jumlah=count($jenis);
    return view('formtambahproduk', compact('jenis','jumlah'));
});

