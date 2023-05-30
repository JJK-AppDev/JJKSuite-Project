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

Route::get(url: '/' , action:'App\Http\Controller\StripeController@index')->name(name:'index');
Route::post(url: '/checkout' , action:'App\Http\Controller\StripeController@checkout')->name(name:'checkout');
Route::get(url: '/success' , action:'App\Http\Controller\StripeController@success')->name (name:'success') ; 
