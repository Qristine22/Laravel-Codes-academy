<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GoverningBoardPage;
use Illuminate\Http\Request;

class GoverningBoardPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = GoverningBoardPage::get();
        return view('admin.governing-board-page.index', [
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GoverningBoardPage  $governingBoardPage
     * @return \Illuminate\Http\Response
     */
    public function show(GoverningBoardPage $governingBoardPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GoverningBoardPage  $governingBoardPage
     * @return \Illuminate\Http\Response
     */
    public function edit(GoverningBoardPage $governingBoardPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GoverningBoardPage  $governingBoardPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoverningBoardPage $governingBoardPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoverningBoardPage  $governingBoardPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoverningBoardPage $governingBoardPage)
    {
        //
    }
}
