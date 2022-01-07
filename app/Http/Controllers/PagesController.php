<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Models
use App\Models\Header;
use App\Models\About;
use App\Models\Home;
use App\Models\GoverningBoardPage;
use App\Models\GoverningBoardDecree;
use App\Models\GoverningBoardStaff;
use App\Models\RectorsPage;
use App\Models\RectorsDecree;
use App\Models\RectorsBiography;
use App\Models\FormerRectorsBiography;

class PagesController extends Controller
{
    public $headers;

    public function getHeader(){
        return $this->headers;
    }
    public function setHeader($headers){
        $this->headers = $headers;
    }

    public function __construct(){
        $headers = Header::headers();
        $this->setHeader($headers);
    }



    public function home(){
        $home = Home::first();
        return view('home', [
            'headers' => $this->getHeader(),
            'home' => $home,
        ]);
    }


    // about *********************************************************************************
    public function about(){
        $about = About::first();
        return view('about', [
            'headers' => $this->getHeader(),
            'about' => $about,
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
            'headers' => $this->getHeader(),
            'governingBoardPage' => $governingBoardPage,
            'governingBoardDecreesYears' => $governingBoardDecreesYears,
            'governingBoardMembers' => $governingBoardMembers,
        ]);
    }

    public function governingBoardDecree($year){
        $governingBoardDecrees = GoverningBoardDecree::where('year', $year)->get();
        $governingBoardDecreesYears = GoverningBoardDecree::all()->groupBy('year');

        return view('governing-board-decree', [
            'headers' => $this->getHeader(),
            'governingBoardDecrees' => $governingBoardDecrees,
            'governingBoardDecreesYears' => $governingBoardDecreesYears,
            'year' => $year,
        ]);
    }

    public function governingBoardBiography($id){
        $person = GoverningBoardStaff::findOrFail($id);
        return view('biography', [
            'headers' => $this->getHeader(),
            'person' => $person,
        ]);
    }

    public function rector(){
        $text = RectorsPage::first();
        return view('rector', [
            'headers' => $this->getHeader(),
            'text' => $text,
        ]);
    }
    public function rectorsBiography(){
        $person = RectorsBiography::first();
        return view('biography', [
            'headers' => $this->getHeader(),
            'person' => $person
        ]);
    }
    public function formerRectorsBiography(){
        $person = FormerRectorsBiography::first();
        return view('biography', [
            'headers' => $this->getHeader(),
            'person' => $person
        ]);
    }
    public function rectorsDecrees(){
        $decrees = RectorsDecree::orderBy('id', 'DESC')->paginate(10);
        return view('rectors-decrees', [
            'headers' => $this->getHeader(),
            'decrees' => $decrees,
        ]);
    }
    public function academyStructure(){
        return view('academy-structure', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function report(){
        return view('report', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function graduates(){
        return view('graduates', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function graduatesJudges(){
        return view('graduates-profession', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function graduatesProsecutors(){
        return view('graduates-profession', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function graduatesInvestigators(){
        return view('graduates-profession', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function admission(){
        return view('admission', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function judgesCandidates(){
        return view('judges-candidates', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function prosecutorsCandidates(){
        return view('judges-candidates', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function investigatorsCandidates(){
        return view('judges-candidates', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function gallery(){
        return view('gallery', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function gallerySingle(){
        return view('gallery-single', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function massMedia(){
        return view('mass-media', [
            'headers' => $this->getHeader(),
        ]);
    }

    // news *********************************************************************************
    public function news(){
        return view('news', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function newsSingle(){
        return view('news-single', [
            'headers' => $this->getHeader(),
        ]);
    }

    // full time education *********************************************************************************
    public function fullTimeEducation(){
        return view('full-time-education', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function trainingPrograms(){
        return view('training-programs', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function conductingExams(){
        return view('conducting-exams', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function conductingPractice(){
        return view('pdfs-downloade', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function rulesOfBehaviour(){
        return view('pdfs-downloade', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function dormitoryRules(){
        return view('pdfs-downloade', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function provideDeferral(){
        return view('pdfs-downloade', [
            'headers' => $this->getHeader(),
        ]);
    }

    // distance learning *********************************************************************************
    public function distanceLearning(){
        return view('distance-learning', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function distanceLearningVideo(){
        return view('distance-learning-video', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function videoMaterials(){
        return view('video-materials', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function distanceLearningCourses(){
        return view('distance-learning-courses', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function motivationalVideos(){
        return view('motivational-videos', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function mediaMaterials(){
        return view('media-materials', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function distanceLearningGuide(){
        return view('distance-learning-guide', [
            'headers' => $this->getHeader(),
        ]);
    }

    // library *********************************************************************************
    public function library(){
        return view('library', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function trainingMaterials(){
        return view('library', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function videoLectures(){
        return view('video-lectures', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function videoLectureSingle($id){
        return view('video-lecture-single', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function academyPublications(){
        return view('library', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function professionalLiterature(){
        return view('pdfs-downloade', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function organizingLibraryActivities(){
        return view('pdfs-downloade', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function ECHRResources(){
        return view('library', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function investigatorTrainingModules(){
        return view('library', [
            'headers' => $this->getHeader(),
        ]);
    }

    // bulletin *********************************************************************************
    public function bulletin(){
        return view('bulletin', [
            'headers' => $this->getHeader(),
        ]);
    }

    // partners *********************************************************************************
    public function partners(){
        return view('partners', [
            'headers' => $this->getHeader(),
        ]);
    }
    public function partnerSingle($id){
        return view('partner-single', [
            'headers' => $this->getHeader(),
        ]);
    }

    // contacts *********************************************************************************
    public function contacts(){
        return view('contacts', [
            'headers' => $this->getHeader(),
        ]);
    }

    //login *********************************************************************************
    public function login(){
        return view('admin.login', [
            'headers' => $this->getHeader(),
        ]);
    }
}