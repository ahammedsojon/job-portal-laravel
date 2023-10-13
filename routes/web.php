<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// show all listing
Route::get('/', [ListController::class, 'index']);

// show create listing form
Route::get('/listings/create', [ListController::class, 'create'])->middleware('auth');

// create listing
Route::post('/listings', [ListController::class, 'store']);

// show edit listing form
Route::get('/listings/{listing}/edit', [ListController::class, 'edit'])->middleware('auth');

// update listing
Route::put('/listings/{listing}', [ListController::class, 'update']);

// delete listing
Route::delete('/listings/{listing}', [ListController::class, 'delete'])->middleware('auth');

// manage listing
Route::get('/listings/manage', [ListController::class, 'manage'])->middleware('auth');

// show single listing
Route::get('/listings/{listing}', [ListController::class, 'show']);

// user register form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// user register
Route::post('/users', [UserController::class, 'store']);

// show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// user login
Route::post('/user/authenticate', [UserController::class, 'authenticate']);

// user logout
Route::post('/logout', [UserController::class, 'logout']);

