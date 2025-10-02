<?php

use Illuminate\Support\Facades\Route;
use App\Models\Herb;

Route::get('/', function () {
    return view('index');
});

Route::get('/herbs', function ()  {
    return view('herbs.index', [        
        'herbs' => Herb::all()
    ]);
});

Route::get('/herbs/create/', function () {
    return view('herbs.create');
});

Route::get('/herbs/{id}', function ($id)  {      
    $herb =  Herb::find( $id );
    return view('herbs.show', ['herb'=>  $herb]);
});

Route::post('/herbs', function () {
    Herb::create([
        'name'=> request()->name,
        'usage'=> request()->usage,
        'description'=> request()->description,
        // 'users_id' => 1,
    ]);
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});