<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/service', function() {
    return view('service');
});
Route::get('/contact', function() {
    return view('contact');
});
Route::get('/login', function() {
    return view('login');
});