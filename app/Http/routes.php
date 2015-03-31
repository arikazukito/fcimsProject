<?php

/****************  Authentication  ********************/
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
/***************************************************0*/


/*************** Route for pages ******************/

Route::get('/','PageController@index');
Route::get('/about','PageController@about');
Route::get('/contact','PageController@contact');
Route::get('/playerDetail','PageController@playerDetail');
Route::get('/clubDetail','PageController@clubDetail');
Route::get('/coachDetail','PageController@coachDetail');
Route::get('/admin/dashboard','AdminController@dashboard');
Route::get('/pages/index','PageController@index');

/*************************************************0*/

/***************  Routes for Dashboard ************/
Route::get('/player/index','AdminController@player');
Route::get('/club/index','AdminController@club');
Route::get('/coach/index','AdminController@coach');

/********************************************0****/

/******************8 Routes for Player ************/
Route::resource('player','PlayerController');

