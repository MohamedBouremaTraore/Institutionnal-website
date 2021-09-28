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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/handleLogin', [App\Http\Controllers\Paths::class, 'login']);
Route::get('/register', [App\Http\Controllers\Paths::class, 'register']);
Route::get('/commande', [App\Http\Controllers\Paths::class, 'commande']);
Route::get('/livraison', [App\Http\Controllers\Paths::class, 'livraison']);
Route::get('/client', [App\Http\Controllers\Paths::class, 'client']);