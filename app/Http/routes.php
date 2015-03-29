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
Route::get('/home','AdminController@dashboard');

/*************************************************0*/

/***************  Routes for Dashboard ************/
Route::get('/player','AdminController@player');
Route::get('/club','AdminController@club');
Route::get('/coach','AdminController@coach');

/********************************************0****/


