<?php
Route::prefix("admin")->group(function (){
    include_once ("admin.php");
});

Route::get('setLocal-{lang}', function($lang) {
    \Illuminate\Support\Facades\Session::put('lang', $lang);
    return back();
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
Route::get("chuyenmuc/{path}",'WebController@categoryPost');
Route::get("baiviet/{cat_path}/{slug}",'WebController@viewPost');
Route::get("contact",'WebController@contact');
Route::get("blog",'WebController@blog');
Route::get("about",'WebController@about');

Route::get("search",'WebController@search');

Route::get("work",'WebController@work');


Route::get("donate",'WebController@donate');

Route::post("postLogin",'WebController@postLogin');

Route::post("commentPost/{post_id}","WebController@commentPost");
Route::post("joinMember/{post_id}","WebController@joinGroup");
Route::post("donate-now/{post_id}","WebController@donate");

