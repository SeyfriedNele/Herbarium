<?php

use Illuminate\Support\Facades\Route;
use App\Models\Herb;

Route::get('/', function () {
    return view('index');
    //test01
});

Route::get('/herbs', function ()  {
    return view('herbs', [        
        'herbs' => Herb::allHerbs()
    ]);
});

Route::get('/herbs/{id}', function ($id)  {      
    $herb =  Herb::findHerb( $id );
    return view('herb', ['herb'=>  $herb]);
});

Route::get('/contact', function () {
    return view('contact');
});