<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Models
use App\Models\Home;
use App\Models\About;
use App\Models\Header;
use App\Models\Report;
use App\Models\Worker;
use App\Models\Subheader;
use App\Models\RectorsPage;
use App\Models\RectorsDecree;
use App\Models\AcademyStructure;
use App\Models\RectorsBiography;
use App\Models\GoverningBoardPage;
use App\Models\GoverningBoardStaff;
use App\Models\GoverningBoardDecree;
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





    // home *********************************************************************************
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
        $headersBot = Subheader::where('parent_id', 1)->get();
        return view('about', [
            'headers' => $this->getHeader(),
            'about' => $about,
            'headersBot' => $headersBot,
        ]);
    }

    public function governingBoard(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        // /about/governing-board - long text in top 
        $governingBoardPage = GoverningBoardPage::first();

        // /about/governing-board - years
        $governingBoardDecreesYears = GoverningBoardDecree::all()->groupBy('year');

        // /about/governing-board - members
        $governingBoardMembers = GoverningBoardStaff::get();

        return view('governing-board', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'governingBoardPage' => $governingBoardPage,
            'governingBoardDecreesYears' => $governingBoardDecreesYears,
            'governingBoardMembers' => $governingBoardMembers,
        ]);
    }

    public function governingBoardDecree($year){
        $headersBot = Subheader::where('parent_id', 1)->get();

        $governingBoardDecrees = GoverningBoardDecree::where('year', $year)->get();
        $governingBoardDecreesYears = GoverningBoardDecree::all()->groupBy('year');

        return view('governing-board-decree', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'governingBoardDecrees' => $governingBoardDecrees,
            'governingBoardDecreesYears' => $governingBoardDecreesYears,
            'year' => $year,
        ]);
    }

    public function governingBoardBiography($id){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = GoverningBoardStaff::findOrFail($id);

        return view('governing-board-biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }

    public function rector(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        $text = RectorsPage::first();
        return view('rector', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'text' => $text,
        ]);
    }
    public function rectorsBiography(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        $person = RectorsBiography::first();
        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person
        ]);
    }
    public function formerRectorsBiography(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        $person = FormerRectorsBiography::first();
        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person
        ]);
    }
    public function rectorsDecrees(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        $decrees = RectorsDecree::orderBy('id', 'DESC')->paginate(10);
        return view('rectors-decrees', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'decrees' => $decrees,
        ]);
    }




    public function academyStructure(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $academyStructure = AcademyStructure::all();

        return view('academy-structure', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'academyStructure' => $academyStructure,
        ]);
    }
    public function VICERector(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function chiefOfStaff(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 2)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function distanceLearningChief(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 3)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function programmaticMethodologicalActivities(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 4)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function trainingForTrainees(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 5)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function trainingOrganization(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 6)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function unitOfFinance(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 7)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function cooperationAndPublicRelation(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 8)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function staffAndDocumentManagement(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 9)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function tehchnicalAndEconomicActivities(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 10)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function hotel(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 11)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }








    public function report($year){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $reports = Report::where('year', $year)->get();
        $reportYears = Report::orderBy('id', 'DESC')->get()->groupBy('year');

        return view('report', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'reports' => $reports,
            'reportYears' => $reportYears,
            'year' => $year,
        ]);
    }
    public function graduates(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        return view('graduates', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function graduatesJudges(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        return view('graduates-profession', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function graduatesProsecutors(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        return view('graduates-profession', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function graduatesInvestigators(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        return view('graduates-profession', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function admission(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        return view('admission', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function judgesCandidates(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        return view('judges-candidates', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function prosecutorsCandidates(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        return view('judges-candidates', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function investigatorsCandidates(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        return view('judges-candidates', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function gallery($year){
        $headersBot = Subheader::where('parent_id', 1)->get();

        return view('gallery', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function gallerySingle($year, $id){
        $headersBot = Subheader::where('parent_id', 1)->get();

        return view('gallery-single', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function massMedia(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        return view('mass-media', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
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
        $headersBot = Subheader::where('parent_id', 3)->get();

        return view('training-programs', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function trainingPrograms(){
        $headersBot = Subheader::where('parent_id', 3)->get();

        return view('training-programs', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function trainingProgramSingle(){
        $headersBot = Subheader::where('parent_id', 3)->get();

        return view('training-program-single', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function conductingExams(){
        $headersBot = Subheader::where('parent_id', 3)->get();

        return view('conducting-exams', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function conductingPractice(){
        $headersBot = Subheader::where('parent_id', 3)->get();

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function rulesOfBehaviour(){
        $headersBot = Subheader::where('parent_id', 3)->get();

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function dormitoryRules(){
        $headersBot = Subheader::where('parent_id', 3)->get();
        
        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function provideDeferral(){
        $headersBot = Subheader::where('parent_id', 3)->get();

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }







    // distance learning *********************************************************************************
    public function distanceLearning(){
        $headersBot = Subheader::where('parent_id', 4)->get();

        return view('distance-learning', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function distanceLearningVideo(){
        $headersBot = Subheader::where('parent_id', 4)->get();

        return view('distance-learning-video', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function videoMaterials(){
        $headersBot = Subheader::where('parent_id', 4)->get();

        return view('video-materials', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function distanceLearningCourses(){
        $headersBot = Subheader::where('parent_id', 4)->get();

        return view('distance-learning-courses', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function motivationalVideos(){
        $headersBot = Subheader::where('parent_id', 4)->get();

        return view('motivational-videos', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function mediaMaterials(){
        $headersBot = Subheader::where('parent_id', 4)->get();

        return view('media-materials', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function distanceLearningGuide(){
        $headersBot = Subheader::where('parent_id', 4)->get();

        return view('distance-learning-guide', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }







    // library *********************************************************************************
    public function library(){
        $headersBot = Subheader::where('parent_id', 5)->get();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function trainingMaterials(){
        $headersBot = Subheader::where('parent_id', 5)->get();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function videoLectures(){
        $headersBot = Subheader::where('parent_id', 5)->get();

        return view('video-lectures', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function videoLectureSingle($id){
        $headersBot = Subheader::where('parent_id', 5)->get();

        return view('video-lecture-single', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function academyPublications(){
        $headersBot = Subheader::where('parent_id', 5)->get();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function manuals(){
        $headersBot = Subheader::where('parent_id', 5)->get();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function professionalLiterature(){
        $headersBot = Subheader::where('parent_id', 5)->get();

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function organizingLibraryActivities(){
        $headersBot = Subheader::where('parent_id', 5)->get();

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function ECHRResources(){
        $headersBot = Subheader::where('parent_id', 5)->get();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
        ]);
    }
    public function investigatorTrainingModules(){
        $headersBot = Subheader::where('parent_id', 5)->get();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
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
        $headersBot = Subheader::where('parent_id', 7)->get();

        return view('partner-single', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
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