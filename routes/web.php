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
#Route::get('/about', 'PagesController@index');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome',['name' => 'Salamander']);
});

/*
use App\Http\Controllers\PagesController;
Route::get('/abt', [PagesController::class, 'index']); //Not automatic load
*/

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::get('/post','PagesController@post');
Route::get('/create','PagesController@createPost_form');
Route::post('/create/insert','PagesController@createPost_insert');
//Route::match(['get', 'post'],'/create','PagesController@createPost_form');
//Route::match(['get', 'post'],'/create/insert','PagesController@createPost_insert');

