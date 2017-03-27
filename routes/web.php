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

Route::get('/dashboard', 'HomeController@index');

// Promotions
Route::get('/promotions', 'PromotionController@index');
Route::get('/promotions/{promotion}', 'PromotionController@show');
Route::get('/promotions/{promotion}/edit', 'PromotionController@edit');
Route::post('/promotions', 'PromotionController@store');
Route::delete('/promotions/{id}', 'PromotionController@remove');
Route::patch('/promotions/{promotion}', 'PromotionController@update');

// Dealers
Route::get('/dealers', 'DealerController@index');
Route::get('/dealers/{dealer}', 'DealerController@show');
Route::get('/dealers/{dealer}/edit', 'DealerController@edit');
Route::post('/dealers', 'DealerController@store');
Route::delete('/dealers/{id}', 'DealerController@remove');
Route::patch('/dealers/{dealer}', 'DealerController@update');

// // Individual Promotion and Lists Page
//
// Route::post('promotions/{promotion}/tasks', 'TaskController@store');
// Route::delete('tasks/{id}', 'TaskController@remove');
//
// // Edit Task
// Route::get('tasks/{task}/edit', 'TaskController@edit');
// Route::patch('tasks/{task}', 'TaskController@update');
