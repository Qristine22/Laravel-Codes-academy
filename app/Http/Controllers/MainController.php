<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

// Models
use App\Models\GoverningBoardDecree;
use App\Models\RectorsDecree;

class MainController extends Controller
{
    public function changeLocale($locale) {
        if (!in_array($locale, ['en', 'am', 'ru'])) {
            abort(404);
        }
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    }



    // download functions ***********************************************************************
    // governing board decree download
    public function governingBoardDecreedownload($pdf){
        $decree = GoverningBoardDecree::findOrFail($pdf);
        $file = public_path()."/storage/".$decree->pdf;
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, 'decree'.$decree->id.'.pdf', $headers);
    }

    // rectors decree download
    public function rectorsDecreedownload($pdf){
        $decree = RectorsDecree::findOrFail($pdf);
        $file = public_path()."/storage/".$decree->pdf;
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, 'decree'.$decree->id.'.pdf', $headers);
    }
}