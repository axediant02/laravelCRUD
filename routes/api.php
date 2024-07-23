<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\userController;

  Route::namespace('Api')->group(function () {
  Route::get('/articles', [ArticleController::class, 'index']);
  Route::post('/store', [ArticleController::class, 'store']);


});

Route::prefix('api')->middleware('api')->group(function () {
  Route::get('articles', [ArticleController::class, 'index']);
});

Route::middleware('auth:api')->get('/dashboard-data', function (Request $request) {

  $data = \App\Models\Article::where('articles', $request->articles()->id)->get();
  return response()->json($data);
});
