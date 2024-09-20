<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landingpage.index');
})->name('home');

Route::get('/about', function(){
    return view('landingpage.about');
})->name('about');



