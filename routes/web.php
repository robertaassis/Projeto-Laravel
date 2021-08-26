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

Route::get('events/create', [EventController::class,'create'])->name('create');

// Route::get('events/create', [EventController::class,'create'])->name('create')->middleware('auth'); // apenas pessoas logadas conseguiram acessar a rota

Route::get('events/id/{id}', [EventController::class,'show']); // mostra aquele evento especifico

Route::get('contact', [EventController::class,'contact'])->name('contact');

Route::post('events/events',[EventController::class,'store']); // store é padrao

Route::delete('events/{id}',[EventController::class,'destroy']);

Route::get('events/edit/{id}', [EventController::class, 'edit']); // "view"

Route::put('events/update/{id}', [EventController::class, 'update']); // atualiza no banco de dados

Route::get('produto', [EventController::class,'queryString']);

// Route::get('/produtos_teste/{id}', function ($id) {
//     return view('product',['id' => $id]);
// });

Route::get('produtos/{id?}',[EventController::class,'produtos'])->name('products'); // parametro opcionais

// Route::get('produtos', [CategoryController::class, 'index'])->name('site.products');


// Route::get('login', function () {
//     return view('layouts.app');
// });

Route::get('dashboard',[EventController::class,'dashboard']);

