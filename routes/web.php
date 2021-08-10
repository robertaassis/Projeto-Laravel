<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { // onde ele acessa
$nomeProg="João&&";
$idade=29;
$array=[20,40,60,80,100];
    return view('welcome',
    [
    'nome'=>$nomeProg,
    'idade'=>$idade,
    'arr'=>$array
]); // retorna o $nome para usar no blade welcome
})->name('home'); // nome atribuido a esse local

Route::get('/contact', function () {
    return view('create');
})->name('contact');

Route::get('/produto', function () { // querystring
    
    $busca=request('search'); // pego o que vem no parametro ?search, ex ?search=short $busca=short
    return view('product',['busca' => $busca]);
});

Route::get('/produtos_teste/{id}', function ($id) {
    return view('product',['id' => $id]);
});

Route::get('/produtos/{id?}', function ($id=null) { // parametro opcional
    
    return view('product',['id' => $id]);
})->name('products');


