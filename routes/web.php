<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller\AboutController;
use App\Http\Controllers\PerpustakaanController;

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

Route::get('/perpustakaan',[PerpustakaanController::class,'index']);
Route::get('/perpustakaan/create',[PerpustakaanController::class,'create']);
Route::post('/perpustakaan/store',[PerpustakaanController::class,'store']);
Route::get('/perpustakaan/{id}/edit',[PerpustakaanController::class,'edit']);
Route::put('/perpustakaan/{id}',[PerpustakaanController::class,'update']);
Route::delete('/perpustakaan/{id}',[PerpustakaanController::class,'destroy']);
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
