<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome/', function () {
    return view('welcome');
});

Route::get('login/', function () {
    return view('login');
});

Route::get('pendaftaran/', function () {
    return view('pendaftaran');
});

Route::get('home/', function () {
    return view('home');
});

