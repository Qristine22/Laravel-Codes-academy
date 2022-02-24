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
            // rectors decree pdf download
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
            Route::get('/tehchnical-and-economic-activities', 'App\Http\Controllers\PagesController@tehchnicalAndEconomicActivities')
                ->name('tehchnicalAndEconomicActivities');
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
        // training programs pdf download
        Route::get('/training-programs/{year}/{category}/{pdf}/download', 'App\Http\Controllers\MainController@trainingProgramDownload')
            ->name('trainingProgramDownload');

        Route::get('/conducting-exams', 'App\Http\Controllers\PagesController@conductingExams')->name('conductingExams');
        // conducting exam download
        Route::get('conducting-exam/{pdf}/download', 'App\Http\Controllers\MainController@conductingExamDownload')
            ->name('conductingExamDownload');

        Route::get('/conducting-practice', 'App\Http\Controllers\PagesController@conductingPractice')
            ->name('conductingPractice');
        // conducting practice download
        Route::get('conducting-practice/{pdf}/download', 'App\Http\Controllers\MainController@conductingPracticeDownload')
            ->name('conductingPracticeDownload');

        Route::get('/rules-of-behavior', 'App\Http\Controllers\PagesController@rulesOfBehavior')->name('rulesOfBehavior');
        // conducting practice download
        Route::get('rules-of-behavior/{pdf}/download', 'App\Http\Controllers\MainController@rulesOfBehaviorDownload')
            ->name('rulesOfBehaviorDownload');

        Route::get('/dormitory-rules', 'App\Http\Controllers\PagesController@dormitoryRules')->name('dormitoryRules');
        // dormitory rule download
        Route::get('dormitory-rules/{pdf}/download', 'App\Http\Controllers\MainController@dormitoryRulesDownload')
            ->name('dormitoryRulesDownload');

        Route::get('/provide-deferral', 'App\Http\Controllers\PagesController@provideDeferral')->name('provideDeferral');
        // provide deferral download
        Route::get('provide-deferral/{pdf}/download', 'App\Http\Controllers\MainController@provideDeferralDownload')
            ->name('provideDeferralDownload');
    });


    // distance-learning/********************************************************************
    Route::group(['prefix' => 'distance-learning'], function () {
        Route::get('/', 'App\Http\Controllers\PagesController@distanceLearning')->name('distanceLearning');
        Route::get('/video/{id}', 'App\Http\Controllers\PagesController@distanceLearningVideo')->name('distanceLearningVideo');
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

        // distance learning guide pdf download
        Route::get('guide{pdf}download', 'App\Http\Controllers\MainController@distanceLearningGuideDownload')
            ->name('distanceLearningGuideDownload');
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

        // ECHR resource pdf download
        Route::get('/ECHR-resources/{pdf}/download', 'App\Http\Controllers\MainController@ECHRResourcesDownload')
            ->name('ECHRResourcesDownload');

        // library pdf download
        Route::get('/pdf/{pdf}/download', 'App\Http\Controllers\MainController@LibraryPdfDownload')
            ->name('LibraryPdfDownload');
    });


    // bulletin/***************************************************************************
    Route::group(['prefix' => 'bulletin'], function () {
        Route::get('/', 'App\Http\Controllers\PagesController@bulletin')->name('bulletin');

        // bulletin info pdf download
        Route::get('/bulletin-info/{pdf}/download', 'App\Http\Controllers\MainController@bulletinInfoDownload')
            ->name('bulletinInfoDownload');
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
            Route::get('recycleBin/header', 'App\Http\Controllers\Admin\HeaderController@recycleBin')->name('header.recycleBin');
            Route::get('recycleBin/header/{id}/restore', 'App\Http\Controllers\Admin\HeaderController@recycleBinRestore')
                ->name('header.recycleBinRestore');
            Route::get('recycleBin/header/{id}/delete', 'App\Http\Controllers\Admin\HeaderController@forceDelete')
                ->name('header.forceDelete');

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

                Route::resource('governing-board-decree', 'App\Http\Controllers\Admin\About\GoverningBoardDecreeController');
                Route::get('recycleBin/governing-board-decree/{id}/restore',
                    'App\Http\Controllers\Admin\About\GoverningBoardDecreeController@recycleBinRestore')
                    ->name('governing-board-decree.recycleBinRestore');
                Route::get('recycleBin/governing-board-decree/{id}/delete',
                    'App\Http\Controllers\Admin\About\GoverningBoardDecreeController@forceDelete')
                    ->name('governing-board-decree.forceDelete');

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

                Route::resource('rectors-decree', 'App\Http\Controllers\Admin\About\RectorsDecreeController');
                Route::get('recycleBin/rectors-decree/{id}/restore',
                    'App\Http\Controllers\Admin\About\RectorsDecreeController@recycleBinRestore')
                    ->name('rectors-decree.recycleBinRestore');
                Route::get('recycleBin/rectors-decree/{id}/delete',
                    'App\Http\Controllers\Admin\About\RectorsDecreeController@forceDelete')
                    ->name('rectors-decree.forceDelete');

                Route::resource('rectors-biography', 'App\Http\Controllers\Admin\About\RectorsBiographyController');
                Route::resource('former-rectors-biography', 'App\Http\Controllers\Admin\About\FormerRectorsBiographyController');


                // academy structure page
                Route::resource('academy-structure', 'App\Http\Controllers\Admin\About\AcademyStructureController');
                Route::resource('workers', 'App\Http\Controllers\Admin\About\WorkersController');
                // edit page deleting img
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

                Route::resource('conducting-exam-video', 'App\Http\Controllers\Admin\FullTime\ConductingExamVideoController');
                Route::get('recycleBin/conducting-exam-video/{id}/restore',
                    'App\Http\Controllers\Admin\FullTime\ConductingExamVideoController@recycleBinRestore')
                    ->name('conducting-exam-video.recycleBinRestore');
                Route::get('recycleBin/conducting-exam-video/{id}/delete',
                    'App\Http\Controllers\Admin\FullTime\ConductingExamVideoController@forceDelete')
                    ->name('conducting-exam-video.forceDelete');

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

                Route::resource('behavior-rule', 'App\Http\Controllers\Admin\FullTime\BehaviorRuleController');
                Route::get('recycleBin/behavior-rule', 'App\Http\Controllers\Admin\FullTime\BehaviorRuleController@recycleBin')
                    ->name('behavior-rule.recycleBin');
                Route::get('recycleBin/behavior-rule/{id}/restore',
                    'App\Http\Controllers\Admin\FullTime\BehaviorRuleController@recycleBinRestore')
                    ->name('behavior-rule.recycleBinRestore');
                Route::get('recycleBin/behavior-rule/{id}/delete',
                    'App\Http\Controllers\Admin\FullTime\BehaviorRuleController@forceDelete')
                    ->name('behavior-rule.forceDelete');

                Route::resource('dormitory-rule', 'App\Http\Controllers\Admin\FullTime\DormitoryRuleController');
                Route::get('recycleBin/dormitory-rule', 'App\Http\Controllers\Admin\FullTime\DormitoryRuleController@recycleBin')
                    ->name('dormitory-rule.recycleBin');
                Route::get('recycleBin/dormitory-rule/{id}/restore',
                    'App\Http\Controllers\Admin\FullTime\DormitoryRuleController@recycleBinRestore')
                    ->name('dormitory-rule.recycleBinRestore');
                Route::get('recycleBin/dormitory-rule/{id}/delete',
                    'App\Http\Controllers\Admin\FullTime\DormitoryRuleController@forceDelete')
                    ->name('dormitory-rule.forceDelete');

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

                Route::resource('video-material', 'App\Http\Controllers\Admin\DistanceLearning\VideoMaterialController');
                Route::resource('guide', 'App\Http\Controllers\Admin\DistanceLearning\GuideController');
            });


            // library /***************************************************************************
            Route::group(['prefix' => 'library', 'as' => 'library.'], function () {
                Route::resource('academy-publication', 'App\Http\Controllers\Admin\Library\AcademyPublicationController');
                Route::resource('manual', 'App\Http\Controllers\Admin\Library\ManualController');
                Route::resource('training-material', 'App\Http\Controllers\Admin\Library\TrainingMaterialController');
                Route::resource(
                    'investigator-training-module',
                    'App\Http\Controllers\Admin\Library\InvestigatorTrainingModuleController'
                );
                Route::resource('video-lecture', 'App\Http\Controllers\Admin\Library\VideoLectureController');
                Route::resource('echr-resource', 'App\Http\Controllers\Admin\Library\ECHRResourceController');
                Route::resource('echr-link', 'App\Http\Controllers\Admin\Library\ECHRLinkController');
                Route::resource(
                    'professional-literature',
                    'App\Http\Controllers\Admin\Library\ProfessionalLiteratureController'
                );
                Route::resource(
                    'organizing-library-activity',
                    'App\Http\Controllers\Admin\Library\OrganizingLibraryActivityController'
                );
            });


            // bulletin /***************************************************************************
            Route::group(['prefix' => 'bulletin', 'as' => 'bulletin.'], function () {
                Route::resource('info', 'App\Http\Controllers\Admin\Bulletin\InfoController');
            });


            // partner /***************************************************************************
            Route::group(['prefix' => 'partners', 'as' => 'partners.'], function () {
                Route::resource('partner', 'App\Http\Controllers\Admin\Partners\PartnerController');
                Route::get('/partner/link/{id}', 'App\Http\Controllers\Admin\Partners\PartnerController@linkDelete')
                    ->name('partnerLinkDelete');
            });
        });
    });
});
