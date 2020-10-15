<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewsController;

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
// Route::get('/reviews', function () {
//     return view('reviews');
// });
// Route::get('/layouts', function () {
//     return view('layouts');
// });

//Route::get('/reviews', 'App\Http\Controllers\PostsController@show');
// Route::get('/reviews', ReviewsController::class);
Route::get('/reviews', [ReviewsController::class, 'show']);
