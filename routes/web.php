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

    Route::prefix('customer')->group(function () {
      Route::get('/list','App\Http\Controllers\CustomerController@getIndex');
      Route::get('/new','App\Http\Controllers\CustomerController@new_index');
      Route::patch('/new','App\Http\Controllers\CustomerController@new_confirm');
      Route::post('/new','App\Http\Controllers\CustomerController@new_finish');
      Route::get('/edit/{id}','App\Http\Controllers\CustomerController@edit_index');
      Route::patch('/edit/{id}','App\Http\Controllers\CustomerController@edit_confirm');
      Route::post('/edit/{id}','App\Http\Controllers\CustomerController@edit_finish');
      Route::get('/delete/{id}','App\Http\Controllers\CustomerController@delete');
       Route::post('/delete/{id}','App\Http\Controllers\CustomerController@remove');

     });
    
    
    
    
    
    
    


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/list', [CustomerController::class, 'list'])->name('/list');
