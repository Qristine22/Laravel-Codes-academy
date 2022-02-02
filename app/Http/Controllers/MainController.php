<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

// Models
use App\Models\RectorsDecree;
use App\Models\GoverningBoardDecree;
use App\Models\TrainingProgram;
use App\Models\ConductingExam;

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

    // training program download
    public function trainingProgramDownload($year, $category, $pdf){
        $trainingProgram = TrainingProgram::findOrFail($pdf);
        $file = public_path()."/storage/".$trainingProgram->pdf;
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, 'training-program'.$trainingProgram->id.'.pdf', $headers);
    }

    // conducting exam download
    public function conductingExamDownload($pdf){
        $conductingExam = ConductingExam::findOrFail($pdf);
        $file = public_path()."/storage/".$conductingExam->pdf;
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, 'conducting-exam'.$conductingExam->id.'.pdf', $headers);
    }
}