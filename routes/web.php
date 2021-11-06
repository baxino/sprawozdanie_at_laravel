<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Wniosek_dyrektoraController;
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


//main view show
Route::get('/', function () {
    return view('welcome');
});

Route::get('/wniosek_dyrektora/',[Wniosek_dyrektoraController::class,'index'])->name('wniosek_dyr_home');


// --------------- segment wniosek dyrektora ---------------------//
Route::post('/wniosek_dyrektora/check_rspo',[Wniosek_dyrektoraController::class,'check_rspo'])->name('check_rspo');


//nowy wniosek dyrektora
Route::get('/wniosek_dyrektora/formularz',[Wniosek_dyrektoraController::class,'formularz'])->name('formularz_dyr');
Route::post('/wniosek_dyrektora/formularz-store',[PostController::class,'store'])->name('formularz_proc');





Route::get('/post/formularz', [PostController::class,'index'] )->name('pokaz_formularz');
Route::post('/post/store-form',[PostController::class,'store'])->name('formularz_proc');
Route::get('/post/thx_wyslanie_formularza',[PostController::class,'thx_formularz'])->name('thx_formularz');

