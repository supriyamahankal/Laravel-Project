<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contactus', function () {
    return view('contactus');
});
