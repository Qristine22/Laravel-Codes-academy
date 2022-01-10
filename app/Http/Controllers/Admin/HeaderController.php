<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HeaderRequest;
use Illuminate\Http\Request;

// Models
use App\Models\Header;
use App\Models\Subheader;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Header::orderBy('id', 'DESC')->paginate(5, ['*'], 'headers');
        $subheaders = Subheader::orderBy('id', 'DESC')->paginate(5, ['*'], 'subheaders');
        return view('admin.header.index', [
            'data' => $data,
            'subheaders' => $subheaders,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $headers = Header::all();
        return view('admin.header.create', [
            'headers' => $headers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HeaderRequest $request)
    {
        Header::insert([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'link' => $request->link,
        ]);

        return redirect(route('admin.header.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        $headers = Header::all();
        return view('admin.header.edit', [
            'header' => $header,
            'headers' => $headers,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
    {
        $header->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'link' => $request->link,
        ]);
        return redirect(route('admin.header.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        $header->delete();
        return redirect(route('admin.header.index'));
    }
}
