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
    return view('page.logout/index');
});

Route::get('/home', "HomeController@home");
Route::get('/register', "HomeController@register");
Route::get('/vote', "VoteController@vote");
Route::get('/result', "ResultController@result");

Route::get('/vote/college', "VoteController@collegeVote");
Route::get('/vote/USSCR', "VoteController@USSCRVote");
Route::get('/vote/class', "VoteController@classVote");
Route::get('/result/college', "ResultController@collegeResult");
Route::get('/result/USSCR', "ResultController@USSCRResult");
Route::get('/result/class', "ResultController@classResult");
