<?php

use Illuminate\Support\Facades\Route;
use app\Http\controllers\HolaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which comotuquieras
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/holamundo/{variable2}/{variable3?}', [App\Http\controllers\HolaController::class,'index']);


Route::get('/cadena/{variable}', [App\Http\controllers\HolaController::class,'prueba1']);