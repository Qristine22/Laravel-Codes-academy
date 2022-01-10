<?php

namespace App\Http\Controllers\Admin\About;

use Illuminate\Http\Request;
use App\Models\RectorsDecree;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\About\RectorsDecreeRequest;

class RectorsDecreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.rectors-decree.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RectorsDecreeRequest $request)
    {
        $pdf = $request->file('pdf')->store('about/rectors-decrees');

        RectorsDecree::insert([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
            'pdf_name' => $request->pdf_name,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.about.rectors-page.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RectorsDecree  $rectorsDecree
     * @return \Illuminate\Http\Response
     */
    public function show(RectorsDecree $rectorsDecree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RectorsDecree  $rectorsDecree
     * @return \Illuminate\Http\Response
     */
    public function edit(RectorsDecree $rectorsDecree)
    {
        return view('admin.about.rectors-decree.edit', [
            'rectorsDecree' => $rectorsDecree,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RectorsDecree  $rectorsDecree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RectorsDecree $rectorsDecree)
    {
        $pdf = $request->pdfHidden;

        if(!empty($request->pdf)){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('about/rectors-decrees');
        }

        $rectorsDecree->update([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
            'pdf_name' => $request->pdf_name,
            'pdf' => $pdf,
        ]);

        return redirect(route('admin.about.rectors-page.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RectorsDecree  $rectorsDecree
     * @return \Illuminate\Http\Response
     */
    public function destroy(RectorsDecree $rectorsDecree)
    {
        Storage::delete($rectorsDecree->pdf);
        $rectorsDecree->delete();

        return redirect(route('admin.about.rectors-page.index'));
    }
}