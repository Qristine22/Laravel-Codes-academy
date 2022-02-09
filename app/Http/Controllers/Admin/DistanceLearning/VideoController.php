<?php

namespace App\Http\Controllers\Admin\DistanceLearning;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NameRequest;
use App\Models\DistanceLearningVideo;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distanceLearningVideo = DistanceLearningVideo::paginate(10);

        return view('admin.distance-learning.video.index', [
            'distanceLearningVideo' => $distanceLearningVideo,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.distance-learning.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NameRequest $request)
    {
        $request->validate([
            'video' => 'required',
        ]);

        DistanceLearningVideo::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'video' => $request->video,
        ]);

        return redirect(route('admin.distance-learning.video.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DistanceLearningVideo  $video
     * @return \Illuminate\Http\Response
     */
    public function show(DistanceLearningVideo $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DistanceLearningVideo  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(DistanceLearningVideo $video)
    {
        return view('admin.distance-learning.video.edit', [
            'distanceLearningVideo' => $video,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DistanceLearningVideo  $video
     * @return \Illuminate\Http\Response
     */
    public function update(NameRequest $request, DistanceLearningVideo $video)
    {
        $request->validate([
            'video' => 'required',
        ]);
        
        $video->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'video' => $request->video,
        ]);

        return redirect(route('admin.distance-learning.video.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DistanceLearningVideo  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(DistanceLearningVideo $video)
    {
        $video->delete();
        return redirect(route('admin.distance-learning.video.index'));
    }
}
