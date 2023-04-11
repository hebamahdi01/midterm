<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/expenses/index',[expensesController::class,"index"]);
Route::get('/expenses/create',[expensesController::class,"create"]);
Route::get('/expenses/{id}',[expensesController::class,"show"]);
Route::post('/expenses/store',[expensesController::class,"store"]);
Route::get('/expenses/{id}',[expensesController::class,"delete"]);
