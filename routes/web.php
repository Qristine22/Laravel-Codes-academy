<?php

use Illuminate\Support\Facades\Route;

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

// pages ******************************************************************************
Route::get('/', 'App\Http\Controllers\PagesController@home')->name('home');
Route::get('/about', 'App\Http\Controllers\PagesController@about')->name('about');
Route::get('/governing-board', 'App\Http\Controllers\PagesController@governingBoard')->name('governingBoard');
Route::get('/listeners-training', 'App\Http\Controllers\PagesController@listenersTraining')->name('listenersTraining');
Route::get('/biography', 'App\Http\Controllers\PagesController@biography')->name('biography');
Route::get('/rector', 'App\Http\Controllers\PagesController@rector')->name('rector');
Route::get('/rectors-decrees', 'App\Http\Controllers\PagesController@rectorsDecrees')->name('rectorsDecrees');
Route::get('/academy-structure', 'App\Http\Controllers\PagesController@academyStructure')->name('academyStructure');
Route::get('/report', 'App\Http\Controllers\PagesController@report')->name('report');
Route::get('/graduates', 'App\Http\Controllers\PagesController@graduates')->name('graduates');
Route::get('/admission', 'App\Http\Controllers\PagesController@admission')->name('admission');
Route::get('/judges-candidates', 'App\Http\Controllers\PagesController@judgesCandidates')->name('judgesCandidates');
Route::get('/gallery', 'App\Http\Controllers\PagesController@gallery')->name('gallery');
Route::get('/gallery-single', 'App\Http\Controllers\PagesController@gallerySingle')->name('gallerySingle');
Route::get('/mass-media', 'App\Http\Controllers\PagesController@massMedia')->name('massMedia');
Route::get('/news', 'App\Http\Controllers\PagesController@news')->name('news');
Route::get('/news-single/{id}', 'App\Http\Controllers\PagesController@newsSingle')->name('newsSingle');
Route::get('/full-time-education', 'App\Http\Controllers\PagesController@fullTimeEducation')->name('fullTimeEducation');
Route::get('/training-programs', 'App\Http\Controllers\PagesController@trainingPrograms')->name('trainingPrograms');
Route::get('/conducting-exams', 'App\Http\Controllers\PagesController@conductingExams')->name('conductingExams');
Route::get('/distance-learning', 'App\Http\Controllers\PagesController@distanceLearning')->name('distanceLearning');