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

Route::group(['prefix' => 'admin'], function() {
  Route::get('post/create', 'Admin\PostController@add');
  Route::get('profile/create', 'Admin\ProfileController@add');
  Route::get('user/mypage', 'Admin\UserController@add');
  Route::get('post/create', 'Admin\PostController@create');
  Route::get('post/details', 'Admin\PostController@details');
  Route::get('post/comment', 'Admin\PostController@comment');
  Route::get('profile/create', 'Admin\ProfileController@create');
  Route::get('profile/edit', 'Admin\ProfileController@edit');
  Route::get('user/mypage', 'Admin\UserController@mypage');
  Route::get('user/mypost', 'Admin\UserController@mypost');
});

Route::get('home', 'HomeController@home');
Route::get('search', 'SearchController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
