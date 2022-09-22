<?php

use App\Http\Controllers\mycontroller;
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

Route::get('/',[mycontroller::class,'this']);
Route::get('filter',[mycontroller::class,'filter']);
Route::post('formsubmit',[mycontroller::class,'formsubmit']);
Route::post('editdata/updateform',[mycontroller::class,'updateForm']);
Route::get('datetedata/{id}',[mycontroller::class,'datetedata']);
Route::get('editdata/{id}',[mycontroller::class,'editdata']);





