<?php

namespace App\Http\Controllers\Admin\Library;

use App\Http\Controllers\Controller;
use App\Http\Requests\About\GalleryRequest;
use App\Http\Requests\CriminalProcedureCodesRequest;
use App\Models\CriminalProcedureCodes;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;

class CriminalProcedureCodesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $criminalProcedureCodes = CriminalProcedureCodes::paginate(15);
        return view('admin.library.criminal-procedure-codes.index', [
            'criminalProcedureCodes' => $criminalProcedureCodes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.library.criminal-procedure-codes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CriminalProcedureCodesRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(CriminalProcedureCodesRequest $request)
    {

        $request->validate([
            'link' => 'required',
        ]);
        $pdf = $request->file('syllabus_pdf')->store('criminal-procedure-codes');

        CriminalProcedureCodes::Create([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
            'link' => $request->link,
//            'full_date' => $request->full_date,
//            'year' => $request->year,
            'syllabus_pdf_name_en' => $request->syllabus_pdf_name_en,
            'syllabus_pdf_name_am' => $request->syllabus_pdf_name_am,
            'syllabus_pdf_name_ru' => $request->syllabus_pdf_name_ru,
            'syllabus_pdf' => $pdf,
            'type' =>  $request->type
        ]);
        return redirect(route('admin.library.criminal-procedure-codes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param $type
     * @return Application|Factory|View
     */
    public function show($type)
    {
        $criminalProcedureCodes = CriminalProcedureCodes::where('type', $type)->paginate(15);
        return view('admin.library.criminal-procedure-codes.show', [
            'criminalProcedureCodes' => $criminalProcedureCodes
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
       return view('admin.library.criminal-procedure-codes.edit', [
            'criminalProcedureCodes' => CriminalProcedureCodes::find($id),
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CriminalProcedureCodesRequest $request
     * @param $id
     * @return Application|Redirector|RedirectResponse
     */
    public function update(CriminalProcedureCodesRequest $request, $id)
    {
        $criminal = CriminalProcedureCodes::find($id)->update([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
            'link' => $request->link,
//            'full_date' => $request->full_date,
//            'year' => $request->year,
            'syllabus_pdf_name_en' => $request->syllabus_pdf_name_en,
            'syllabus_pdf_name_am' => $request->syllabus_pdf_name_am,
            'syllabus_pdf_name_ru' => $request->syllabus_pdf_name_ru,
            'type' =>  $request->type
        ]);

        if(isset($request->syllabus_pdf)){
            Storage::delete($criminal->syllabus_pdf);
            $pdf = $request->file('syllabus_pdf')->store('distance-learning/courses');
            $criminal->update([
                'syllabus_pdf' => $pdf
            ]);
        }

        return redirect(route('admin.library.criminal-procedure-codes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        CriminalProcedureCodes::find($id)->delete();
        return redirect()->back();
    }

    public function recycleBin()
    {
        $criminalProcedureCodes = CriminalProcedureCodes::onlyTrashed()->orderBy('id', 'DESC')->paginate(10, ['*'], 'galleryVideos');

        return view('admin.library.criminal-procedure-codes.recycleBin', [
            'criminalProcedureCodes' => $criminalProcedureCodes,
        ]);
    }

    public function recycleBinRestore($id)
    {
        CriminalProcedureCodes::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }


    public function forceDelete($id)
    {
        $item = CriminalProcedureCodes::withTrashed()->findOrFail($id);
        $item->forceDelete();
        return redirect()->back();
    }
}
