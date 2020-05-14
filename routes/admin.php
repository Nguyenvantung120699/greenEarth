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

//{{--comment--}}
Route::get("/comment","AdminController@comment");

//{{--account--}}
Route::get("/account","AdminController@account");
Route::get('account/create',"AdminController@userCreate");
Route::post('account/store',"AdminController@userStore");
//{{--member--}}
Route::get("/member","AdminController@member");
Route::get("member/pending","AdminController@pendingMembers");
Route::get('member/{id}/pending',"AdminController@pendingMember");
Route::get('member/{id}/restore',"AdminController@restoreMember");
//{{--donate--}}
Route::get("/donate","AdminController@donate");
//{{--event--}}
Route::get("/event","AdminController@event");
Route::get("event/create","AdminController@createEvent");
Route::post("event/store","AdminController@storeEvent");
Route::get("/event/edit/{id}","AdminController@eventEdit");
Route::post("/event/update/{id}","AdminController@eventUpdate");
Route::get("/event/delete/{id}","AdminController@eventDestroy");

//{{--campaign--}}
Route::get("/campaign","AdminController@campaign");
Route::get("campaign/create","AdminController@createCampaign");
Route::post("campaign/store","AdminController@storeCampaign");
Route::get("/campaign/edit/{id}","AdminController@campaignEdit");
Route::post("/campaign/update/{id}","AdminController@campaignUpdate");
Route::get("/campaign/delete/{id}","AdminController@campaignDestroy");
