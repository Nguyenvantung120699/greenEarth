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

Route::get("/","WebController@index");
Route::get("/adminn","AdminController@index");

Route::get('/logout',function (){
   \Illuminate\Support\Facades\Auth::logout();
   return redirect()->to("/login");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("categorypost",'WebController@categoryPost');
Route::get("viewpost",'WebController@viewPost');

Route::get("search",'WebController@search');
Route::post("postLogin","WebController@postLogin");
