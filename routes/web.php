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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/index', 'Admin\IndexController@index');
//Route::resource('article','Admin\ArticleController');
Route::get('admin/update',[
    'uses'=>'Admin\ArticleController@query',
]);
Route::any('url',[
    'uses' =>'Admin\ArticleController@url',
    'as' =>'mian2'
]);
Route::group(['middleware'=>['web']],function (){


});
Route::any('article/form',[
    'uses' =>'Admin\ArticleController@form',
    'as' => 'form'
]);
Route::any('article/session',[
    'uses' => 'Admin\ArticleController@session',
]);

