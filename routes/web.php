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

Route::get('/', 'HomeC@showelcome') -> name('home');
Route::get('/create', 'HomeC@create');
Route::post('/create', 'HomeC@store') ->name('book.create');
Route::get('/update/{id}', 'HomeC@update')->name('book.update');
Route::delete('/delete/{id}', 'HomeC@delete')->name('book.delete');
Route::patch('/patch/{id}', 'HomeC@storebook')-> name('storebook');
Route::get('/read/{id}', 'HomeC@read')-> name('detailbook');