<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SomeController;
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
    return view('index');
});

Route::get('/index/page={page}&lib={lib}&shop_type={type}', 'ShopController@getPagesType');
Route::get('/index/page={page}&lib={lib}&shop_option={option}', 'ShopController@getPagesOption');

Route::get('/index/page={page}&lib={lib}', 'SomeController@getPages');
Route::post('/index', 'SomeController@postUsersData');
