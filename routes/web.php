<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\UserController;

Route::get('/', function(){
    return view('app');
});

Route::get('/form', function(){
    return view('form');
});

Route::get('/', function () {
    return view('app');
})->where('vue_capture', '[\/\w\.-]*');

Route::get('/login', function () {
    return view('Login');
})->where('vue_capture', '[\/\w\.-]*');

Route::get('/register', function () {
    return view('Register');
})->where('vue_capture', '[\/\w\.-]*');

Route::get('/dashboard', function () {
    return view('Dashboard');
})->where('vue_capture', '[\/\w\.-]*');

Route::get('/form', function () {
    return view('Form');
})->where('vue_capture', '[\/\w\.-]*');

Route::post('/login', [loginController::class, 'Login']);
Route::post('/register', [RegisterController::class, 'Register']);

Route::get('/api/users', [UserController::class, 'getUsers']);
Route::post('/articles', [ArticleController::class, 'store']);