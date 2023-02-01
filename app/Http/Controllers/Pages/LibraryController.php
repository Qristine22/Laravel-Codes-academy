<?php

namespace App\Http\Controllers\Pages;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Library;
use App\Models\Header;
use App\Models\Subheader;
use App\Models\SitesLink;
use App\Models\EchrLink;
use App\Models\LibraryPdf;
use App\Models\VideoLecture;
use App\Models\CriminalProcedureCodes;


class LibraryController extends Controller
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








    // library *********************************************************************************
    public function library(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $academyPublications = Library::where('category', 'academy-publication')->get();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'data' => $academyPublications,
        ]);
    }
    public function trainingMaterials(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $academyPublications = Library::where('category', 'training-material')->orderBy('id', 'DESC')->get();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'data' => $academyPublications,
        ]);
    }
    public function videoLectures(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $videoLectures = VideoLecture::orderBy('id', 'DESC')->paginate(10);

        return view('video-lectures', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'videoLectures' => $videoLectures,
        ]);
    }
    public function videoLectureSingle($id){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $videoLecture = VideoLecture::findOrFail($id);

        return view('video-lecture-single', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'videoLecture' => $videoLecture,
        ]);
    }
    public function academyPublications(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $academyPublications = Library::where('category', 'academy-publication')->orderBy('id', 'DESC')->get();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'data' => $academyPublications,
        ]);
    }
    public function manuals(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $manuals = Library::where('category', 'manual')->orderBy('id', 'DESC')->get();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'data' => $manuals,
        ]);
    }
    public function professionalLiterature(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $professionalLiteratures = LibraryPdf::where('category', 'professional-literature')->get();

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
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
            'sitesLinks' => $this->getSitesLinks(),
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
            'sitesLinks' => $this->getSitesLinks(),
            'data' => $ECHRResources,
            'ECHRLinks' => $ECHRLinks,
            'downloadLink' => 'ECHRResourcesDownload',
        ]);
    }
    public function investigatorTrainingModules(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $investigatorTrainingModules = Library::where('category', 'investigator-training-module')->orderBy('id', 'DESC')->get();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'data' => $investigatorTrainingModules,
        ]);
    }

    public function criminalProcedureCodes($type = null, $item = null){
        if ($type) {
            $criminalProcedureCodes = CriminalProcedureCodes::where('type', $type)->paginate(15);

        } else {
            $criminalProcedureCodes = [];
        }

        $headersBot = Subheader::where('parent_id', 5)->get();

        if ($item){
            $criminalProcedureCodes = CriminalProcedureCodes::find($item);
            return view('criminal-procedure-codes-item', [
                'criminalProcedureCodes' => $criminalProcedureCodes,
                'headers' => $this->getHeader(),
                'sitesLinks' => $this->getSitesLinks(),
                'headersBot' => $headersBot,
                'type' => $type,
            ]);
        }

        return view('criminal-procedure-codes', [
            'criminalProcedureCodes' => $criminalProcedureCodes,
            'headers' => $this->getHeader(),
            'sitesLinks' => $this->getSitesLinks(),
            'headersBot' => $headersBot,
            'type' => $type,
        ]);
    }
}
