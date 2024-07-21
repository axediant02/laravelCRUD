<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function(){
    return view('app');
});

Route::get('/form', function(){
    return view('form');
});

Route::post('/articles', [ArticleController::class, 'store']);
