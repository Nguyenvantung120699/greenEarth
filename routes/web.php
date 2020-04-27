<?php
Route::prefix("admin")->group(function (){
    include_once ("admin.php");
});

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
Route::get("/layout",function (){
    return view("themes.website.layout.layout");
});

Route::get('/logout',function (){
   \Illuminate\Support\Facades\Auth::logout();
   return redirect()->to("/login");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("chuyenmuc/{id}",'WebController@categoryPost');
Route::get("baiviet/{id}",'WebController@viewPost');

Route::get("search",'WebController@search');

Route::post("postLogin","WebController@postLogin");

Route::post("postcomment","WebController@postcomment");

