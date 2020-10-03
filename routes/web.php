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

// Route::get('/', 'HomeController@home');
// Route::get('/category', 'CategoryController@categories');
// Route::get('/category/{id}', 'CategoryController@category_page')->where('id', '[0-9]+');
// Route::get('/page/{url}', 'PageController@page')->where('url', '[a-z]+');







// Route::get('/admin', 'AdminController@admin_page');
// Route::post('/admin/panel', 'AdminController@authenticate');






Route::get('/', 'SoccerHomeController@home');

Route::get('/league/{league_id}', 'SoccerHomeController@leagues');

Route::get('/league/{count}/{league_id}', 'SoccerHomeController@sub_leagues');

Route::get('/mathes/{mathes_id}', 'SoccerHomeController@matches');