<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\reviewsController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// get reviews 
Route::get('/reviews', [reviewsController::class, 'getReviews']);
Route::get('/review/{id?}', [reviewsController::class, 'getReview']);

// add reviews
Route::get('/add_review', [reviewsController::class, 'addReview']);
Route::get('/delete_review', [reviewsController::class, 'deleteReview']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


