<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes', function () {
    return view('auth.pdf.registration_tes');
});

include_once __DIR__ . '/auth.php';