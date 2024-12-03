<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ExampleController;

Route::post('/login', [ExampleController::class, 'login']); 
Route::post('/register', [ExampleController::class, 'register']); 

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/products', [ExampleController::class, 'listProducts']);
    Route::get('/products/{id}', [ExampleController::class, 'getProduct']);
    Route::post('/add', [ExampleController::class, 'store']);
    Route::delete('/delete/{id}', [ExampleController::class, 'delete']);
    Route::put('/update/{id}', [ExampleController::class, 'update']);
    Route::post('/logout', [ExampleController::class, 'logout']); 
});
