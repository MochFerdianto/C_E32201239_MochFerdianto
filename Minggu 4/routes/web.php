<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_Ferdi;
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

//Route::get('user', 'ControllerFerdi@index');

Route::get('user', [Controller_Ferdi::class, 'index']);

Route::resource('user', Controller_Ferdi::class);

Route::get("/halamanhome", function(){
    return view("halamanhome");
});