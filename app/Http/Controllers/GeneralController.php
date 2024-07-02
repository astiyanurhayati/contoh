<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = General::first();
        return view('backend.general.general', compact('data'));
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
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function show(General $general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function edit(General $general)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = General::first();
        // $request->validate([
        //     'map' => 'required', 
        //     'address' => 'required', 
        //     'wa' => 'required', 
        //     'email1' => 'required', 
        //     'footer' => 'required', 
        // ]);

    if ($request->hasFile('logo1')) {
        $logo1 = $request->file('logo1');
        $logo1Path = $logo1->store('generalimg/');
        $data->logo1 = $logo1Path;
    }

    if ($request->hasFile('logo2')) {
        $logo1 = $request->file('logo1');
        $logo1Path = $logo1->store('generalimg/');
        $data->logo1 = $logo1Path;
    }
    if ($request->hasFile('logo3')) {
        $logo1 = $request->file('logo1');
        $logo1Path = $logo1->store('generalimg/');
        $data->logo1 = $logo1Path;
    }

    if ($request->hasFile('breadcrumb')) {
        $logo1 = $request->file('logo1');
        $logo1Path = $logo1->store('generalimg/');
        $data->logo1 = $logo1Path;
    }

    $data->update([
      
        'fb' => $request->fb, 
        'tw' => $request->tw, 
        'ig' => $request->ig, 
        'yt' => $request->yt, 
        'map' =>$request->map, 
        'address' => $request->address, 
        'phone1' => $request->phone1, 
        'phone2' => $request->phone2, 
        'wa' => $request->wa, 
        'email1' => $request->email1, 
        'email2' => $request->email2, 
        'footer' =>$request->footer, 
        'linkfooter' => $request->linkfooter, 
        'keywords' => $request->keywords, 
        'author' => $request->author, 
        'title' => $request->title,
        'website' => $request->website
    ]);

    alert();
    return redirect()->route('general.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function destroy(General $general)
    {
        //
    }
}
