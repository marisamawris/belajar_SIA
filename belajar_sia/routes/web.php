<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartJsController;

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

//route CRUD
Route::get('/sia','SiaController@index');
Route::get('/sia/tambah','SiaController@tambah');
Route::post('/sia/store','SiaController@store');
Route::get('/sia/edit/{id}','SiaController@edit');
Route::post('/sia/update','SiaController@update');
Route::get('/sia/hapus/{id}','SiaController@hapus');
Route::get('/chart', 'HighchartController@handleChart');
Route::get('/chartjs', [ChartJsController::class, 'index'])->name('chartjs.index');