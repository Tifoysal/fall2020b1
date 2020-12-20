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

//admin panel login
Route::get('/login','UserController@login')->name('login');
Route::post('/login','UserController@loginProcess')->name('login.do');


Route::group(['middleware'=>'auth'],function (){
    Route::get('/admin', function () {
        return view('layouts.home');
    })->name('home');

    Route::get('/logout','UserController@logout')->name('logout');
    //category
    Route::get('/category','CategoryController@showCreateForm')->name('category.createForm');
    Route::post('/category/store','CategoryController@store')->name('category.store');
    Route::get('/category/list','CategoryController@list')->name('category.list');
    Route::get('/category/product/list/{c_id}','CategoryController@viewAllProduct')->name('category.product.list');
    Route::get('/order','OrderController@list')->name('order');

    Route::group(['prefix'=>'product'],function (){
        //product
        Route::get('/','ProductController@showForm')->name('product');
        Route::post('/create','ProductController@createProduct')->name('product.create');
        Route::get('/list','ProductController@list')->name('product.list');
        Route::get('/delete/{id}','ProductController@delete')->name('product.delete');
        Route::get('/view/{id}','ProductController@viewProduct')->name('product.view');
        Route::get('/edit/{id}','ProductController@editProduct')->name('product.edit');
        Route::put('/update/{id}','ProductController@updateProduct')->name('product.update');

    });
});

//frontend routes

Route::group(['namespace'=>'Frontend'],function ()
{
    Route::get('/','HomeController@home')->name('frontend.home');
    Route::get('/products/category/{id}','HomeController@productsUnderCategory')->name('category.products');

    //user route here
    Route::post('user/login','UserController@login')->name('user.login');
    Route::post('user/registration','UserController@registration')->name('user.registration');
});








