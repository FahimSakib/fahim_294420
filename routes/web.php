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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function(){
    Route::get('/', 'Backend\DashboardController@index')->name('dashboard');
    Route::resource('products','Backend\ProductController');
    Route::get('products/trash/{id}', 'Backend\ProductController@trash')->name('products.trash');
    Route::get('products/restore/{id}', 'Backend\ProductController@restore')->name('products.restore');
    Route::get('products/trash','Backend\ProductController@trash_index')->name('products.trash.index');
});

Route::group(['middleware' => 'auth'], function(){
   
    Route::get('products/trash','Backend\ProductController@trash_index')->name('products.trash.index');
    Route::get('logout','Backend\LogoutController@perform')->name('admin.logout');
});

Route::get('/','Frontend\HomeController@index')->name('home');
Route::get('product-details/{id}','Frontend\SIngleController@index')->name('product.details');

