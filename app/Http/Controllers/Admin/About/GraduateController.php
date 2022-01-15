<?php

namespace App\Http\Controllers\Admin\About;

use App\Models\Graduate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\About\GraduateRequest;

class GraduateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graduates = Graduate::paginate(10);

        return view('admin.about.graduate.index', [
            'graduates' => $graduates,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.graduate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GraduateRequest $request)
    {
        $request->validate([
            'img' => 'required',
        ]);
        $photo = $request->file('img')->store('about/graduates');

        Graduate::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'info_en' => $request->info_en,
            'info_am' => $request->info_am,
            'info_ru' => $request->info_ru,
            'position' => $request->position,
            'img' => $photo,
        ]);

        return redirect(route('admin.about.graduates.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function show(Graduate $graduate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function edit(Graduate $graduate)
    {
        return view('admin.about.graduate.edit', [
            'graduate' => $graduate,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function update(GraduateRequest $request, Graduate $graduate)
    {
        $photo = $request->imgHidden;

        if(!empty($request->img)){
            Storage::delete($photo);
            $photo = $request->file('img')->store('about/graduates');
        }

        $graduate->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'info_en' => $request->info_en,
            'info_am' => $request->info_am,
            'info_ru' => $request->info_ru,
            'position' => $request->position,
            'img' => $photo,
        ]);

        return redirect(route('admin.about.graduates.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Graduate $graduate)
    {
        $graduate->delete();
        Storage::delete($graduate->img);
        return redirect(route('admin.about.graduates.index'));
    }
}
