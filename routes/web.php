<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\products;
use App\Http\Controllers\users;

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
    return view('login');
});
Route::view('admin','admin/header');
Route::view('product','product/addProduct');
Route::get('product_page',[products::class,'product_page']);

Route::post('loginuser',[users::class,'login']);
Route::get('logout',[users::class,'logout']);


Route::post('addproduct',[products::class,'save']);
Route::get('showproduct',[products::class,'show']);
Route::get('edit/{id}',[products::class,'edit']);
Route::post('update',[products::class,'update']);
Route::get('delete/{id}',[products::class,'delete']);



