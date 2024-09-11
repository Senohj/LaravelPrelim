<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/picture', function () {
    return view('picture');
});
Route::get('/items', function () {
    return view('items');
});
