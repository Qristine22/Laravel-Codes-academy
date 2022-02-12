<?php

namespace App\Http\Controllers\Admin\Library;

use Illuminate\Http\Request;
use App\Models\AcademyPublication;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AcademyPublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academyPublications = AcademyPublication::paginate(10);

        return view('admin.library.academy-publication.index', [
            'academyPublications' => $academyPublications,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.library.academy-publication.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pdf' => 'required',
            'img' => 'required',
        ]);

        $pdf = $request->file('pdf')->store('library/academy-publications');
        $img = $request->file('img')->store('library/academy-publications');

        AcademyPublication::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
            'img' => $img,
        ]);

        return redirect(route('admin.library.academy-publication.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AcademyPublication  $academyPublication
     * @return \Illuminate\Http\Response
     */
    public function show(AcademyPublication $academyPublication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AcademyPublication  $academyPublication
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademyPublication $academyPublication)
    {
        return view('admin.library.academy-publication.edit', [
            'academyPublication' => $academyPublication,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AcademyPublication  $academyPublication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcademyPublication $academyPublication)
    {
        $pdf = $request->pdfHidden;
        $img = $request->imgHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('library/academy-publications');
        }
        if(!empty($request->img)){
            Storage::delete($img);
            $img = $request->file('img')->store('library/academy-publications');
        }

        $academyPublication->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'year' => $img,
            'pdf' => $pdf
        ]);

        return redirect(route('admin.library.academy-publication.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AcademyPublication  $academyPublication
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademyPublication $academyPublication)
    {
        Storage::delete($academyPublication->pdf);
        Storage::delete($academyPublication->img);
        $academyPublication->delete();

        return redirect(route('admin.library.academy-publication.index'));
    }
}
