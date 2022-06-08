<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController;
use App\Http\Controllers\reviewsController;
use App\Http\Controllers\RestoController;


// user routes
Route::post('/sign_up', [userController::class, 'register']);
Route::post('/login', [userController::class, 'logIn']);
Route::get('/user/{id?}', [userController::class, 'getUser']);
Route::get('/users', [userController::class, 'getUsers']);

// restaurant routes
Route::post('/add_resto', [RestoController::class, 'addResto']);
Route::get('/restaurants', [RestoController::class, 'getRestos']);
Route::get('/restaurant/{id}', [RestoController::class, 'getResto']);

// reviews routes
Route::get('/reviews', [reviewsController::class, 'getReviews']);
Route::get('/review/{id?}', [reviewsController::class, 'getReview']);
Route::post('/add_review', [reviewsController::class, 'addReview']);
Route::get('/delete_review/{id?}', [reviewsController::class, 'deleteReview']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


