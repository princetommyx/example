<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello!'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'about' => 'Info on'  
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'call' => 'Contact Us'
    ]);
});
