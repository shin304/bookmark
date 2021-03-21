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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

//リスト一覧表示
Route::get('/', 'BookmarkController@index')->name('bookmarks.index');

//詳細ページ表示
Route::get('bookmarks/{bookmark}', 'BookmarkController@show')->name('bookmarks.show');
