<?php

use App\Http\Controllers\Api\CarouselItemsController;
use App\Http\Controllers\Api\PromptController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// CarouselItem
Route::get('/carousel', [CarouselItemsController::class, 'index']);
Route::delete('/carousel/{id}', [CarouselItemsController::class, 'destroy']);
Route::get('/carousel/{id}', [CarouselItemsController::class, 'show']);
Route::post('/carousel', [CarouselItemsController::class, 'store']);
Route::put('/carousel/{id}', [CarouselItemsController::class, 'update']);



// User
Route::get('/user', [UserController::class, 'index']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::put('/user/{id}', [UserController::class, 'update']);
Route::put('/user/name/{id}', [UserController::class, 'name'])->name('user.name');
Route::put('/user/email/{id}', [UserController::class, 'email'])->name('user.email');
Route::put('/user/password/{id}', [UserController::class, 'password'])->name('user.password');

// Prompt
Route::get('/prompt', [PromptController::class, 'index']);
Route::get('/prompt/{id}', [PromptController::class, 'show']);
Route::delete('/prompt/{id}', [PromptController::class, 'destroy']);
Route::post('/prompt', [PromptController::class, 'store']);
Route::put('/prompt/{id}', [PromptController::class, 'update']);