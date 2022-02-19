<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

// Models
use App\Models\RectorsDecree;
use App\Models\ConductingExam;
use App\Models\DistanceLearningGuide;
use App\Models\TrainingProgram;
use App\Models\GoverningBoardDecree;
use App\Models\News;
use App\Models\Gallery;

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

    // distance learning guide download
    public function distanceLearningGuideDownload($pdf)
    {
        $guide = DistanceLearningGuide::findOrFail($pdf);
        $file = public_path() . "/storage/" . $guide->pdf;
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, 'guide' . $guide->id . '.pdf', $headers);
    }
}
