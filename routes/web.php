<?php

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
Route::prefix('category')->group(function () {
 Route::get('add','CategoryController@index')->name('add-category');
 Route::post('add','CategoryController@saveCategory')->name('save-category');
 Route::get('list','CategoryController@categoryList')->name('category-list');
});
Route::prefix('manufacture')->group(function(){
 Route::get('add','ManufactureController@index')->name('add-manufacture');
 Route::post('add','ManufactureController@saveManufacture')->name('save-manufacture');
 Route::get('list','ManufactureController@manufactureList')->name('manufacture-list');
});
Route::prefix('product')->group(function(){
 Route::get('add','ProductController@index')->name('add-product');
 Route::post('add','ProductController@saveProduct')->name('save-product');
 Route::get('list','ProductController@productList')->name('product-list');
});
Route::prefix('slider')->group(function(){
 Route::get('add','SliderController@index')->name('add-slider');
 Route::post('add','SliderController@saveSlider')->name('save-slider');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/','CustomerController@index');
Route::get('/category-wise-product','CustomerController@categoryWiseProduct')->name('category-wise-product');
Route::get('/product-details/{id}','CustomerController@productDetails')->name('product-details');


