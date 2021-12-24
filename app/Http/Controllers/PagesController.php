<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Models
use App\Models\About;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    // about
    public function about(){
        $about = About::first();
        return view('about', [
            'about' => $about
        ]);
    }
    public function governingBoard(){
        return view('governing-board');
    }
    public function listenersTraining(){
        return view('listeners-training');
    }
    public function biography(){
        return view('biography');
    }
    public function rector(){
        return view('rector');
    }
    public function rectorsBiography(){
        return view('biography');
    }
    public function formerRectorsBiography(){
        return view('biography');
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

    // news
    public function news(){
        return view('news');
    }
    public function newsSingle(){
        return view('news-single');
    }

    // full time education
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

    // distance learning
    public function distanceLearning(){
        return view('distance-learning');
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

    // library
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

    // bulletin
    public function bulletin(){
        return view('bulletin');
    }

    // partners
    public function partners(){
        return view('partners');
    }
    public function partnerSingle($id){
        return view('partner-single');
    }

    // contacts
    public function contacts(){
        return view('contacts');
    }

    //login
    public function login(){
        return view('admin.login');
    }
}