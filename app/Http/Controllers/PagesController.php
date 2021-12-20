<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
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
    public function admission(){
        return view('admission');
    }
    public function judgesCandidates(){
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
    public function news(){
        return view('news');
    }
    public function newsSingle(){
        return view('news-single');
    }
    public function fullTimeEducation(){
        return view('full-time-education');
    }
    public function trainingPrograms(){
        return view('training-programs');
    }
    public function conductingExams(){
        return view('conducting-exams');
    }
    public function distanceLearning(){
        return view('distance-learning');
    }
}