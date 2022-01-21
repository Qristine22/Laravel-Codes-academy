<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Models\NewsImg;
use Illuminate\Http\Request;

// Models
use App\Http\Requests\NewsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('id', 'DESC')->paginate(5);
        return view('admin.news.index', [
            'news' => $news,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $request->validate([
            'bg' => 'required',
        ]);

        $bg = $request->bg->store('news');
        $news = News::insertGetId([
            'title_en' => $request->title_en,
            'title_am' => $request->title_am,
            'title_ru' => $request->title_ru,
            'description_en' => $request->description_en,
            'description_am' => $request->description_am,
            'description_ru' => $request->description_ru,
            'bg' => $bg,
            'date' => $request->date,
        ]);


        if (!empty($request->imgs)) {
            foreach ($request->imgs as $img) {
                $imgPath = $img->store('news');
                NewsImg::insert([
                    'news_id' => $news,
                    'img' => $imgPath,
                ]);
            }
        }

        return redirect(route('admin.news.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', [
            'news' => $news,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, News $news)
    {
        $bg = $request->bgHidden;

        if(!empty($request->bg)){
            Storage::delete($bg);
            $bg = $request->file('bg')->store('news');
        }
        $news->update([
            'title_en' => $request->title_en,
            'title_am' => $request->title_am,
            'title_ru' => $request->title_ru,
            'description_en' => $request->description_en,
            'description_am' => $request->description_am,
            'description_ru' => $request->description_ru,
            'date' => $request->date,
            'bg' => $bg,
        ]);


        if (!empty($request->imgs)) {
            foreach ($request->imgs as $img) {
                $imgPath = $img->store('news');
                NewsImg::insert([
                    'news_id' => $news->id,
                    'img' => $imgPath,
                ]);
            }
        }
        return redirect(route('admin.news.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $imgItems = NewsImg::where('news_id', $news->id)->get();
        foreach ($imgItems as $item) {
            $item->delete();
            $img = $item->img;
            Storage::delete($img);
        }
        Storage::delete($news->bg);
        $news->delete();

        return redirect(route('admin.news.index'));
    }





    public function imgDelete($id){
        $img = NewsImg::findOrFail($id);
        Storage::delete($img->img);
        $img->forceDelete();
        return redirect()->back();
    }
}
