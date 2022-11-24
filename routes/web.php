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


// ROTA PARA USUÁRIO LOGADO

//Rota feed (
    Route::get('/', function () {
        return view('login');
    })->name('login');

    //Rota grupo
    Route::get('/grupo', function () {
    return view('grupo');
    })->name('grupo');

    //Rota gps
    Route::get('/gps', function () {
    return view('gps');
    })->name('gps');

    //Rota cadastro 
    Route::get('/cadastro', function () {
    return view('cadastro');
    })->name('cadastro');

    //Rota login
    Route::get('/feed', function () {
    return view('feed');
    })->name('feed');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
