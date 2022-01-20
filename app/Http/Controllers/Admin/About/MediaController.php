<?php

namespace App\Http\Controllers\Admin\About;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Models\MassMediaLink;
use App\Http\Controllers\Controller;
use App\Http\Requests\About\MassMediaRequest;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $massMedias = Media::get();
        return view('admin.about.mass-media.index', [
            'massMedias' => $massMedias,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.mass-media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MassMediaRequest $request)
    {
        $massMedia = Media::insertGetId([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
            'year' => $request->year,
        ]);

        if (!empty($request->siteNames) && !empty($request->linkNames) && !empty($request->links)) {
            foreach ($request->siteNames as $index => $siteName) {
                MassMediaLink::insert([
                    'mass_media_id' => $massMedia,
                    'site_name' => $siteName,
                    'link_name' => $request->linkNames[$index],
                    'link' => $request->links[$index],
                ]);
            }
        }

        return redirect(route('admin.about.mass-media.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        dd($media);
        return view('admin.about.mass-media.edit', [
            'massMedia' => $media,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        //
    }
}
