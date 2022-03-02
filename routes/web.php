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

Route::middleware(['set_locale'])->group(function () {
    // pages ******************************************************************************
    Route::get('/', 'App\Http\Controllers\PagesController@home')->name('home');
    Route::get('/search', 'App\Http\Controllers\PagesController@search')->name('search');


    // about/*********************************************************************************
    Route::group(['prefix' => 'about'], function () {
        // about page
        Route::get('/', 'App\Http\Controllers\PagesController@about')->name('about');
        // governing board
        Route::get('/governing-board', 'App\Http\Controllers\PagesController@governingBoard')->name('governingBoard');
        // governing board decree
        Route::get('/governing-board/decree/{year}', 'App\Http\Controllers\PagesController@governingBoardDecree')
            ->name('governingBoardDecree');
        Route::get('/governing-board/decree/{pdf}/download', 'App\Http\Controllers\MainController@governingBoardDecreedownload')
            ->name('governingBoardDecreedownload');
        // governing board biography
        Route::get('/governing-board/biography/{id}', 'App\Http\Controllers\PagesController@governingBoardBiography')
            ->name('governingBoardBiography');


        // rector
        Route::group(['prefix' => 'rector'], function () {
            // rector page
            Route::get('/', 'App\Http\Controllers\PagesController@rector')->name('rector');
            // rectors biography
            Route::get('/rectors-biography', 'App\Http\Controllers\PagesController@rectorsBiography')
                ->name('rectorsBiography');
            Route::get('/former-rectors-biography', 'App\Http\Controllers\PagesController@formerRectorsBiography')
                ->name('formerRectorsBiography');
            // rector decree
            Route::get('/decrees', 'App\Http\Controllers\PagesController@rectorsDecrees')->name('rectorsDecrees');
            Route::get('/decree/{pdf}/download', 'App\Http\Controllers\MainController@rectorsDecreedownload')
                ->name('rectorsDecreedownload');
        });


        // academy structure
        Route::group(['prefix' => 'academy-structure'], function () {
            // rector page
            Route::get('/', 'App\Http\Controllers\PagesController@academyStructure')->name('academyStructure');
            // vice rector
            Route::get('/vice-rector', 'App\Http\Controllers\PagesController@VICERector')->name('VICERector');
            // chief of staff
            Route::get('/chief-of-staff', 'App\Http\Controllers\PagesController@chiefOfStaff')->name('chiefOfStaff');
            // distance learning
            Route::get('/distance-learning', 'App\Http\Controllers\PagesController@distanceLearningChief')
                ->name('distanceLearningChief');
            // programmatic methodological activities
            Route::get('/programmatic-methodological-activities', 'App\Http\Controllers\PagesController@programmaticMethodologicalActivities')
                ->name('programmaticMethodologicalActivities');
            // training for trainees
            Route::get('/training-for-trainees', 'App\Http\Controllers\PagesController@trainingForTrainees')
                ->name('trainingForTrainees');
            // training organization
            Route::get('/training-organization', 'App\Http\Controllers\PagesController@trainingOrganization')
                ->name('trainingOrganization');
            // unit of finance
            Route::get('/unit-of-finance', 'App\Http\Controllers\PagesController@unitOfFinance')
                ->name('unitOfFinance');
            // cooperation and public relation
            Route::get('/cooperation-and-public-relation', 'App\Http\Controllers\PagesController@cooperationAndPublicRelation')
                ->name('cooperationAndPublicRelation');
            // staff and document management
            Route::get('/staff-and-document-management', 'App\Http\Controllers\PagesController@staffAndDocumentManagement')
                ->name('staffAndDocumentManagement');
            // tehchnical and economic activities
            Route::get('/tehchnical-and-economic-activities', 'App\Http\Controllers\PagesController@tehchnicalAndEconomicActivities')
                ->name('tehchnicalAndEconomicActivities');
            // hotel
            Route::get('/hotel', 'App\Http\Controllers\PagesController@hotel')
                ->name('hotel');
        });

        // report
        Route::get('/report/{year?}', 'App\Http\Controllers\PagesController@report')->name('report');
        // graduates
        Route::get('/graduates/{year?}', 'App\Http\Controllers\PagesController@graduates')->name('graduates');
        // graduates judge
        Route::get('/graduates/{year}/judges', 'App\Http\Controllers\PagesController@graduatesJudges')
            ->name('graduatesJudges');
        // graduates prosecutor
        Route::get('/graduates/{year}/prosecutors', 'App\Http\Controllers\PagesController@graduatesProsecutors')
            ->name('graduatesProsecutors');
        // graduates investigator
        Route::get('/graduates/{year}/investigators', 'App\Http\Controllers\PagesController@graduatesInvestigators')
            ->name('graduatesInvestigators');


        //admission
        Route::group(['prefix' => 'admission'], function () {
        // admission page
            Route::get('/', 'App\Http\Controllers\PagesController@admission')->name('admission');
        // judges candidates
            Route::get('/judges-candidates', 'App\Http\Controllers\PagesController@judgesCandidates')
                ->name('judgesCandidates');
        // prosecutors candidates
            Route::get('/prosecutors-candidates', 'App\Http\Controllers\PagesController@prosecutorsCandidates')
                ->name('prosecutorsCandidates');
        // investigators candidates
            Route::get('/investigators-candidates', 'App\Http\Controllers\PagesController@investigatorsCandidates')
                ->name('investigatorsCandidates');
        });

        // gallery
        Route::get('/gallery/{year?}', 'App\Http\Controllers\PagesController@gallery')->name('gallery')->where('year', '[0-9]+');

        // gallery video
        Route::get('/gallery/video/{year?}', 'App\Http\Controllers\PagesController@galleryVideo')->name('galleryVideo');

        // mass media
        Route::get('/mass-media/{year?}', 'App\Http\Controllers\PagesController@massMedia')->name('massMedia');
    });


    // news/*********************************************************************************
    Route::group(['prefix' => 'news'], function () {
        // news
        Route::get('/', 'App\Http\Controllers\PagesController@news')->name('news');
        // news single
        Route::get('/{id}', 'App\Http\Controllers\PagesController@newsSingle')->name('newsSingle');
    });


    // full-time-education/******************************************************************
    Route::group(['prefix' => 'full-time-education'], function () {
        // full time education
        Route::get('/', 'App\Http\Controllers\PagesController@fullTimeEducation')
            ->name('fullTimeEducation');
        // training programs
        Route::get('/training-programs', 'App\Http\Controllers\PagesController@trainingPrograms')
            ->name('trainingPrograms');
        // training programs single
        Route::get('/training-programs/{year}/{category}', 'App\Http\Controllers\PagesController@trainingProgramSingle')
            ->name('trainingProgramSingle');
        Route::get('/training-programs/{year}/{category}/{pdf}/download', 'App\Http\Controllers\MainController@trainingProgramDownload')
            ->name('trainingProgramDownload');

        // conducting exams
        Route::get('/conducting-exams', 'App\Http\Controllers\PagesController@conductingExams')->name('conductingExams');
        Route::get('conducting-exam/{pdf}/download', 'App\Http\Controllers\MainController@conductingExamDownload')
            ->name('conductingExamDownload');

        // conducting practice
        Route::get('/conducting-practice', 'App\Http\Controllers\PagesController@conductingPractice')
            ->name('conductingPractice');
        Route::get('conducting-practice/{pdf}/download', 'App\Http\Controllers\MainController@conductingPracticeDownload')
            ->name('conductingPracticeDownload');

        // rules of behavior
        Route::get('/rules-of-behavior', 'App\Http\Controllers\PagesController@rulesOfBehavior')->name('rulesOfBehavior');
        Route::get('rules-of-behavior/{pdf}/download', 'App\Http\Controllers\MainController@rulesOfBehaviorDownload')
            ->name('rulesOfBehaviorDownload');

        // dormitory rule
        Route::get('/dormitory-rules', 'App\Http\Controllers\PagesController@dormitoryRules')->name('dormitoryRules');
        Route::get('dormitory-rules/{pdf}/download', 'App\Http\Controllers\MainController@dormitoryRulesDownload')
            ->name('dormitoryRulesDownload');

        // provide deferral
        Route::get('/provide-deferral', 'App\Http\Controllers\PagesController@provideDeferral')->name('provideDeferral');
        Route::get('provide-deferral/{pdf}/download', 'App\Http\Controllers\MainController@provideDeferralDownload')
            ->name('provideDeferralDownload');
    });


    // distance-learning/********************************************************************
    Route::group(['prefix' => 'distance-learning'], function () {
        // distance learning page
        Route::get('/', 'App\Http\Controllers\PagesController@distanceLearning')->name('distanceLearning');
        // distance learning video
        Route::get('/video/{id}', 'App\Http\Controllers\PagesController@distanceLearningVideo')->name('distanceLearningVideo');
        // distance learning video materials
        Route::get('/video-materials', 'App\Http\Controllers\PagesController@videoMaterials')->name('videoMaterials');


        // distance learning courses
        Route::group(['prefix' => 'courses'], function () {
            // distance learning courses
            Route::get('/', 'App\Http\Controllers\PagesController@distanceLearningCourses')
                ->name('distanceLearningCourses');
            // distance learning motivational videos
            Route::get('/motivational-videos/{id}', 'App\Http\Controllers\PagesController@motivationalVideos')
                ->name('motivationalVideos');
            // distance learning media materials
            Route::get('/media-materials/{id}', 'App\Http\Controllers\PagesController@mediaMaterials')
                ->name('mediaMaterials');
            // distance learning assignments
            Route::get('/assignments/{id}', 'App\Http\Controllers\PagesController@assignments')
            ->name('assignments');
            // distance learning guide
            Route::get('/distance-learning-guide', 'App\Http\Controllers\PagesController@distanceLearningGuide')
                ->name('distanceLearningGuide');
            // distance learning guide
            Route::get('/FAQ', 'App\Http\Controllers\PagesController@FAQ')
            ->name('FAQ');
            // distance learning single course
            Route::get('/book/{id}', 'App\Http\Controllers\PagesController@distanceLearningBook')->name('distanceLearningBook');
            Route::get('book/{pdf}/download', 'App\Http\Controllers\MainController@distanceLearningCourseDownload')
                ->name('distanceLearningCourseDownload');
        });


        // distance learning guide pdf download
        Route::get('guide{pdf}download', 'App\Http\Controllers\MainController@distanceLearningGuideDownload')
            ->name('distanceLearningGuideDownload');
    });


    // library/****************************************************************************
    Route::group(['prefix' => 'library'], function () {
        // library page
        Route::get('/', 'App\Http\Controllers\PagesController@library')->name('library');
        // academy publications
        Route::get('/academy-publications', 'App\Http\Controllers\PagesController@academyPublications')
            ->name('academyPublications');
        // manuals
        Route::get('/manuals', 'App\Http\Controllers\PagesController@manuals')
            ->name('manuals');
        // training materials
        Route::get('/training-materials', 'App\Http\Controllers\PagesController@trainingMaterials')
            ->name('trainingMaterials');
        // video lectures
        Route::get('/video-lectures', 'App\Http\Controllers\PagesController@videoLectures')->name('videoLectures');
        // video lectures single
        Route::get('/video-lectures/{id}', 'App\Http\Controllers\PagesController@videoLectureSingle')
            ->name('videoLectureSingle');
        // professional literature
        Route::get('/professional-literature', 'App\Http\Controllers\PagesController@professionalLiterature')
            ->name('professionalLiterature');
        // organizing library activities
        Route::get('/organizing-library-activities', 'App\Http\Controllers\PagesController@organizingLibraryActivities')
            ->name('organizingLibraryActivities');
        // investigator training modules
        Route::get('/investigator-training-modules', 'App\Http\Controllers\PagesController@investigatorTrainingModules')
            ->name('investigatorTrainingModules');
        // ECHR resources
        Route::get('/ECHR-resources', 'App\Http\Controllers\PagesController@ECHRResources')
            ->name('ECHRResources');
        Route::get('/ECHR-resources/{pdf}/download', 'App\Http\Controllers\MainController@ECHRResourcesDownload')
            ->name('ECHRResourcesDownload');

        // pdf download
        Route::get('/pdf/{pdf}/download', 'App\Http\Controllers\MainController@LibraryPdfDownload')
            ->name('LibraryPdfDownload');
        // library pdf download
        Route::get('/library/{pdf}/download', 'App\Http\Controllers\MainController@LibraryBookDownload')
        ->name('LibraryBookDownload');
    });


    // bulletin/***************************************************************************
    Route::group(['prefix' => 'bulletin'], function () {
        // bulletin page
        Route::get('/', 'App\Http\Controllers\PagesController@bulletin')->name('bulletin');
        Route::get('/bulletin-info/{pdf}/download', 'App\Http\Controllers\MainController@bulletinInfoDownload')
            ->name('bulletinInfoDownload');
    });


    // partners/***************************************************************************
    Route::group(['prefix' => 'partners'], function () {
        // partners page
        Route::get('/', 'App\Http\Controllers\PagesController@partners')->name('partners');
        // partners single
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
            Route::get('recycleBin/header', 'App\Http\Controllers\Admin\HeaderController@recycleBin')->name('header.recycleBin');
            Route::get('recycleBin/header/{id}/restore', 'App\Http\Controllers\Admin\HeaderController@recycleBinRestore')
                ->name('header.recycleBinRestore');
            Route::get('recycleBin/header/{id}/delete', 'App\Http\Controllers\Admin\HeaderController@forceDelete')
                ->name('header.forceDelete');

            // subheader /***************************************************************************
            Route::resource('subheader', 'App\Http\Controllers\Admin\SubheaderController');
            Route::get('recycleBin/subheader/{id}/restore', 'App\Http\Controllers\Admin\SubheaderController@recycleBinRestore')
                ->name('subheader.recycleBinRestore');
            Route::get('recycleBin/subheader/{id}/delete', 'App\Http\Controllers\Admin\SubheaderController@forceDelete')
                ->name('subheader.forceDelete');

            // home /***************************************************************************
            Route::resource('home', 'App\Http\Controllers\Admin\HomeController');

            // about /***************************************************************************
            Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
                // governing board page
                Route::resource('page', 'App\Http\Controllers\Admin\About\AboutController');
                Route::resource('governing-board-page', 'App\Http\Controllers\Admin\About\GoverningBoardPageController');
                Route::get('recycleBin/page', 'App\Http\Controllers\Admin\About\GoverningBoardPageController@recycleBin')
                    ->name('page.recycleBin');

                // governing board decree
                Route::resource('governing-board-decree', 'App\Http\Controllers\Admin\About\GoverningBoardDecreeController');
                Route::get('recycleBin/governing-board-decree/{id}/restore',
                    'App\Http\Controllers\Admin\About\GoverningBoardDecreeController@recycleBinRestore')
                    ->name('governing-board-decree.recycleBinRestore');
                Route::get('recycleBin/governing-board-decree/{id}/delete',
                    'App\Http\Controllers\Admin\About\GoverningBoardDecreeController@forceDelete')
                    ->name('governing-board-decree.forceDelete');

                // governing board staff
                Route::resource('governing-board-staff', 'App\Http\Controllers\Admin\About\GoverningBoardStaffController');
                Route::get('recycleBin/governing-board-staff/{id}/restore',
                    'App\Http\Controllers\Admin\About\GoverningBoardStaffController@recycleBinRestore')
                    ->name('governing-board-staff.recycleBinRestore');
                Route::get('recycleBin/governing-board-staff/{id}/delete',
                    'App\Http\Controllers\Admin\About\GoverningBoardStaffController@forceDelete')
                    ->name('governing-board-staff.forceDelete');


                // rectors page
                Route::resource('rectors-page', 'App\Http\Controllers\Admin\About\RectorsPageController');
                Route::get('recycleBin/rectors-page', 'App\Http\Controllers\Admin\About\RectorsPageController@recycleBin')
                    ->name('rectors-page.recycleBin');

                // rectors decree
                Route::resource('rectors-decree', 'App\Http\Controllers\Admin\About\RectorsDecreeController');
                Route::get('recycleBin/rectors-decree/{id}/restore',
                    'App\Http\Controllers\Admin\About\RectorsDecreeController@recycleBinRestore')
                    ->name('rectors-decree.recycleBinRestore');
                Route::get('recycleBin/rectors-decree/{id}/delete',
                    'App\Http\Controllers\Admin\About\RectorsDecreeController@forceDelete')
                    ->name('rectors-decree.forceDelete');

                // rectors biography
                Route::resource('rectors-biography', 'App\Http\Controllers\Admin\About\RectorsBiographyController');
                Route::resource('former-rectors-biography', 'App\Http\Controllers\Admin\About\FormerRectorsBiographyController');


                // academy structure page
                Route::resource('academy-structure', 'App\Http\Controllers\Admin\About\AcademyStructureController');
                Route::resource('workers', 'App\Http\Controllers\Admin\About\WorkersController');
                Route::get('/workers/deleting-img/{id}', 'App\Http\Controllers\Admin\About\WorkersController@imgDelete')
                    ->name('workersImgDelete');


                // report page
                Route::resource('report', 'App\Http\Controllers\Admin\About\ReportController');
                Route::get('recycleBin/report', 'App\Http\Controllers\Admin\About\ReportController@recycleBin')
                    ->name('report.recycleBin');
                Route::get('recycleBin/report/{id}/restore',
                    'App\Http\Controllers\Admin\About\ReportController@recycleBinRestore')
                    ->name('report.recycleBinRestore');
                Route::get('recycleBin/report/{id}/delete', 'App\Http\Controllers\Admin\About\ReportController@forceDelete')
                    ->name('report.forceDelete');

                // graduates page
                Route::resource('graduates', 'App\Http\Controllers\Admin\About\GraduateController');
                Route::get('recycleBin/graduates', 'App\Http\Controllers\Admin\About\GraduateController@recycleBin')
                    ->name('graduates.recycleBin');
                Route::get('recycleBin/graduates/{id}/restore',
                    'App\Http\Controllers\Admin\About\GraduateController@recycleBinRestore')
                    ->name('graduates.recycleBinRestore');
                Route::get('recycleBin/graduates/{id}/delete', 'App\Http\Controllers\Admin\About\GraduateController@forceDelete')
                    ->name('graduates.forceDelete');

                // admission page
                Route::resource('admission', 'App\Http\Controllers\Admin\About\AdmissionController');

                // candidate page
                Route::resource('candidate', 'App\Http\Controllers\Admin\About\CandidateController');

                // gallery
                Route::resource('gallery', 'App\Http\Controllers\Admin\About\GalleryController');
                Route::get('/gallery/deleting-img/{id}', 'App\Http\Controllers\Admin\About\GalleryController@imgDelete')
                    ->name('galleryImgDelete');
                Route::get('recycleBin/gallery', 'App\Http\Controllers\Admin\About\GalleryController@recycleBin')
                    ->name('gallery.recycleBin');
                Route::get('recycleBin/gallery/{id}/restore',
                    'App\Http\Controllers\Admin\About\GalleryController@recycleBinRestore')
                    ->name('gallery.recycleBinRestore');
                Route::get('recycleBin/gallery/{id}/delete', 'App\Http\Controllers\Admin\About\GalleryController@forceDelete')
                    ->name('gallery.forceDelete');

                // gallery video
                Route::resource('gallery-video', 'App\Http\Controllers\Admin\About\GalleryVideoController');
                Route::get('recycleBin/gallery-video/{id}/restore',
                    'App\Http\Controllers\Admin\About\GalleryVideoController@recycleBinRestore')
                    ->name('gallery-video.recycleBinRestore');
                Route::get('recycleBin/gallery-video/{id}/delete',
                    'App\Http\Controllers\Admin\About\GalleryVideoController@forceDelete')
                    ->name('gallery-video.forceDelete');

                // mass media page
                Route::resource('mass-media', 'App\Http\Controllers\Admin\About\MassMediaController');
                Route::get('/mass-media/link/{id}', 'App\Http\Controllers\Admin\About\MassMediaController@linkDelete')
                    ->name('massMediaLinkDelete');
                Route::get('recycleBin/mass-media', 'App\Http\Controllers\Admin\About\MassMediaController@recycleBin')
                    ->name('mass-media.recycleBin');
                Route::get('recycleBin/mass-media/{id}/restore',
                    'App\Http\Controllers\Admin\About\MassMediaController@recycleBinRestore')
                    ->name('mass-media.recycleBinRestore');
                Route::get('recycleBin/mass-media/{id}/delete','App\Http\Controllers\Admin\About\MassMediaController@forceDelete')
                    ->name('mass-media.forceDelete');
            });

            // news /***************************************************************************
            Route::resource('news', 'App\Http\Controllers\Admin\NewsController');
            Route::get('/news/deleting-img/{id}', 'App\Http\Controllers\Admin\NewsController@imgDelete')
                ->name('news.ImgDelete');
            Route::get('recycleBin/news', 'App\Http\Controllers\Admin\NewsController@recycleBin')
                ->name('news.recycleBin');
            Route::get('recycleBin/news/{id}/restore', 'App\Http\Controllers\Admin\NewsController@recycleBinRestore')
                ->name('news.recycleBinRestore');
            Route::get('recycleBin/news/{id}/delete','App\Http\Controllers\Admin\NewsController@forceDelete')
                ->name('news.forceDelete');


            // full time education /***************************************************************************
            Route::group(['prefix' => 'full-time-education', 'as' => 'full-time-education.'], function () {
                // training program
                Route::resource('training-program', 'App\Http\Controllers\Admin\FullTime\TrainingProgramController');
                Route::get('recycleBin/training-program',
                    'App\Http\Controllers\Admin\FullTime\TrainingProgramController@recycleBin')
                    ->name('training-program.recycleBin');
                Route::get('recycleBin/training-program/{id}/restore',
                    'App\Http\Controllers\Admin\FullTime\TrainingProgramController@recycleBinRestore')
                    ->name('training-program.recycleBinRestore');
                Route::get('recycleBin/training-program/{id}/delete',
                    'App\Http\Controllers\Admin\FullTime\TrainingProgramController@forceDelete')
                    ->name('training-program.forceDelete');

                // conducting exam
                Route::resource('conducting-exam', 'App\Http\Controllers\Admin\FullTime\ConductingExamController');
                Route::get('recycleBin/conducting-exam',
                    'App\Http\Controllers\Admin\FullTime\ConductingExamController@recycleBin')
                    ->name('conducting-exam.recycleBin');
                Route::get('recycleBin/conducting-exam/{id}/restore',
                    'App\Http\Controllers\Admin\FullTime\ConductingExamController@recycleBinRestore')
                    ->name('conducting-exam.recycleBinRestore');
                Route::get('recycleBin/conducting-exam/{id}/delete',
                    'App\Http\Controllers\Admin\FullTime\ConductingExamController@forceDelete')
                    ->name('conducting-exam.forceDelete');

                // conducting exam video
                Route::resource('conducting-exam-video', 'App\Http\Controllers\Admin\FullTime\ConductingExamVideoController');
                Route::get('recycleBin/conducting-exam-video/{id}/restore',
                    'App\Http\Controllers\Admin\FullTime\ConductingExamVideoController@recycleBinRestore')
                    ->name('conducting-exam-video.recycleBinRestore');
                Route::get('recycleBin/conducting-exam-video/{id}/delete',
                    'App\Http\Controllers\Admin\FullTime\ConductingExamVideoController@forceDelete')
                    ->name('conducting-exam-video.forceDelete');

                // conducting practice
                Route::resource('conducting-practice', 'App\Http\Controllers\Admin\FullTime\ConductingpracticeController');
                Route::get('recycleBin/conducting-practice',
                    'App\Http\Controllers\Admin\FullTime\ConductingPracticeController@recycleBin')
                    ->name('conducting-practice.recycleBin');
                Route::get('recycleBin/conducting-practice/{id}/restore',
                    'App\Http\Controllers\Admin\FullTime\ConductingPracticeController@recycleBinRestore')
                    ->name('conducting-practice.recycleBinRestore');
                Route::get('recycleBin/conducting-practice/{id}/delete',
                    'App\Http\Controllers\Admin\FullTime\ConductingPracticeController@forceDelete')
                    ->name('conducting-practice.forceDelete');

                // behavior rule
                Route::resource('behavior-rule', 'App\Http\Controllers\Admin\FullTime\BehaviorRuleController');
                Route::get('recycleBin/behavior-rule', 'App\Http\Controllers\Admin\FullTime\BehaviorRuleController@recycleBin')
                    ->name('behavior-rule.recycleBin');
                Route::get('recycleBin/behavior-rule/{id}/restore',
                    'App\Http\Controllers\Admin\FullTime\BehaviorRuleController@recycleBinRestore')
                    ->name('behavior-rule.recycleBinRestore');
                Route::get('recycleBin/behavior-rule/{id}/delete',
                    'App\Http\Controllers\Admin\FullTime\BehaviorRuleController@forceDelete')
                    ->name('behavior-rule.forceDelete');

                // dormitory rule
                Route::resource('dormitory-rule', 'App\Http\Controllers\Admin\FullTime\DormitoryRuleController');
                Route::get('recycleBin/dormitory-rule', 'App\Http\Controllers\Admin\FullTime\DormitoryRuleController@recycleBin')
                    ->name('dormitory-rule.recycleBin');
                Route::get('recycleBin/dormitory-rule/{id}/restore',
                    'App\Http\Controllers\Admin\FullTime\DormitoryRuleController@recycleBinRestore')
                    ->name('dormitory-rule.recycleBinRestore');
                Route::get('recycleBin/dormitory-rule/{id}/delete',
                    'App\Http\Controllers\Admin\FullTime\DormitoryRuleController@forceDelete')
                    ->name('dormitory-rule.forceDelete');

                // provide deferral
                Route::resource('provide-deferral', 'App\Http\Controllers\Admin\FullTime\ProvideDeferralController');
                Route::get('recycleBin/provide-deferral',
                    'App\Http\Controllers\Admin\FullTime\ProvideDeferralController@recycleBin')
                    ->name('provide-deferral.recycleBin');
                Route::get('recycleBin/provide-deferral/{id}/restore',
                    'App\Http\Controllers\Admin\FullTime\ProvideDeferralController@recycleBinRestore')
                    ->name('provide-deferral.recycleBinRestore');
                Route::get('recycleBin/provide-deferral/{id}/delete',
                    'App\Http\Controllers\Admin\FullTime\ProvideDeferralController@forceDelete')
                    ->name('provide-deferral.forceDelete');
            });


            // distance learning /***************************************************************************
            Route::group(['prefix' => 'distance-learning', 'as' => 'distance-learning.'], function () {
                Route::resource('page', 'App\Http\Controllers\Admin\DistanceLearning\DistancelearningController');
                
                // courses
                Route::resource('courses', 'App\Http\Controllers\Admin\DistanceLearning\CoursesController');
                Route::get('recycleBin/courses', 'App\Http\Controllers\Admin\DistanceLearning\CoursesController@recycleBin')
                    ->name('courses.recycleBin');
                Route::get('recycleBin/courses/{id}/restore',
                    'App\Http\Controllers\Admin\DistanceLearning\CoursesController@recycleBinRestore')
                    ->name('courses.recycleBinRestore');
                Route::get('recycleBin/courses/{id}/delete',
                    'App\Http\Controllers\Admin\DistanceLearning\CoursesController@forceDelete')
                    ->name('courses.forceDelete');

                // book
                Route::resource('book', 'App\Http\Controllers\Admin\DistanceLearning\BookController');
                Route::get('/book/deleting-pdf/{id}', 'App\Http\Controllers\Admin\DistanceLearning\BookController@bookPdfDelete')
                    ->name('bookPdfDelete');
                Route::get('recycleBin/book',
                    'App\Http\Controllers\Admin\DistanceLearning\BookController@recycleBin')
                    ->name('book.recycleBin');
                Route::get('recycleBin/book/{id}/restore',
                    'App\Http\Controllers\Admin\DistanceLearning\BookController@recycleBinRestore')
                    ->name('book.recycleBinRestore');
                Route::get('recycleBin/book/{id}/delete',
                    'App\Http\Controllers\Admin\DistanceLearning\BookController@forceDelete')
                    ->name('book.forceDelete');

                // motivational video
                Route::resource('motivational-video', 'App\Http\Controllers\Admin\DistanceLearning\MotivationalVideoController');
                Route::get('recycleBin/motivational-video',
                    'App\Http\Controllers\Admin\DistanceLearning\MotivationalVideoController@recycleBin')
                    ->name('motivational-video.recycleBin');
                Route::get('recycleBin/motivational-video/{id}/restore',
                    'App\Http\Controllers\Admin\DistanceLearning\MotivationalVideoController@recycleBinRestore')
                    ->name('motivational-video.recycleBinRestore');
                Route::get('recycleBin/motivational-video/{id}/delete',
                    'App\Http\Controllers\Admin\DistanceLearning\MotivationalVideoController@forceDelete')
                    ->name('motivational-video.forceDelete');

                // video
                Route::resource('video', 'App\Http\Controllers\Admin\DistanceLearning\VideoController');
                Route::get('recycleBin/video',
                    'App\Http\Controllers\Admin\DistanceLearning\VideoController@recycleBin')
                    ->name('video.recycleBin');
                Route::get('recycleBin/video/{id}/restore',
                    'App\Http\Controllers\Admin\DistanceLearning\VideoController@recycleBinRestore')
                    ->name('video.recycleBinRestore');
                Route::get('recycleBin/video/{id}/delete',
                    'App\Http\Controllers\Admin\DistanceLearning\VideoController@forceDelete')
                    ->name('video.forceDelete');

                // video material
                Route::resource('video-material', 'App\Http\Controllers\Admin\DistanceLearning\VideoMaterialController');
                Route::get('recycleBin/video-material',
                    'App\Http\Controllers\Admin\DistanceLearning\VideoMaterialController@recycleBin')
                    ->name('video-material.recycleBin');
                Route::get('recycleBin/video-material/{id}/restore',
                    'App\Http\Controllers\Admin\DistanceLearning\VideoMaterialController@recycleBinRestore')
                    ->name('video-material.recycleBinRestore');
                Route::get('recycleBin/video-material/{id}/delete',
                    'App\Http\Controllers\Admin\DistanceLearning\VideoMaterialController@forceDelete')
                    ->name('video-material.forceDelete');

                // guide
                Route::resource('guide', 'App\Http\Controllers\Admin\DistanceLearning\GuideController');
                
                // FAQ
                Route::resource('FAQ', 'App\Http\Controllers\Admin\DistanceLearning\FrequentlyAskedQuestionController');
            });


            // library /***************************************************************************
            Route::group(['prefix' => 'library', 'as' => 'library.'], function () {
                // academy publication
                Route::resource('academy-publication', 'App\Http\Controllers\Admin\Library\AcademyPublicationController');
                Route::get('recycleBin/academy-publication',
                    'App\Http\Controllers\Admin\Library\AcademyPublicationController@recycleBin')
                    ->name('academy-publication.recycleBin');
                Route::get('recycleBin/academy-publication/{id}/restore',
                    'App\Http\Controllers\Admin\Library\AcademyPublicationController@recycleBinRestore')
                    ->name('academy-publication.recycleBinRestore');
                Route::get('recycleBin/academy-publication/{id}/delete',
                    'App\Http\Controllers\Admin\Library\AcademyPublicationController@forceDelete')
                    ->name('academy-publication.forceDelete');

                // manual
                Route::resource('manual', 'App\Http\Controllers\Admin\Library\ManualController');
                Route::get('recycleBin/manual', 'App\Http\Controllers\Admin\Library\ManualController@recycleBin')
                    ->name('manual.recycleBin');
                Route::get('recycleBin/manual/{id}/restore',
                    'App\Http\Controllers\Admin\Library\ManualController@recycleBinRestore')
                    ->name('manual.recycleBinRestore');
                Route::get('recycleBin/manual/{id}/delete', 'App\Http\Controllers\Admin\Library\ManualController@forceDelete')
                    ->name('manual.forceDelete');

                // training material
                Route::resource('training-material', 'App\Http\Controllers\Admin\Library\TrainingMaterialController');
                Route::get('recycleBin/training-material',
                    'App\Http\Controllers\Admin\Library\TrainingMaterialController@recycleBin')
                    ->name('training-material.recycleBin');
                Route::get('recycleBin/training-material/{id}/restore',
                    'App\Http\Controllers\Admin\Library\TrainingMaterialController@recycleBinRestore')
                    ->name('training-material.recycleBinRestore');
                Route::get('recycleBin/training-material/{id}/delete',
                    'App\Http\Controllers\Admin\Library\TrainingMaterialController@forceDelete')
                    ->name('training-material.forceDelete');

                // investigator training module
                Route::resource(
                    'investigator-training-module',
                    'App\Http\Controllers\Admin\Library\InvestigatorTrainingModuleController'
                );
                Route::get('recycleBin/investigator-training-module',
                    'App\Http\Controllers\Admin\Library\InvestigatorTrainingModuleController@recycleBin')
                    ->name('investigator-training-module.recycleBin');
                Route::get('recycleBin/investigator-training-module/{id}/restore',
                    'App\Http\Controllers\Admin\Library\InvestigatorTrainingModuleController@recycleBinRestore')
                    ->name('investigator-training-module.recycleBinRestore');
                Route::get('recycleBin/investigator-training-module/{id}/delete',
                    'App\Http\Controllers\Admin\Library\InvestigatorTrainingModuleController@forceDelete')
                    ->name('investigator-training-module.forceDelete');

                // video lecture
                Route::resource('video-lecture', 'App\Http\Controllers\Admin\Library\VideoLectureController');
                Route::get('recycleBin/video-lecture', 'App\Http\Controllers\Admin\Library\VideoLectureController@recycleBin')
                    ->name('video-lecture.recycleBin');
                Route::get('recycleBin/video-lecture/{id}/restore',
                    'App\Http\Controllers\Admin\Library\VideoLectureController@recycleBinRestore')
                    ->name('video-lecture.recycleBinRestore');
                Route::get('recycleBin/video-lecture/{id}/delete',
                    'App\Http\Controllers\Admin\Library\VideoLectureController@forceDelete')
                    ->name('video-lecture.forceDelete');

                // echr resource
                Route::resource('echr-resource', 'App\Http\Controllers\Admin\Library\ECHRResourceController');
                Route::get('recycleBin/echr-resource', 'App\Http\Controllers\Admin\Library\ECHRResourceController@recycleBin')
                    ->name('echr-resource.recycleBin');
                Route::get('recycleBin/echr-resource/{id}/restore',
                    'App\Http\Controllers\Admin\Library\ECHRResourceController@recycleBinRestore')
                    ->name('echr-resource.recycleBinRestore');
                Route::get('recycleBin/echr-resource/{id}/delete',
                    'App\Http\Controllers\Admin\Library\ECHRResourceController@forceDelete')
                    ->name('echr-resource.forceDelete');

                // echr link
                Route::resource('echr-link', 'App\Http\Controllers\Admin\Library\ECHRLinkController');
                Route::get('recycleBin/echr-link/{id}/restore',
                    'App\Http\Controllers\Admin\Library\ECHRLinkController@recycleBinRestore')
                    ->name('echr-link.recycleBinRestore');
                Route::get('recycleBin/echr-link/{id}/delete',
                    'App\Http\Controllers\Admin\Library\ECHRLinkController@forceDelete')
                    ->name('echr-link.forceDelete');

                // professional literature
                Route::resource(
                    'professional-literature',
                    'App\Http\Controllers\Admin\Library\ProfessionalLiteratureController'
                );
                Route::get('recycleBin/professional-literature',
                    'App\Http\Controllers\Admin\Library\ProfessionalLiteratureController@recycleBin')
                    ->name('professional-literature.recycleBin');
                Route::get('recycleBin/professional-literature/{id}/restore',
                    'App\Http\Controllers\Admin\Library\ProfessionalLiteratureController@recycleBinRestore')
                    ->name('professional-literature.recycleBinRestore');
                Route::get('recycleBin/professional-literature/{id}/delete',
                    'App\Http\Controllers\Admin\Library\ProfessionalLiteratureController@forceDelete')
                    ->name('professional-literature.forceDelete');

                // organizing library activity
                Route::resource(
                    'organizing-library-activity',
                    'App\Http\Controllers\Admin\Library\OrganizingLibraryActivityController'
                );
                Route::get('recycleBin/organizing-library-activity/{id}/restore',
                    'App\Http\Controllers\Admin\Library\OrganizingLibraryActivityController@recycleBinRestore')
                    ->name('organizing-library-activity.recycleBinRestore');
                Route::get('recycleBin/organizing-library-activity/{id}/delete',
                    'App\Http\Controllers\Admin\Library\OrganizingLibraryActivityController@forceDelete')
                    ->name('organizing-library-activity.forceDelete');
            });


            // bulletin /***************************************************************************
            Route::group(['prefix' => 'bulletin', 'as' => 'bulletin.'], function () {
                Route::resource('/bulletin', 'App\Http\Controllers\Admin\Bulletin\BulletinController');
                Route::get('recycleBin/bulletin', 'App\Http\Controllers\Admin\Bulletin\BulletinController@recycleBin')
                    ->name('bulletin.recycleBin');
                Route::get('recycleBin/bulletin/{id}/restore',
                    'App\Http\Controllers\Admin\Bulletin\BulletinController@recycleBinRestore')
                    ->name('bulletin.recycleBinRestore');
                Route::get('recycleBin/bulletin/{id}/delete',
                    'App\Http\Controllers\Admin\Bulletin\BulletinController@forceDelete')
                    ->name('bulletin.forceDelete');

                // info
                Route::resource('info', 'App\Http\Controllers\Admin\Bulletin\InfoController');
                Route::get('recycleBin/info', 'App\Http\Controllers\Admin\Bulletin\InfoController@recycleBin')
                    ->name('info.recycleBin');
                Route::get('recycleBin/info/{id}/restore', 'App\Http\Controllers\Admin\Bulletin\InfoController@recycleBinRestore')
                    ->name('info.recycleBinRestore');
                Route::get('recycleBin/info/{id}/delete', 'App\Http\Controllers\Admin\Bulletin\InfoController@forceDelete')
                    ->name('info.forceDelete');
            });


            // partner /***************************************************************************
            Route::group(['prefix' => 'partners', 'as' => 'partners.'], function () {
                Route::resource('partner', 'App\Http\Controllers\Admin\Partners\PartnerController');
                Route::get('/partner/link/{id}', 'App\Http\Controllers\Admin\Partners\PartnerController@linkDelete')
                    ->name('partnerLinkDelete');
                Route::get('recycleBin/partner', 'App\Http\Controllers\Admin\Partners\PartnerController@recycleBin')
                    ->name('partner.recycleBin');
                Route::get('recycleBin/partner/{id}/restore',
                    'App\Http\Controllers\Admin\Partners\PartnerController@recycleBinRestore')
                    ->name('partner.recycleBinRestore');
                Route::get('recycleBin/partner/{id}/delete', 'App\Http\Controllers\Admin\Partners\PartnerController@forceDelete')
                    ->name('partner.forceDelete');
            });
            

            // contact /***************************************************************************
            Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
                // contact page
                Route::resource('page', 'App\Http\Controllers\Admin\Contact\ContactPageController');
                
                // contact staff
                Route::resource('staff', 'App\Http\Controllers\Admin\Contact\StaffController');
                Route::get('recycleBin/staff', 'App\Http\Controllers\Admin\Contact\StaffController@recycleBin')
                    ->name('staff.recycleBin');
                Route::get('recycleBin/staff/{id}/restore',
                    'App\Http\Controllers\Admin\Contact\StaffController@recycleBinRestore')
                    ->name('staff.recycleBinRestore');
                Route::get('recycleBin/staff/{id}/delete', 'App\Http\Controllers\Admin\Contact\StaffController@forceDelete')
                    ->name('staff.forceDelete');
            });
        });
    });
});
