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
use App\Models\Admission;
use App\Models\BehaviorRule;
use App\Models\Candidate;
use App\Models\ConductingExam;
use App\Models\ConductingExamVideo;
use App\Models\ConductingPractice;
use App\Models\RectorsBiography;
use App\Models\GoverningBoardPage;
use App\Models\GoverningBoardStaff;
use App\Models\GoverningBoardDecree;
use App\Models\FormerRectorsBiography;
use App\Models\Gallery;
use App\Models\Graduate;
use App\Models\MassMedium;
use App\Models\News;
use App\Models\TrainingProgram;

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
        $lastNews = News::latest()->take(3)->get();

        return view('home', [
            'headers' => $this->getHeader(),
            'home' => $home,
            'lastNews' => $lastNews,
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








    public function report($year = null){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $reportYears = Report::orderBy('id', 'DESC')->get()->groupBy('year');
        if(empty($year)){
            $year = $reportYears->keys()[0];
        }
        $reports = Report::where('year', $year)->get();

        return view('report', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'reports' => $reports,
            'reportYears' => $reportYears,
            'year' => $year,
        ]);
    }






    public function graduates($year = null){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $graduateYears = Graduate::orderBy('id', 'DESC')->get()->groupBy('year');
        
        if(empty($year)){
            $year = $graduateYears->keys()[0];
        }
        $judgeGraduates = Graduate::where('year', $year)->where('position', 'judge')->get();
        $prosecutorGraduates = Graduate::where('year', $year)->where('position', 'prosecutor')->get();
        $investigatorGraduates = Graduate::where('year', $year)->where('position', 'investigator')->get();

        return view('graduates', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'graduateYears' => $graduateYears,
            'judgeGraduates' => $judgeGraduates,
            'prosecutorGraduates' => $prosecutorGraduates,
            'investigatorGraduates' => $investigatorGraduates,
            'year' => $year,
        ]);
    }
    public function graduatesJudges($year){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $judgeGraduates = Graduate::where('year', $year)->where('position', 'judge')->get();

        return view('graduates-profession', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'graduates' => $judgeGraduates,
            'position' => 'judge',
        ]);
    }
    public function graduatesProsecutors($year){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $prosecutorGraduates = Graduate::where('year', $year)->where('position', 'prosecutor')->get();

        return view('graduates-profession', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'graduates' => $prosecutorGraduates,
            'position' => 'prosecutor',
        ]);
    }
    public function graduatesInvestigators($year){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $investigatorGraduates = Graduate::where('year', $year)->where('position', 'investigator')->get();

        return view('graduates-profession', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'graduates' => $investigatorGraduates,
            'position' => 'investigator',
        ]);
    }








    public function admission(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $admission = Admission::first();

        return view('admission', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'admission' => $admission,
        ]);
    }
    public function judgesCandidates(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $judgesCandidate = Candidate::first();

        return view('candidates', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'candidate' => $judgesCandidate,
        ]);
    }
    public function prosecutorsCandidates(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $prosecutorsCandidate = Candidate::findOrFail(2);

        return view('candidates', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'candidate' => $prosecutorsCandidate,
        ]);
    }
    public function investigatorsCandidates(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $investigatorsCandidate = Candidate::findOrFail(3);

        return view('candidates', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'candidate' => $investigatorsCandidate,
        ]);
    }





    public function gallery($year = null){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $years = Gallery::all()->groupBy('year')->reverse();

        if(empty($year)){
            $year = $years->keys()[0];
        }
        $galleries = Gallery::galleryAll($year);

        return view('gallery', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'galleries' => $galleries,
            'years' => $years,
            'year' => $year,
        ]);
    }

    public function massMedia($year = null){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $years = MassMedium::all()->groupBy('year')->reverse();

        if(empty($year)){
            $year = $years->keys()[0];
        }
        $massMedia = MassMedium::massMidiaYear($year);

        return view('mass-media', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'massMedia' => $massMedia,
            'years' => $years,
            'year' => $year,
        ]);
    }








    // news *********************************************************************************
    public function news(){
        $news = News::orderBy('id', 'DESC')->paginate(10);

        return view('news', [
            'headers' => $this->getHeader(),
            'news' => $news,
        ]);
    }
    public function newsSingle($id){
        $news = News::findOrFail($id);
        $lastNews = News::latest()->take(3)->get();

        return view('news-single', [
            'headers' => $this->getHeader(),
            'news' => $news,
            'lastNews' => $lastNews,
        ]);
    }









    // full time education *********************************************************************************
    // training programs
    public function fullTimeEducation(){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $trainingProgramJodgeYears = TrainingProgram::where('category', 'judge')->get()->groupBy('year')->reverse();
        $trainingProgramProsecutorYears = TrainingProgram::where('category', 'prosecutor')->get()->groupBy('year')->reverse();
        $trainingProgramInvestigatorYears = TrainingProgram::where('category', 'investigator')
            ->get()->groupBy('year')->reverse();

        return view('training-programs', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'trainingProgramJodgeYears' => $trainingProgramJodgeYears,
            'trainingProgramProsecutorYears' => $trainingProgramProsecutorYears,
            'trainingProgramInvestigatorYears' => $trainingProgramInvestigatorYears,
        ]);
    }
    public function trainingPrograms(){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $trainingProgramJodgeYears = TrainingProgram::where('category', 'judge')->get()->groupBy('year')->reverse();
        $trainingProgramProsecutorYears = TrainingProgram::where('category', 'prosecutor')->get()->groupBy('year')->reverse();
        $trainingProgramInvestigatorYears = TrainingProgram::where('category', 'investigator')
            ->get()->groupBy('year')->reverse();

        return view('training-programs', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'trainingProgramJodgeYears' => $trainingProgramJodgeYears,
            'trainingProgramProsecutorYears' => $trainingProgramProsecutorYears,
            'trainingProgramInvestigatorYears' => $trainingProgramInvestigatorYears,
        ]);
    }
    public function trainingProgramSingle($year, $category){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $trainingPrograms = TrainingProgram::where('category', $category)->where('year', $year)
            ->get();

        return view('training-program-single', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'trainingPrograms' => $trainingPrograms,
            'year' => $year,
            'category' => $category,
        ]);
    }




    // conducting exams
    public function conductingExams(){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $conductingExams = ConductingExam::all();
        $conductingExamVideos = ConductingExamVideo::all();

        return view('conducting-exams', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'conductingExams' => $conductingExams,
            'conductingExamVideos' => $conductingExamVideos,
        ]);
    }
    public function conductingPractice(){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $conductingPractices = ConductingPractice::paginate(10);

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'data' => $conductingPractices,
        ]);
    }
    public function rulesOfBehavior(){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $data = BehaviorRule::paginate(10);

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'data' => $data,
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