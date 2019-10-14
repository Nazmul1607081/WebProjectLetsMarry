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

/*
===============================insert==================
*/

Route::get('insert','dbdbControllerInsertion@insertform');
Route::post('create','dbdbControllerInsertion@insert');
//==================delete===================

Route::get('delete','deleteController@delete');
Route::post('delete1','deleteController@delete1');
Route::post('delete2','deleteController@delete2');

//==================update===================

Route::get('update','updateController@update');
Route::post('update1','updateController@update1');

//==================show===================

Route::get('show','showController@show');
//==================devorseshow===================

Route::get('dshow','dshowController@dshow');

//==================search===================

Route::get('search','searchController@search');
Route::post('search1','searchController@search1');
//============================================================

Route::get('/describe_marriage', 'dbController@describe_marriage');
Route::get('/describe_people', 'dbController@describe_people');
Route::get('/describe_devorse', 'dbController@describe_devorse');

Route::get('/select_marriage', 'dbController@select_marriage');
Route::get('/select_people', 'dbController@select_people');
Route::get('/select_devorse', 'dbController@select_devorse');
Route::get('/drop_column', 'dbController@drop_column');
Route::get('/add_column', 'dbController@add_column');
Route::get('/modify_column', 'dbController@modify_column');
Route::get('/update_column', 'dbController@update_column');
Route::get('/set_key', 'dbController@set_key');
//============================================================================aggregate group by having
Route::get('/distinct', 'dbController1@distinct');
Route::get('/compound_comparator', 'dbController1@compound_comparator');
Route::get('/renge_condition', 'dbController1@renge_condition');
Route::get('/set_membership', 'dbController1@set_membership');
Route::get('/pattern_matching', 'dbController1@pattern_matching');
Route::get('/column_ordering', 'dbController1@column_ordering');
Route::get('/multiple_column_ordering', 'dbController1@multiple_column_ordering');
Route::get('/aggregate_function_count', 'dbController1@aggregate_function_count');
Route::get('/aggregate_function_sum', 'dbController1@aggregate_function_sum');
Route::get('/aggregate_function_max', 'dbController1@aggregate_function_max');
Route::get('/aggregate_function_avg', 'dbController1@aggregate_function_avg');
Route::get('/nvl', 'dbController1@nvl');
Route::get('/group_by', 'dbController1@group_by');
Route::get('/having', 'dbController1@having');
//================================================================================join
Route::get('/join', 'dbController2@join');
Route::get('/natural_join', 'dbController2@natural_join');
Route::get('/inner_join', 'dbController2@inner_join');
Route::get('/left_outer_join', 'dbController2@left_outer_join');
Route::get('/right_outer_join', 'dbController2@right_outer_join');
Route::get('/full_outer_join', 'dbController2@full_outer_join');
Route::get('/self_join', 'dbController2@self_join');
//===================================
Route::get('/self_join', 'dbController2@self_join');
Route::get('/set', 'dbController3@set');
Route::get('/subquery', 'dbController3@subquery');