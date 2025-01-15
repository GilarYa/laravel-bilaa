<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/datang', function () {
    return view('datang');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});
