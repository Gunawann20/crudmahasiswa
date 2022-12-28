<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/',[MahasiswaController::class,'index']);
Route::get('/tambah', function(){
    return view('tambahmahasiswa');
});
Route::post('/tambahmahasiswa',[MahasiswaController::class,'tambah']);
Route::get('/edit/{id}',[MahasiswaController::class,'edit']);
Route::post('/editmahasiswa/{id}',[MahasiswaController::class,'update']);
Route::get('/delete/{id}',[MahasiswaController::class,'delete']);
