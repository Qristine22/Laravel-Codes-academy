<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Models
use App\Models\About;
use App\Models\Home;
use App\Models\GoverningBoardPage;
use App\Models\GoverningBoardDecree;
use App\Models\GoverningBoardStaff;

class PagesController extends Controller
{
    public function home(){
        $home = Home::first();
        return view('home', [
            'home' => $home
        ]);
    }


    // about *********************************************************************************
    public function about(){
        $about = About::first();
        return view('about', [
            'about' => $about
        ]);
    }

    public function governingBoard(){
        // /about/governing-board - long text in top 
        $governingBoardPage = GoverningBoardPage::first();

        // /about/governing-board - years
        $governingBoardDecreesYears = GoverningBoardDecree::all()->groupBy('year');

        // /about/governing-board - members
        $governingBoardMembers = GoverningBoardStaff::get();

        return view('governing-board', [
            'governingBoardPage' => $governingBoardPage,
            'governingBoardDecreesYears' => $governingBoardDecreesYears,
            'governingBoardMembers' => $governingBoardMembers,
        ]);
    }

    public function governingBoardDecree($year){
        $governingBoardDecrees = GoverningBoardDecree::where('year', $year)->get();
        $governingBoardDecreesYears = GoverningBoardDecree::all()->groupBy('year');

        return view('governing-board-decree', [
            'governingBoardDecrees' => $governingBoardDecrees,
            'governingBoardDecreesYears' => $governingBoardDecreesYears,
            'year' => $year,
        ]);
    }

    public function governingBoardBiography($id){
        $person = GoverningBoardStaff::findOrFail($id);
        return view('biography', [
            'person' => $person,
        ]);
    }

    public function rector(){
        return view('rector');
    }
    public function rectorsBiography(){
        $person = GoverningBoardStaff::findOrFail(1);
        return view('biography', [
            'person' => $person
        ]);
    }
    public function formerRectorsBiography(){
        $person = GoverningBoardStaff::findOrFail(1);
        return view('biography', [
            'person' => $person
        ]);
    }
    public function rectorsDecrees(){
        return view('rectors-decrees');
    }
    public function academyStructure(){
        return view('academy-structure');
    }
    public function report(){
        return view('report');
    }
    public function graduates(){
        return view('graduates');
    }
    public function graduatesJudges(){
        return view('graduates-profession');
    }
    public function graduatesProsecutors(){
        return view('graduates-profession');
    }
    public function graduatesInvestigators(){
        return view('graduates-profession');
    }
    public function admission(){
        return view('admission');
    }
    public function judgesCandidates(){
        return view('judges-candidates');
    }
    public function prosecutorsCandidates(){
        return view('judges-candidates');
    }
    public function investigatorsCandidates(){
        return view('judges-candidates');
    }
    public function gallery(){
        return view('gallery');
    }
    public function gallerySingle(){
        return view('gallery-single');
    }
    public function massMedia(){
        return view('mass-media');
    }

    // news *********************************************************************************
    public function news(){
        return view('news');
    }
    public function newsSingle(){
        return view('news-single');
    }

    // full time education *********************************************************************************
    public function fullTimeEducation(){
        return view('full-time-education');
    }
    public function trainingPrograms(){
        return view('training-programs');
    }
    public function conductingExams(){
        return view('conducting-exams');
    }
    public function conductingPractice(){
        return view('pdfs-downloade');
    }
    public function rulesOfBehaviour(){
        return view('pdfs-downloade');
    }
    public function dormitoryRules(){
        return view('pdfs-downloade');
    }
    public function provideDeferral(){
        return view('pdfs-downloade');
    }

    // distance learning *********************************************************************************
    public function distanceLearning(){
        return view('distance-learning');
    }
    public function distanceLearningVideo(){
        return view('distance-learning-video');
    }
    public function videoMaterials(){
        return view('video-materials');
    }
    public function distanceLearningCourses(){
        return view('distance-learning-courses');
    }
    public function motivationalVideos(){
        return view('motivational-videos');
    }
    public function mediaMaterials(){
        return view('media-materials');
    }
    public function distanceLearningGuide(){
        return view('distance-learning-guide');
    }

    // library *********************************************************************************
    public function library(){
        return view('library');
    }
    public function trainingMaterials(){
        return view('library');
    }
    public function videoLectures(){
        return view('video-lectures');
    }
    public function videoLectureSingle($id){
        return view('video-lecture-single');
    }
    public function academyPublications(){
        return view('library');
    }
    public function professionalLiterature(){
        return view('pdfs-downloade');
    }
    public function organizingLibraryActivities(){
        return view('pdfs-downloade');
    }
    public function ECHRResources(){
        return view('library');
    }
    public function investigatorTrainingModules(){
        return view('library');
    }

    // bulletin *********************************************************************************
    public function bulletin(){
        return view('bulletin');
    }

    // partners *********************************************************************************
    public function partners(){
        return view('partners');
    }
    public function partnerSingle($id){
        return view('partner-single');
    }

    // contacts *********************************************************************************
    public function contacts(){
        return view('contacts');
    }

    //login *********************************************************************************
    public function login(){
        return view('admin.login');
    }
}