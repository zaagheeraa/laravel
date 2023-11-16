<?php

use Illuminate\Support\Facades\Route;
use App\Models\Shoe;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/shoes', function() {
    $shoes = Shoe::all();
    return view('index',compact('shoes'));
});

Route::get('/show/{id}', function($id) {
    $shoe = Shoe::find($id);
    return view('show', compact('shoe'));
});


Route::get('/shoes/{id}', function(){

    $data = [
      ['id' => 3, 'name' => 'nike TN', 'price' => 150],

    ];

    return view('index', [
        'lesChaussures' => $data
    ]);
});
