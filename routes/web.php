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


// about/*********************************************************************************
Route::group(['prefix' => 'about'], function () {
    Route::get('/', 'App\Http\Controllers\PagesController@about')->name('about');
    Route::get('/governing-board', 'App\Http\Controllers\PagesController@governingBoard')->name('governingBoard');
    Route::get('/listeners-training', 'App\Http\Controllers\PagesController@listenersTraining')->name('listenersTraining');
    Route::get('/biography', 'App\Http\Controllers\PagesController@biography')->name('biography');
    Route::get('/rector', 'App\Http\Controllers\PagesController@rector')->name('rector');
    Route::get('/rectors-biography', 'App\Http\Controllers\PagesController@rectorsBiography')->name('rectorsBiography');
    Route::get('/former-rectors-biography', 'App\Http\Controllers\PagesController@formerRectorsBiography')
        ->name('formerRectorsBiography');
    Route::get('/rectors-decrees', 'App\Http\Controllers\PagesController@rectorsDecrees')->name('rectorsDecrees');
    Route::get('/academy-structure', 'App\Http\Controllers\PagesController@academyStructure')->name('academyStructure');
    Route::get('/report', 'App\Http\Controllers\PagesController@report')->name('report');
    Route::get('/graduates', 'App\Http\Controllers\PagesController@graduates')->name('graduates');
    Route::get('/graduates/judges', 'App\Http\Controllers\PagesController@graduatesJudges')
        ->name('graduatesJudges');
    Route::get('/graduates/prosecutors', 'App\Http\Controllers\PagesController@graduatesProsecutors')
        ->name('graduatesProsecutors');
    Route::get('/graduates/investigators', 'App\Http\Controllers\PagesController@graduatesInvestigators')
        ->name('graduatesInvestigators');
    Route::get('/admission', 'App\Http\Controllers\PagesController@admission')->name('admission');
    Route::get('/judges-candidates', 'App\Http\Controllers\PagesController@judgesCandidates')->name('judgesCandidates');
    Route::get('/prosecutors-candidates', 'App\Http\Controllers\PagesController@prosecutorsCandidates')
        ->name('prosecutorsCandidates');
    Route::get('/investigators-candidates', 'App\Http\Controllers\PagesController@investigatorsCandidates')
        ->name('investigatorsCandidates');
    Route::get('/gallery', 'App\Http\Controllers\PagesController@gallery')->name('gallery');
    Route::get('/gallery-single', 'App\Http\Controllers\PagesController@gallerySingle')->name('gallerySingle');
    Route::get('/mass-media', 'App\Http\Controllers\PagesController@massMedia')->name('massMedia');
});


// news/*********************************************************************************
Route::group(['prefix' => 'news'], function () {
    Route::get('/', 'App\Http\Controllers\PagesController@news')->name('news');
    Route::get('/news-single/{id}', 'App\Http\Controllers\PagesController@newsSingle')->name('newsSingle');
});


// full-time-education/******************************************************************
Route::group(['prefix' => 'full-time-education'], function () {
    Route::get('/', 'App\Http\Controllers\PagesController@fullTimeEducation')->name('fullTimeEducation');
    Route::get('/training-programs', 'App\Http\Controllers\PagesController@trainingPrograms')->name('trainingPrograms');
    Route::get('/conducting-exams', 'App\Http\Controllers\PagesController@conductingExams')->name('conductingExams');
    Route::get('/conducting-practice', 'App\Http\Controllers\PagesController@conductingPractice')->name('conductingPractice');
    Route::get('/rules-of-behaviour', 'App\Http\Controllers\PagesController@rulesOfBehaviour')->name('rulesOfBehaviour');
    Route::get('/dormitory-rules', 'App\Http\Controllers\PagesController@dormitoryRules')->name('dormitoryRules');
    Route::get('/provide-deferral', 'App\Http\Controllers\PagesController@provideDeferral')->name('provideDeferral');
});


// distance-learning/********************************************************************
Route::group(['prefix' => 'distance-learning'], function () {
    Route::get('/', 'App\Http\Controllers\PagesController@distanceLearning')->name('distanceLearning');
    Route::get('/video-materials', 'App\Http\Controllers\PagesController@videoMaterials')->name('videoMaterials');
    Route::get('/distance-learning-courses', 'App\Http\Controllers\PagesController@distanceLearningCourses')
        ->name('distanceLearningCourses');
    Route::get('/motivational-videos', 'App\Http\Controllers\PagesController@motivationalVideos')->name('motivationalVideos');
    Route::get('/media-materials', 'App\Http\Controllers\PagesController@mediaMaterials')->name('mediaMaterials');
    Route::get('/distance-learning-guide', 'App\Http\Controllers\PagesController@distanceLearningGuide')
        ->name('distanceLearningGuide');
});


// library/****************************************************************************
Route::group(['prefix' => 'library'], function () {
    Route::get('/', 'App\Http\Controllers\PagesController@library')->name('library');
    Route::get('/training-materials', 'App\Http\Controllers\PagesController@trainingMaterials')
        ->name('trainingMaterials');
    Route::get('/video-lectures', 'App\Http\Controllers\PagesController@videoLectures')->name('videoLectures');
    Route::get('/video-lecture-single/{id}', 'App\Http\Controllers\PagesController@videoLectureSingle')
        ->name('videoLectureSingle');
    Route::get('/academy-publications', 'App\Http\Controllers\PagesController@academyPublications')
        ->name('academyPublications');
    Route::get('/professional-literature', 'App\Http\Controllers\PagesController@professionalLiterature')
        ->name('professionalLiterature');
    Route::get('/organizing-library-activities', 'App\Http\Controllers\PagesController@organizingLibraryActivities')
        ->name('organizingLibraryActivities');
    Route::get('/investigator-training-modules', 'App\Http\Controllers\PagesController@investigatorTrainingModules')
        ->name('investigatorTrainingModules');
    Route::get('/ECHR-resources', 'App\Http\Controllers\PagesController@ECHRResources')
        ->name('ECHRResources');
});


// bulletin/***************************************************************************
Route::group(['prefix' => 'bulletin'], function () {
    Route::get('/', 'App\Http\Controllers\PagesController@bulletin')->name('bulletin');
});


// partners/***************************************************************************
Route::group(['prefix' => 'partners'], function () {
    Route::get('/', 'App\Http\Controllers\PagesController@partners')->name('partners');
    Route::get('/partner-single/{id}', 'App\Http\Controllers\PagesController@partnerSingle')->name('partnerSingle');
});


// contacts/***************************************************************************
Route::get('/contacts', 'App\Http\Controllers\PagesController@contacts')->name('contacts');


// admin form/***************************************************************************
Route::get('/login', 'App\Http\Controllers\PagesController@login')->name('login');
Route::post('/login-progress', 'App\Http\Controllers\AuthController@loginProgress')->name('loginProgress');
Route::get('/register-progress', 'App\Http\Controllers\AuthController@registerProgress')->name('registerProgress');


Route::middleware('auth')->group(function () {
    Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');





    // admin page/***************************************************************************
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        // home form/***************************************************************************
        Route::resource('home', 'App\Http\Controllers\Admin\HomeController');

        Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
            Route::resource('page', 'App\Http\Controllers\Admin\About\AboutController');
            Route::resource('governing-board-page', 'App\Http\Controllers\Admin\About\GoverningBoardPageController');
        });
    });
});
