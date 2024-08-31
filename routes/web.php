<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contacts', function() {
    return "<h1> Daftar Kontak</h1>";
});
Route::get('/contacts/create', function() 
    { return "<h1>Tambah Kontak Baru</h1>";
});

Route::get('/companies/{name?}', function($name=null) {
    if($name) {
        return "Nama Perusahaan: " . $name;
    } else {
        return "Nama Perusahaan Kosong";
    }
})->whereAlphaNumeric('name');