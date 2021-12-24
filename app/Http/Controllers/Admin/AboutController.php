<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = About::get();
        return view('admin.about.page.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'about_en' => 'required',
            'about_am' => 'required',
            'about_ru' => 'required',
        ]);
        About::insert([
            'about_en' => $data['about_en'],
            'about_am' => $data['about_am'],
            'about_ru' => $data['about_ru'],
        ]);
        return redirect(route('admin.about.page.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $page)
    {
        return view('admin.about.page.edit', [
            'about' => $page
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $page)
    {
        $data = $request->validate([
            'about_en' => 'required',
            'about_am' => 'required',
            'about_ru' => 'required',
        ]);
        $page->update([
            'about_en' => $data['about_en'],
            'about_am' => $data['about_am'],
            'about_ru' => $data['about_ru'],
        ]);
        return redirect(route('admin.about.page.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $page)
    {
        $page->delete();
        return redirect(route('admin.about.page.index'));
    }
}
