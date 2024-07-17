<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test1Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('test', test1Controller::class);
