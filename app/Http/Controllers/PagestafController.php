<?php

namespace App\Http\Controllers;

use App\Models\Pagestaf;
use Illuminate\Http\Request;

class PagestafController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Pagestaf::first();
        return view('backend.pagestaff.pagestaff', compact('data'));
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
     * @param  \App\Models\Pagestaf  $pagestaf
     * @return \Illuminate\Http\Response
     */
    public function show(Pagestaf $pagestaf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pagestaf  $pagestaf
     * @return \Illuminate\Http\Response
     */
    public function edit(Pagestaf $pagestaf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pagestaf  $pagestaf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pagestaf $pagestaf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pagestaf  $pagestaf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pagestaf $pagestaf)
    {
        //
    }
}
