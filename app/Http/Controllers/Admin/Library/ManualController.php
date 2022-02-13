<?php

namespace App\Http\Controllers\Admin\Library;

use App\Models\Library;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ManualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manuals = Library::where('category', 'manual')->paginate(10);

        return view('admin.library.manual.index', [
            'title' => 'Ուսումնական ձեռնարկներ',
            'books' => $manuals,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.library.manual.create', [
            'title' => 'Ուսումնական ձեռնարկներ',
        ]);
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
        ]);

        $pdf = $request->file('pdf')->store('library/manuals');
        $img = null;
        if(!empty($request->img)){
            $img = $request->file('img')->store('library/manuals');
        }

        Library::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'pdf' => $pdf,
            'img' => $img,
            'category' => 'manual',
        ]);

        return redirect(route('admin.library.manual.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library  $manual
     * @return \Illuminate\Http\Response
     */
    public function show(Library $manual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library  $manual
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $manual)
    {
        return view('admin.library.manual.edit', [
            'title' => 'Ուսումնական ձեռնարկներ',
            'library' => $manual,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library  $manual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Library $manual)
    {
        $pdf = $request->pdfHidden;
        $img = $request->imgHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('library/manuals');
        }
        if(!empty($request->img)){
            Storage::delete($img);
            $img = $request->file('img')->store('library/manuals');
        }

        $manual->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'img' => $img,
            'pdf' => $pdf
        ]);

        return redirect(route('admin.library.manual.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library  $manual
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $manual)
    {
        Storage::delete($manual->pdf);
        Storage::delete($manual->img);
        $manual->delete();

        return redirect(route('admin.library.manual.index'));
    }
}
