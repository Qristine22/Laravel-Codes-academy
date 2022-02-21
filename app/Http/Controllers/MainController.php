<?php

namespace App\Http\Controllers;

use App\Models\BehaviorRule;
use App\Models\News;
use App\Models\Gallery;

// Models

use App\Models\Library;
use App\Models\LibraryPdf;
use Illuminate\Http\Request;
use App\Models\RectorsDecree;
use App\Models\ConductingExam;
use App\Models\ConductingPractice;
use App\Models\TrainingProgram;
use Illuminate\Support\Facades\App;
use App\Models\GoverningBoardDecree;
use App\Models\DistanceLearningGuide;
use App\Models\DormitoryRule;
use App\Models\ProvideDeferral;

class MainController extends Controller
{
    public function changeLocale($locale)
    {
        if (!in_array($locale, ['en', 'am', 'ru'])) {
            abort(404);
        }
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    }







    // home search function *******************************************************************
    public function search($query)
    {
        // $columnsToSearch = ['info_en', 'info_am', 'info_ru', 'pdf_name'];
        // $indents = [];


        // if(isset($query)){
        //     foreach($columnsToSearch as $column) {
        //         $indent = GoverningBoardDecree::where($column, 'LIKE', "%$query%")->get();
        //         if(count($indent)){
        //             $indents[] = $indent;
        //         }
        //     }

        //     return response()->json($indents);
        // }


        if (isset($query)) {
            $news = News::where('title_en', 'LIKE', "%$query%")
                ->orwhere('title_am', 'LIKE', "%$query%")
                ->orwhere('title_ru', 'LIKE', "%$query%")
                ->orwhere('description_en', 'LIKE', "%$query%")
                ->orwhere('description_am', 'LIKE', "%$query%")
                ->orwhere('description_ru', 'LIKE', "%$query%")
                ->orwhere('date', 'LIKE', "%$query%")
                ->get()->toArray();

            $galleries = Gallery::where('text_en', 'LIKE', "%$query%")
                ->orwhere('text_am', 'LIKE', "%$query%")
                ->orwhere('text_ru', 'LIKE', "%$query%")
                ->orwhere('year', 'LIKE', "%$query%")
                ->orwhere('full_date', 'LIKE', "%$query%")
                ->get()->toArray();

            $data = array_merge($news, $galleries);
            return response()->json($data);
        }
    }












    // download functions ***********************************************************************
    // governing board decree download
    public function governingBoardDecreedownload($pdf)
    {
        $decree = GoverningBoardDecree::findOrFail($pdf);
        $file = public_path() . "/storage/" . $decree->pdf;
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, 'decree' . $decree->id . '.pdf', $headers);
    }

    // rectors decree download
    public function rectorsDecreedownload($pdf)
    {
        $decree = RectorsDecree::findOrFail($pdf);
        $file = public_path() . "/storage/" . $decree->pdf;
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, 'decree' . $decree->id . '.pdf', $headers);
    }

    // training program download
    public function trainingProgramDownload($year, $category, $pdf)
    {
        $trainingProgram = TrainingProgram::findOrFail($pdf);
        $file = public_path() . "/storage/" . $trainingProgram->pdf;
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, 'training-program' . $trainingProgram->id . '.pdf', $headers);
    }

    // conducting exam download
    public function conductingExamDownload($pdf)
    {
        $conductingExam = ConductingExam::findOrFail($pdf);
        $file = public_path() . "/storage/" . $conductingExam->pdf;
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, 'conducting-exam' . $conductingExam->id . '.pdf', $headers);
    }

    // conducting practice download
    public function conductingPracticeDownload($pdf)
    {
        $conductingPractice = ConductingPractice::findOrFail($pdf);
        $file = public_path() . "/storage/" . $conductingPractice->pdf;
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, 'conducting-practice' . $conductingPractice->id . '.pdf', $headers);
    }
    
    // rules of behavior download
    public function rulesOfBehaviorDownload($pdf)
    {
        $rulesOfBehavior = BehaviorRule::findOrFail($pdf);
        $file = public_path() . "/storage/" . $rulesOfBehavior->pdf;
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, 'behavior-rule' . $rulesOfBehavior->id . '.pdf', $headers);
    }
        
    // dormitory rules download
    public function dormitoryRulesDownload($pdf)
    {
        $dormitoryRules = DormitoryRule::findOrFail($pdf);
        $file = public_path() . "/storage/" . $dormitoryRules->pdf;
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, 'dormitory-rule' . $dormitoryRules->id . '.pdf', $headers);
    }
            
    // provide deferral download
    public function provideDeferralDownload($pdf)
    {
        $provideDeferral = ProvideDeferral::findOrFail($pdf);
        $file = public_path() . "/storage/" . $provideDeferral->pdf;
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, 'provide-deferral' . $provideDeferral->id . '.pdf', $headers);
    }

    // distance learning guide download
    public function distanceLearningGuideDownload($pdf)
    {
        $guide = DistanceLearningGuide::findOrFail($pdf);
        $file = public_path() . "/storage/" . $guide->pdf;
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, 'guide' . $guide->id . '.pdf', $headers);
    }

    // ECHR resource download
    public function ECHRResourcesDownload($pdf)
    {
        $ECHRResource = Library::findOrFail($pdf);
        $file = public_path() . "/storage/" . $ECHRResource->pdf;
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, 'ECHRResource' . $ECHRResource->id . '.pdf', $headers);
    }

    // library pdf download
    public function LibraryPdfDownload($pdf)
    {
        $LibraryPdf = LibraryPdf::findOrFail($pdf);
        $file = public_path() . "/storage/" . $LibraryPdf->pdf;
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, 'library' . $LibraryPdf->id . '.pdf', $headers);
    }
}
