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

// Route::get('/', function () {
//     return view('layout.home');
// });

// Route::get('/hom', function () {
//     return view('home1');
// });

// Route::get('/homie', function () {
//     return view('result\layout');
// });

// Route::get('/name', function () {
//     return view('kayson.yusuph.gift');
// });

// Route::get('/demo', function () {
//     return view('kayson.taha.zubeda');
// });

Route::get('/', function () {
    return view('page.home');
});

Route::get('/home', "HomeController@home");
Route::get('/head', "HomeController@head");
Route::get('/login', "HomeController@index");
Route::get('/register', "HomeController@register");
Route::get('/college', "HomeController@college");
Route::get('/usscr', "HomeController@usscr");
Route::get('/class', "ResultController@class");
