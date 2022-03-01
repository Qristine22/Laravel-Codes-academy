<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Helpers\PaginationHelper;

// Models
use App\Models\Home;
use App\Models\News;
use App\Models\About;
use App\Models\Header;
use App\Models\Report;
use App\Models\Worker;
use App\Models\Gallery;
use App\Models\Library;
use App\Models\Partner;
use App\Models\Bulletin;
use App\Models\EchrLink;
use App\Models\Graduate;
use App\Models\Admission;
use App\Models\Candidate;
use App\Models\Subheader;
use App\Models\LibraryPdf;
use App\Models\MassMedium;
use App\Models\ContactPage;
use App\Models\RectorsPage;
use App\Models\BehaviorRule;
use App\Models\BulletinInfo;
use App\Models\ContactStaff;
use App\Models\GalleryVideo;
use App\Models\VideoLecture;
use App\Models\DormitoryRule;
use App\Models\RectorsDecree;
use App\Models\ConductingExam;
use App\Models\ProvideDeferral;
use App\Models\TrainingProgram;
use App\Models\AcademyStructure;
use App\Models\DistanceLearning;
use App\Models\RectorsBiography;
use App\Models\ConductingPractice;
use App\Models\GoverningBoardPage;
use App\Models\ConductingExamVideo;
use App\Models\GoverningBoardStaff;
use App\Models\GoverningBoardDecree;
use App\Models\DistanceLearningGuide;
use App\Models\DistanceLearningVideo;
use App\Models\FormerRectorsBiography;
use App\Models\FrequentlyAskedQuestion;
use App\Models\DistanceLearningVideoMaterial;

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
        $home = Home::firstOrFail();
        $lastNews = News::latest()->take(3)->get();

        return view('home', [
            'headers' => $this->getHeader(),
            'home' => $home,
            'lastNews' => $lastNews,
        ]);
    }

    // search
    public function search(Request $request){
        if (isset($request->search) && !empty($request->search)) {
            $query = $request->search;
        }
        else {
            return redirect()->back();
        }
        $lastNews = News::latest()->take(3)->get();

        $news = News::where('title_en', 'LIKE', "%$query%")
            ->orwhere('title_am', 'LIKE', "%$query%")
            ->orwhere('title_ru', 'LIKE', "%$query%")
            ->orwhere('description_en', 'LIKE', "%$query%")
            ->orwhere('description_am', 'LIKE', "%$query%")
            ->orwhere('description_ru', 'LIKE', "%$query%")
            ->orwhere('date', 'LIKE', "%$query%")
            ->get();

        $galleries = Gallery::where('text_en', 'LIKE', "%$query%")
            ->orwhere('text_am', 'LIKE', "%$query%")
            ->orwhere('text_ru', 'LIKE', "%$query%")
            ->orwhere('year', 'LIKE', "%$query%")
            ->orwhere('full_date', 'LIKE', "%$query%")
            ->get();


        $data = $news->concat($galleries);
        // ->concat($name)
        $data = PaginationHelper::paginate($data, 20);

        return view('search', [
            'headers' => $this->getHeader(),
            'lastNews' => $lastNews,
            'searchResults' => $data,
        ]);
    }






    // about *********************************************************************************
    public function about(){
        $about = About::firstOrFail();
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
        $governingBoardPage = GoverningBoardPage::firstOrFail();

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

        $text = RectorsPage::firstOrFail();
        return view('rector', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'text' => $text,
        ]);
    }
    public function rectorsBiography(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        $person = RectorsBiography::firstOrFail();
        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person
        ]);
    }
    public function formerRectorsBiography(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        $person = FormerRectorsBiography::firstOrFail();
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
        $person = Worker::firstOrFail();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function chiefOfStaff(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 2)->firstOrFail();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function distanceLearningChief(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 3)->firstOrFail();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function programmaticMethodologicalActivities(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 4)->firstOrFail();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function trainingForTrainees(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 5)->firstOrFail();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function trainingOrganization(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 6)->firstOrFail();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function unitOfFinance(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 7)->firstOrFail();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function cooperationAndPublicRelation(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 8)->firstOrFail();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function staffAndDocumentManagement(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 9)->firstOrFail();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function tehchnicalAndEconomicActivities(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 10)->firstOrFail();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'person' => $person,
        ]);
    }
    public function hotel(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 11)->firstOrFail();

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
        $admission = Admission::firstOrFail();

        return view('admission', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'admission' => $admission,
        ]);
    }
    public function judgesCandidates(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $judgesCandidate = Candidate::firstOrFail();

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
    public function galleryVideo($year = null){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $years = GalleryVideo::all()->groupBy('year')->reverse();

        if(empty($year)){
            $year = $years->keys()[0];
        }
        $galleryVideos = GalleryVideo::where('year', $year)->get();

        return view('gallery', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'galleryVideos' => $galleryVideos,
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
            'downloadLink' => 'conductingPracticeDownload',
        ]);
    }
    public function rulesOfBehavior(){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $data = BehaviorRule::paginate(10);

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'data' => $data,
            'downloadLink' => 'rulesOfBehaviorDownload',
        ]);
    }
    public function dormitoryRules(){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $data = DormitoryRule::paginate(10);
        
        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'data' => $data,
            'downloadLink' => 'dormitoryRulesDownload',
        ]);
    }
    public function provideDeferral(){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $data = ProvideDeferral::paginate(10);

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'data' => $data,
            'downloadLink' => 'provideDeferralDownload',
        ]);
    }







    // distance learning *********************************************************************************
    public function distanceLearning(){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $distanceLearning = DistanceLearning::firstOrFail();
        $distancelearningVideos = DistanceLearningVideo::paginate(10);

        return view('distance-learning', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'distanceLearning' => $distanceLearning,
            'distancelearningVideos' => $distancelearningVideos,
        ]);
    }
    public function distanceLearningVideo($id){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $distancelearningVideo = DistanceLearningVideo::findOrFail($id);
        $guide = DistanceLearningGuide::firstOrFail();
        $FAQ = FrequentlyAskedQuestion::firstOrFail();

        return view('distance-learning-video', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'distancelearningVideo' => $distancelearningVideo,
            'guide' => $guide,
            'FAQ' => $FAQ,
        ]);
    }
    public function videoMaterials(){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $videoMaterials = DistanceLearningVideoMaterial::all();

        return view('video-materials', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'videoMaterials' => $videoMaterials
        ]);
    }
    public function distanceLearningCourses(){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $guide = DistanceLearningGuide::firstOrFail();
        $FAQ = FrequentlyAskedQuestion::firstOrFail();

        return view('distance-learning-courses', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'guide' => $guide,
            'FAQ' => $FAQ,
        ]);
    }
    public function FAQ(){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $FAQ = FrequentlyAskedQuestion::firstOrFail();
        $distancelearningVideos = DistanceLearningVideo::paginate(10);

        return view('distance-learning', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'distanceLearning' => $FAQ,
            'distancelearningVideos' => $distancelearningVideos,
        ]);
    }
    public function motivationalVideos(){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $guide = DistanceLearningGuide::firstOrFail();
        $FAQ = FrequentlyAskedQuestion::firstOrFail();

        return view('motivational-videos', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'guide' => $guide,
            'FAQ' => $FAQ,
        ]);
    }
    public function mediaMaterials(){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $guide = DistanceLearningGuide::firstOrFail();
        $FAQ = FrequentlyAskedQuestion::firstOrFail();

        return view('media-materials', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'guide' => $guide,
            'FAQ' => $FAQ,
        ]);
    }
    public function distanceLearningGuide(){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $guide = DistanceLearningGuide::firstOrFail();
        $FAQ = FrequentlyAskedQuestion::firstOrFail();

        return view('distance-learning-guide', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'guide' => $guide,
            'FAQ' => $FAQ,
        ]);
    }







    // library *********************************************************************************
    public function library(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $academyPublications = Library::where('category', 'academy-publication')->get();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'data' => $academyPublications,
        ]);
    }
    public function trainingMaterials(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $academyPublications = Library::where('category', 'training-material')->get();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'data' => $academyPublications,
        ]);
    }
    public function videoLectures(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $videoLectures = VideoLecture::paginate(10);

        return view('video-lectures', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'videoLectures' => $videoLectures,
        ]);
    }
    public function videoLectureSingle($id){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $videoLecture = VideoLecture::findOrFail($id);

        return view('video-lecture-single', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'videoLecture' => $videoLecture,
        ]);
    }
    public function academyPublications(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $academyPublications = Library::where('category', 'academy-publication')->get();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'data' => $academyPublications,
        ]);
    }
    public function manuals(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $manuals = Library::where('category', 'manual')->get();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'data' => $manuals,
        ]);
    }
    public function professionalLiterature(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $professionalLiteratures = LibraryPdf::where('category', 'professional-literature')->get();

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'data' => $professionalLiteratures,
            'downloadLink' => 'LibraryPdfDownload',
        ]);
    }
    public function organizingLibraryActivities(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $organizingLibraryActivities = LibraryPdf::where('category', 'organizing-library-activity')->get();

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'data' => $organizingLibraryActivities,
            'downloadLink' => 'LibraryPdfDownload',
        ]);
    }
    public function ECHRResources(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $ECHRResources = Library::where('category', 'ECHR-resource')->get();
        $ECHRLinks = EchrLink::all();
        
        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'data' => $ECHRResources,
            'ECHRLinks' => $ECHRLinks,
            'downloadLink' => 'ECHRResourcesDownload',
        ]);
    }
    public function investigatorTrainingModules(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $investigatorTrainingModules = Library::where('category', 'investigator-training-module')->get();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'data' => $investigatorTrainingModules,
        ]);
    }







    // bulletin *********************************************************************************
    public function bulletin(){
        $bulletinInfos = BulletinInfo::all();
        $bulletins = Bulletin::all();

        return view('bulletin', [
            'headers' => $this->getHeader(),
            'bulletinInfos' => $bulletinInfos,
            'bulletins' => $bulletins,
            'downloadLink' => 'bulletinInfoDownload',
        ]);
    }







    // partners *********************************************************************************
    public function partners(){
        $internationals = Partner::where('category', 'international')->get();
        $foreigns = Partner::where('category', 'foreign')->get();
        $armArtsakhs = Partner::where('category', 'arm&artsakh')->get();

        return view('partners', [
            'headers' => $this->getHeader(),
            'internationals' => $internationals,
            'foreigns' => $foreigns,
            'armArtsakhs' => $armArtsakhs,
        ]);
    }
    public function partnerSingle($id){
        $headersBot = Subheader::where('parent_id', 7)->get();
        $partner = Partner::findOrFail($id);

        return view('partner-single', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'partner' => $partner,
        ]);
    }






    
    // contacts *********************************************************************************
    public function contacts(){
        $contactPage = ContactPage::firstOrFail();
        $contactStaff = ContactStaff::all();

        return view('contacts', [
            'headers' => $this->getHeader(),
            'contactPage' => $contactPage,
            'contactStaff' => $contactStaff,
        ]);
    }






    
    //login *********************************************************************************
    public function login(){
        return view('admin.login', [
            'headers' => $this->getHeader(),
        ]);
    }
}