<?php

use Illuminate\Support\Facades\Route;
#Esta clase le dice a este archivo que use la clase HomeControler que se creo con artisan de la siguiente manera:
# php artisan make:controller HomeController
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class,'index']);
Route::get('/posts', [PostController::class,'index']);
Route::get('/posts/create', [PostController::class,'create']);
Route::get('/posts/{id}', [PostController::class,'show']);