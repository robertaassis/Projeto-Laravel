<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

/* The migrate:refresh command will roll back all of your migrations and then execute the migrate command
The migrate:fresh command will drop all tables from the database and then execute the migrate command
*/


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


Route::get('/', [EventController::class,'index'])->name('home');

Route::get('/events/create', [EventController::class,'create'])->name('create');

Route::get('/contact', [EventController::class,'contact'])->name('contact');

Route::get('/produto', [EventController::class,'queryString']);

// Route::get('/produtos_teste/{id}', function ($id) {
//     return view('product',['id' => $id]);
// });

Route::get('/produtos/{id?}',[EventController::class,'produtos'])->name('products'); // parametro opcionals

// Route::get('produtos', [CategoryController::class, 'index'])->name('site.products');


