<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Header;
use App\Models\SitesLink;
use App\Models\ContactPage;
use App\Models\ContactStaff;

class ContactsController extends Controller
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




    
    
    // contacts *********************************************************************************
    public function contacts(){
        $contactPage = ContactPage::firstOrFail();
        $contactStaff = ContactStaff::all();

        return view('contacts', [
            'headers' => $this->getHeader(),
            'sitesLinks' => $this->getSitesLinks(),
            'contactPage' => $contactPage,
            'contactStaff' => $contactStaff,
        ]);
    }
}
