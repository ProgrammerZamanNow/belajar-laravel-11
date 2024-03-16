<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/validation', function (){
    throw new \App\Exceptions\ValidationError("Invalid input");
});
