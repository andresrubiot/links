<?php

use Illuminate\Support\Facades\Route;
use App\Link;

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

Auth::routes();

/** Guest Routes */
Route::get('/', 'IndexController@index')->name('index');
Route::resource('links', 'LinksController');


/** Users Routes */
Route::get('/home', 'HomeController@index')->name('home');
