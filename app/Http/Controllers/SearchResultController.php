<?php

namespace App\Http\Controllers;

use App\Models\News;

// Models
use App\Models\About;
use App\Models\Header;
use App\Models\SitesLink;
use App\Models\Subheader;
use Illuminate\Http\Request;

class SearchResultController extends Controller
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




    // search result
    public function news($id){
        $news = News::findOrFail($id);
        $lastNews = News::latest()->take(3)->get();

        return view('news-single', [
            'sitesLinks' => $this->getSitesLinks(),
            'headers' => $this->getHeader(),
            'news' => $news,
            'lastNews' => $lastNews,
        ]);
    }
    public function abouts($id){
        $about = About::firstOrFail();
        $headersBot = Subheader::where('parent_id', 1)->get();

        return view('about', [
            'headers' => $this->getHeader(),
            'sitesLinks' => $this->getSitesLinks(),
            'about' => $about,
            'headersBot' => $headersBot,
        ]);
    }
}
