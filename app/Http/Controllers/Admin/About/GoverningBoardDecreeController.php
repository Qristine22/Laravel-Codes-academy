<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\About\GoverningBoardDecreeRequest;
use Illuminate\Support\Facades\Storage;

// Models
use App\Models\GoverningBoardDecree;
use App\Models\GoverningBoardPage;

class GoverningBoardDecreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutPage = GoverningBoardPage::get();
        $decrees = GoverningBoardDecree::orderBy('id', 'DESC')->paginate(5);

        return view('admin.about.governing-board-page.index', [
            'aboutPage' => $aboutPage,
            'decrees' => $decrees,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.governing-board-decree.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoverningBoardDecreeRequest $request)
    {
        $pdf = $request->file('pdf')->store('about/governing-board-decrees');

        GoverningBoardDecree::insert([
            'pdf_name' => $request->file_name,
            'info_en' => $request->info_en,
            'info_am' => $request->info_am,
            'info_ru' => $request->info_ru,
            'year' => $request->year,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.about.governing-board-decree.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GoverningBoardDecree  $governingBoardDecree
     * @return \Illuminate\Http\Response
     */
    public function show(GoverningBoardDecree $governingBoardDecree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GoverningBoardDecree  $governingBoardDecree
     * @return \Illuminate\Http\Response
     */
    public function edit(GoverningBoardDecree $governingBoardDecree)
    {
        return view('admin.about.governing-board-decree.edit', [
            'governingBoardDecree' => $governingBoardDecree,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GoverningBoardDecree  $governingBoardDecree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoverningBoardDecree $governingBoardDecree)
    {
        $pdf = $request->pdfHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('about/governing-board-decrees');
        }

        $governingBoardDecree->update([
            'pdf_name' => $request->file_name,
            'info_en' => $request->info_en,
            'info_am' => $request->info_am,
            'info_ru' => $request->info_ru,
            'year' => $request->year,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.about.governing-board-decree.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoverningBoardDecree  $governingBoardDecree
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoverningBoardDecree $governingBoardDecree)
    {
        $governingBoardDecree->delete();
        Storage::delete($governingBoardDecree->pdf);
        return redirect(route('admin.about.governing-board-decree.index'));
    }
}
