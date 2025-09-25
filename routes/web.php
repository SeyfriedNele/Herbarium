<?php

use Illuminate\Support\Facades\Route;
use App\Models\Herb;

Route::get('/', function () {
    return view('index');
});

Route::get('/herbs', function ()  {
    return view('herbs', [        
        'herbs' => Herb::all()
    ]);
});

Route::get('/herbs/{id}', function ($id)  {      
    $herb =  Herb::find( $id );
    return view('herb', ['herb'=>  $herb]);
});

Route::get('/contact', function () {
    return view('contact');
});