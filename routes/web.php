<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('welcome',function(){
    return view('welcome');
});
Auth::routes();
Route::get('/home', [BookController::class, 'index']);
Route::get('/genres',[GenreController::class,'index']);
Route::post('/save_genres',[GenreController::class,'save_genres']);
Route::get('writeup_details',[BookController::class,'show']);
Route::get('writeup_story',[StoryController::class,'read']);
Route::get('next_chapter',[StoryController::class,'next_chapter']);
Route::post('review',[ReviewController::class,'index']);
Route::post('bookmark',[BookmarkController::class,'create']);
