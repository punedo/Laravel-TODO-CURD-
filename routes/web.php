<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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


Route::get('/',[PostController::class,'posts'])->name('home');

Route::get('/create',[PostController::class,'create'])->name('create');
Route::post('/save',[PostController::class,'save'])->name('save');
Route::get('/edit{id}',[PostController::class,'edit'])->name('edit');



Route::post('/update{id}',[PostController::class,'update'])->name('update');
Route::get('/delete{id}',[PostController::class,'delete'])->name('delete');
