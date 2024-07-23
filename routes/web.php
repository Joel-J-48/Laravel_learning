<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\test1Controller;
use App\Http\Controllers\testController;
use App\Http\Controllers\userController;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome')->middleware('auth');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [userController::class, 'login']);


Route::get('/register', function () {
    return view('register');
});

Route::resource('test', test1Controller::class);

// binding parameters to route with '$request->all()' a laravel native function
Route::get('/blog', function(Request $request){
    //fonction permettant de me retouner le nom passé en paramettre
    return[
        //"name" => $request->all(),
        "name" => $request->input("name"),
        "article" => "Article1",
    ];
});

// binding parameters to route with native php
Route::get('/blog/1', function(){
    return[
        "name" => $_GET["name"],
        "article" => "Article1",
    ];
});

//route for greeting's function of testController 
Route::get('/greeting', [testController::class, 'greeting']);
Route::get('/information', [testController::class, 'information']);
Route::get('/today', [testController::class, 'today']);
Route::get('/name', [testController::class, 'name']);

Route::get('/testN', [test1Controller::class, 'index']);

//route 'for userLogin.blade.php'


//route 'for userRegister.blade.php'
Route::get('/register', function(){
    return view('register');
});

//route for userController
Route::resource('users', userController::class);

