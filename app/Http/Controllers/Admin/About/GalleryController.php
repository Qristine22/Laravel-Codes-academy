<?php

namespace App\Http\Controllers\Admin\About;

use App\Models\Gallery;
use App\Models\GalleryImgs;
use Illuminate\Http\Request;

// Models
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\About\GalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::gallery();
        return view('admin.about.gallery.index', [
            'galleries' => $galleries,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $gallery = Gallery::insertGetId([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
            'year' => $request->year,
            'full_date' => $request->full_date,
        ]);

        if (!empty($request->imgs)) {
            foreach ($request->imgs as $img) {
                $imgPath = $img->store('about/gallery/'.$request->year);
                GalleryImgs::insert([
                    'gallery_id' => $gallery,
                    'img' => $imgPath,
                ]);
            }
        }

        return redirect(route('admin.about.gallery.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.about.gallery.edit', [
            'gallery' => $gallery,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
        $gallery->update([
            'text_en' => $request->text_en,
            'text_am' => $request->text_am,
            'text_ru' => $request->text_ru,
            'full_date' => $request->full_date,
            'year' => $request->year,
        ]);


        if (!empty($request->imgs)) {
            foreach ($request->imgs as $img) {
                $imgPath = $img->store('about/gallery/'.$request->year);
                GalleryImgs::insert([
                    'gallery_id' => $gallery->id,
                    'img' => $imgPath,
                ]);
            }
        }
        return redirect(route('admin.about.gallery.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect(route('admin.about.gallery.index'));
    }






    

    

    
    // edit page deleting img
    public function imgDelete($id){
        $item = GalleryImgs::findOrFail($id);
        Storage::delete($item->img);
        $item->delete();
        return redirect()->back();
    }




    

    



    // recycle bin
    public function recycleBin()
    {
        $galleries = Gallery::onlyTrashed()->paginate(10);

        return view('admin.about.gallery.recycleBin', [
            'galleries' => $galleries,
        ]);
    }



    public function recycleBinRestore($id)
    {
        Gallery::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
    
    
    public function forceDelete($id)
    {
        $imgItems = GalleryImgs::where('gallery_id', $id)->get();
        foreach ($imgItems as $item) {
            $item->forceDelete();
            Storage::delete($item->img);
        }

        $item = Gallery::withTrashed()->findOrFail($id);
        $item->forceDelete();
        Storage::delete($item->img);
        return redirect()->back();
    }
}
