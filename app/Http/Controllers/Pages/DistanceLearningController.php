<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Header;
use App\Models\Subheader;
use App\Models\SitesLink;
use App\Models\DistanceLearning;
use App\Models\MotivationalVideo;
use App\Models\DistanceLearningBook;
use App\Models\DistanceLearningGuide;
use App\Models\DistanceLearningVideo;
use App\Models\DistanceLearningCourse;
use App\Models\FrequentlyAskedQuestion;
use App\Models\DistanceLearningBooksPdf;
use App\Models\DistanceLearningAssignment;
use App\Models\DistanceLearningVideoMaterial;
use App\Models\DistanceLearningAdditionalMaterial;

class DistanceLearningController extends Controller
{
    public $headers;
    public $sitesLinks;

    public function getHeader(){
        return $this->headers;
    }
    public function setHeader($headers){
        $this->headers = $headers;
    }
    public function getSitesLinks(){
        return $this->sitesLinks;
    }
    public function setSitesLinks($sitesLinks){
        $this->sitesLinks = $sitesLinks;
    }
    public function __construct(){
        $headers = Header::headers();
        $sitesLinks = SitesLink::all();
        $this->setHeader($headers);
        $this->setSitesLinks($sitesLinks);
    }
    




    // distance learning *********************************************************************************
    public function distanceLearning(){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $distanceLearning = DistanceLearning::firstOrFail();
        $distancelearningVideos = DistanceLearningVideo::paginate(10);

        return view('distance-learning', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
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
            'sitesLinks' => $this->getSitesLinks(),
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
            'sitesLinks' => $this->getSitesLinks(),
            'videoMaterials' => $videoMaterials
        ]);
    }
    public function assignments($id){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $guide = DistanceLearningGuide::firstOrFail();
        $FAQ = FrequentlyAskedQuestion::firstOrFail();
        $assignments = DistanceLearningAssignment::where('course_id', $id)->get();

        if(count($assignments) === 0){
            return abort(404);
        }
        return view('distance-learning-assignment', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'guide' => $guide,
            'FAQ' => $FAQ,
            'assignments' => $assignments,
        ]);
    }
    public function distanceLearningCourses(){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $guide = DistanceLearningGuide::firstOrFail();
        $FAQ = FrequentlyAskedQuestion::firstOrFail();
        $courses = DistanceLearningCourse::courses();
        $books = DistanceLearningBook::all();

        return view('distance-learning-courses', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'guide' => $guide,
            'FAQ' => $FAQ,
            'courses' => $courses,
            'books' => $books,
        ]);
    }
    public function distanceLearningCourseSyllabus($id){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $distanceLearningCourse = DistanceLearningCourse::findOrFail($id);
        $distancelearningVideos = DistanceLearningVideo::paginate(10);

        return view('distance-learning', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'distanceLearning' => $distanceLearningCourse,
            'distancelearningVideos' => $distancelearningVideos,
        ]);
    }
    public function distanceLearningBook($id){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $pdfs = DistanceLearningBooksPdf::where('book_id', $id)->get();

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'data' => $pdfs,
            'downloadLink' => 'distanceLearningCourseDownload',
        ]);
    }
    public function FAQ(){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $FAQ = FrequentlyAskedQuestion::firstOrFail();
        $distancelearningVideos = DistanceLearningVideo::paginate(10);

        return view('distance-learning', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'distanceLearning' => $FAQ,
            'distancelearningVideos' => $distancelearningVideos,
        ]);
    }
    public function motivationalVideos($id){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $guide = DistanceLearningGuide::firstOrFail();
        $FAQ = FrequentlyAskedQuestion::firstOrFail();
        $motivationalVideos = MotivationalVideo::where('course_id', $id)->get();

        if(count($motivationalVideos) === 0){
            return abort(404);
        }

        return view('motivational-videos', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'guide' => $guide,
            'FAQ' => $FAQ,
            'motivationalVideos' => $motivationalVideos,
        ]);
    }
    public function mediaMaterials($id){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $guide = DistanceLearningGuide::firstOrFail();
        $FAQ = FrequentlyAskedQuestion::firstOrFail();
        $additionalMaterials = DistanceLearningAdditionalMaterial::additionalMaterialSingle($id);

        return view('media-materials', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'guide' => $guide,
            'FAQ' => $FAQ,
            'additionalMaterials' => $additionalMaterials,
        ]);
    }
    public function distanceLearningGuide(){
        $headersBot = Subheader::where('parent_id', 4)->get();
        $guide = DistanceLearningGuide::firstOrFail();
        $FAQ = FrequentlyAskedQuestion::firstOrFail();

        return view('distance-learning-guide', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'guide' => $guide,
            'FAQ' => $FAQ,
        ]);
    }
}