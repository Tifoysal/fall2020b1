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
    return view('layouts.home');
})->name('home');

Route::get('/order','OrderController@list')->name('order');

//product
Route::get('/product','ProductController@list')->name('product');
Route::post('/product/create','ProductController@createProduct')->name('product.create');

//category
Route::get('/category','CategoryController@showCreateForm')->name('category.createForm');
Route::post('/category/store','CategoryController@store')->name('category.store');
Route::get('/category/list','CategoryController@list')->name('category.list');
