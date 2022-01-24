<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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

// localization
session(['locale' => 'am']);
App::setLocale('am');
Route::get('locale/{locale}', 'App\Http\Controllers\MainController@changeLocale')->name('lang');

Route::middleware(['set_locale'])->group(function(){
    // pages ******************************************************************************
    Route::get('/', 'App\Http\Controllers\PagesController@home')->name('home');
    
    
    // about/*********************************************************************************
    Route::group(['prefix' => 'about'], function () {
        Route::get('/', 'App\Http\Controllers\PagesController@about')->name('about');
        Route::get('/governing-board', 'App\Http\Controllers\PagesController@governingBoard')->name('governingBoard');
        Route::get('/governing-board/decree/{year}', 'App\Http\Controllers\PagesController@governingBoardDecree')
            ->name('governingBoardDecree');
        // governing board pdf download
        Route::get('/governing-board/decree/{pdf}/download', 'App\Http\Controllers\MainController@governingBoardDecreedownload')
            ->name('governingBoardDecreedownload');
        Route::get('/governing-board/biography/{id}', 'App\Http\Controllers\PagesController@governingBoardBiography')
            ->name('governingBoardBiography');


        // rector
        Route::group(['prefix' => 'rector'], function () {
            Route::get('/', 'App\Http\Controllers\PagesController@rector')->name('rector');
            Route::get('/rectors-biography', 'App\Http\Controllers\PagesController@rectorsBiography')
                ->name('rectorsBiography');
            Route::get('/former-rectors-biography', 'App\Http\Controllers\PagesController@formerRectorsBiography')
                ->name('formerRectorsBiography');
            Route::get('/decrees', 'App\Http\Controllers\PagesController@rectorsDecrees')->name('rectorsDecrees');
            // governing board pdf download
            Route::get('/decree/{pdf}/download', 'App\Http\Controllers\MainController@rectorsDecreedownload')
                ->name('rectorsDecreedownload');
        });


        // academy structure
        Route::group(['prefix' => 'academy-structure'], function () {
            Route::get('/', 'App\Http\Controllers\PagesController@academyStructure')->name('academyStructure');
            Route::get('/vice-rector', 'App\Http\Controllers\PagesController@VICERector')->name('VICERector');
            Route::get('/chief-of-staff', 'App\Http\Controllers\PagesController@chiefOfStaff')->name('chiefOfStaff');
            Route::get('/distance-learning', 'App\Http\Controllers\PagesController@distanceLearningChief')
                ->name('distanceLearningChief');
            Route::get('/programmatic-methodological-activities', 'App\Http\Controllers\PagesController@programmaticMethodologicalActivities')
                ->name('programmaticMethodologicalActivities');
            Route::get('/training-for-trainees', 'App\Http\Controllers\PagesController@trainingForTrainees')
                ->name('trainingForTrainees');
            Route::get('/training-organization', 'App\Http\Controllers\PagesController@trainingOrganization')
                ->name('trainingOrganization');
            Route::get('/unit-of-finance', 'App\Http\Controllers\PagesController@unitOfFinance')
                ->name('unitOfFinance');
            Route::get('/cooperation-and-public-relation', 'App\Http\Controllers\PagesController@cooperationAndPublicRelation')
                ->name('cooperationAndPublicRelation');
            Route::get('/staff-and-document-management', 'App\Http\Controllers\PagesController@staffAndDocumentManagement')
                ->name('staffAndDocumentManagement');
            Route::get('/tehchnical-and-economic-activities', 'App\Http\Controllers\PagesController@tehchnicalAndEconomicActivities')->name('tehchnicalAndEconomicActivities');
            Route::get('/hotel', 'App\Http\Controllers\PagesController@hotel')
                ->name('hotel');
        });


        Route::get('/report/{year?}', 'App\Http\Controllers\PagesController@report')->name('report');
        Route::get('/graduates/{year?}', 'App\Http\Controllers\PagesController@graduates')->name('graduates');
        Route::get('/graduates/{year}/judges', 'App\Http\Controllers\PagesController@graduatesJudges')
            ->name('graduatesJudges');
        Route::get('/graduates/{year}/prosecutors', 'App\Http\Controllers\PagesController@graduatesProsecutors')
            ->name('graduatesProsecutors');
        Route::get('/graduates/{year}/investigators', 'App\Http\Controllers\PagesController@graduatesInvestigators')
            ->name('graduatesInvestigators');


        //admission
        Route::group(['prefix' => 'admission'], function () {
            Route::get('/', 'App\Http\Controllers\PagesController@admission')->name('admission');
            Route::get('/judges-candidates', 'App\Http\Controllers\PagesController@judgesCandidates')
                ->name('judgesCandidates');
            Route::get('/prosecutors-candidates', 'App\Http\Controllers\PagesController@prosecutorsCandidates')
                ->name('prosecutorsCandidates');
            Route::get('/investigators-candidates', 'App\Http\Controllers\PagesController@investigatorsCandidates')
                ->name('investigatorsCandidates');
        });


        Route::get('/gallery/{year?}', 'App\Http\Controllers\PagesController@gallery')->name('gallery');
        Route::get('/mass-media/{year?}', 'App\Http\Controllers\PagesController@massMedia')->name('massMedia');
    });
    
    
    // news/*********************************************************************************
    Route::group(['prefix' => 'news'], function () {
        Route::get('/', 'App\Http\Controllers\PagesController@news')->name('news');
        Route::get('/{id}', 'App\Http\Controllers\PagesController@newsSingle')->name('newsSingle');
    });
    
    
    // full-time-education/******************************************************************
    Route::group(['prefix' => 'full-time-education'], function () {
        Route::get('/', 'App\Http\Controllers\PagesController@fullTimeEducation')
            ->name('fullTimeEducation');
        Route::get('/training-programs', 'App\Http\Controllers\PagesController@trainingPrograms')
            ->name('trainingPrograms');
        Route::get('/training-programs/{year}/{category}', 'App\Http\Controllers\PagesController@trainingProgramSingle')
            ->name('trainingProgramSingle');
        Route::get('/conducting-exams', 'App\Http\Controllers\PagesController@conductingExams')->name('conductingExams');
        Route::get('/conducting-practice', 'App\Http\Controllers\PagesController@conductingPractice')
            ->name('conductingPractice');
        Route::get('/rules-of-behaviour', 'App\Http\Controllers\PagesController@rulesOfBehaviour')->name('rulesOfBehaviour');
        Route::get('/dormitory-rules', 'App\Http\Controllers\PagesController@dormitoryRules')->name('dormitoryRules');
        Route::get('/provide-deferral', 'App\Http\Controllers\PagesController@provideDeferral')->name('provideDeferral');
    });
    
    
    // distance-learning/********************************************************************
    Route::group(['prefix' => 'distance-learning'], function () {
        Route::get('/', 'App\Http\Controllers\PagesController@distanceLearning')->name('distanceLearning');
        Route::get('/video', 'App\Http\Controllers\PagesController@distanceLearningVideo')->name('distanceLearningVideo');
        Route::get('/video-materials', 'App\Http\Controllers\PagesController@videoMaterials')->name('videoMaterials');


        // courses
        Route::group(['prefix' => 'courses'], function () {
            Route::get('/', 'App\Http\Controllers\PagesController@distanceLearningCourses')
                ->name('distanceLearningCourses');
            Route::get('/motivational-videos/{id}', 'App\Http\Controllers\PagesController@motivationalVideos')
                ->name('motivationalVideos');
            Route::get('/media-materials/{id}', 'App\Http\Controllers\PagesController@mediaMaterials')
                ->name('mediaMaterials');
            Route::get('/distance-learning-guide', 'App\Http\Controllers\PagesController@distanceLearningGuide')
                ->name('distanceLearningGuide');
        });
    });
    
    
    // library/****************************************************************************
    Route::group(['prefix' => 'library'], function () {
        Route::get('/', 'App\Http\Controllers\PagesController@library')->name('library');
        Route::get('/academy-publications', 'App\Http\Controllers\PagesController@academyPublications')
            ->name('academyPublications');
        Route::get('/manuals', 'App\Http\Controllers\PagesController@manuals')
            ->name('manuals');
        Route::get('/training-materials', 'App\Http\Controllers\PagesController@trainingMaterials')
            ->name('trainingMaterials');
        Route::get('/video-lectures', 'App\Http\Controllers\PagesController@videoLectures')->name('videoLectures');
        Route::get('/video-lectures/{id}', 'App\Http\Controllers\PagesController@videoLectureSingle')
            ->name('videoLectureSingle');
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

            // header /***************************************************************************
            Route::resource('header', 'App\Http\Controllers\Admin\HeaderController');
            Route::resource('subheader', 'App\Http\Controllers\Admin\SubheaderController');

            // home /***************************************************************************
            Route::resource('home', 'App\Http\Controllers\Admin\HomeController');
    
            // about /***************************************************************************
            Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
                // governing board page
                Route::resource('page', 'App\Http\Controllers\Admin\About\AboutController');
                Route::resource('governing-board-page', 'App\Http\Controllers\Admin\About\GoverningBoardPageController');
                Route::resource('governing-board-decree', 'App\Http\Controllers\Admin\About\GoverningBoardDecreeController');
                Route::resource('governing-board-staff', 'App\Http\Controllers\Admin\About\GoverningBoardStaffController');


                // rectors page
                Route::resource('rectors-page', 'App\Http\Controllers\Admin\About\RectorsPageController');
                Route::resource('rectors-decree', 'App\Http\Controllers\Admin\About\RectorsDecreeController');
                Route::resource('rectors-biography', 'App\Http\Controllers\Admin\About\RectorsBiographyController');
                Route::resource('former-rectors-biography','App\Http\Controllers\Admin\About\FormerRectorsBiographyController');


                // academy structure page
                Route::resource('academy-structure','App\Http\Controllers\Admin\About\AcademyStructureController');
                Route::resource('workers','App\Http\Controllers\Admin\About\WorkersController');
                // edit page deleting img
                Route::get('/workers/deleting-img/{id}', 'App\Http\Controllers\Admin\About\WorkersController@imgDelete')
                    ->name('workersImgDelete');


                // reports page
                Route::resource('report','App\Http\Controllers\Admin\About\ReportController');


                // graduates page
                Route::resource('graduates','App\Http\Controllers\Admin\About\GraduateController');
                

                // admission page
                Route::resource('admission','App\Http\Controllers\Admin\About\AdmissionController');
                // candidate page
                Route::resource('candidate','App\Http\Controllers\Admin\About\CandidateController');


                // candidate page
                Route::resource('gallery','App\Http\Controllers\Admin\About\GalleryController');
                Route::get('/gallery/deleting-img/{id}', 'App\Http\Controllers\Admin\About\GalleryController@imgDelete')
                ->name('galleryImgDelete');

                // mass media page
                Route::resource('mass-media','App\Http\Controllers\Admin\About\MassMediaController');
                Route::get('/mass-media/link/{id}', 'App\Http\Controllers\Admin\About\MassMediaController@linkDelete')
                ->name('massMediaLinkDelete');
            });
            
            // news /***************************************************************************
            Route::resource('news', 'App\Http\Controllers\Admin\NewsController');
            Route::get('/news/deleting-img/{id}', 'App\Http\Controllers\Admin\NewsController@imgDelete')
            ->name('news.ImgDelete');


            // news /***************************************************************************
            Route::group(['prefix' => 'full-time-education', 'as' => 'full-time-education.'], function () {
                Route::resource('training-program', 'App\Http\Controllers\Admin\FullTime\TrainingProgramController');
            });
        });
    });
});
