<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\userController;
Route::namespace('Api')->group(function () {
  Route::get('/articles', [ArticleController::class, 'index']);
  Route::post('/store', [ArticleController::class, 'store']);
  Route::get('/show/{id}', [ArticleController::class, 'show']);
  Route::get('/edit/{id}', [ArticleController::class, 'edit']);
  Route::put('/update/{id}', [ArticleController::class, 'update']);
  Route::put('/delete/{id}', [ArticleController::class, 'destroy']);
});

// routes/api.php

Route::prefix('api')->middleware('api')->group(function () {
  Route::get('articles', [ArticleController::class, 'index']);
  // Other routes
});
