<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/herbs', function () {
    return view('herbs');
});

Route::get('/contact', function () {
    return view('contact');
});