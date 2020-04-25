<?php

Route::get("/home","AdminController@index");

// {{--category--}}
Route::get("/category","AdminController@category");
Route::get("/category/create","AdminController@categoryCreate");
Route::get("/category/edit/{id}","AdminController@categoryEdit");
Route::post("/category/store","AdminController@categoryStore");
Route::post("/category/update/{id}","AdminController@categoryUpdate");
Route::get('category/delete/{id}',"AdminController@categoryDestroy");
Route::get('category/{id}/disable',"AdminController@disableCategory");
Route::get('category/{id}/restore',"AdminController@restoreCategory");

//         {{--post--}}
Route::get("/post","AdminController@post");
Route::get("/post/create","AdminController@postCreate");
Route::get("/post/edit/{id}","AdminController@postEdit");
Route::post("/post/store","AdminController@postStore");
Route::post("/post/update/{id}","AdminController@postUpdate");
Route::get("/post/delete/{id}","AdminController@postDestroy");