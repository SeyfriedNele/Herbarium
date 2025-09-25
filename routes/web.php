<?php

use Illuminate\Support\Facades\Route;
use App\Models\Herbs;

Route::get('/', function () {
    return view('index');
});

Route::get('/herbs', function ()  {
    return view('herbs', [        
        'herbs' => Herbs::all()
    ]);
});

Route::get('/herbs/{id}', function ($id)  {      
    $herb =  Herbs::findHerb( $id );
    return view('herb', ['herb'=>  $herb]);
});

Route::get('/contact', function () {
    return view('contact');
});