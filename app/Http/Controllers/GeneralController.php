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
    
    // if ($request->hasFile('logo1')) {
    //     $logo1 = $request->file('logo1');
    //     $logo1Path = $logo1->store('generalimg/');
    //     $data->logo1 = $logo1Path;
    // }

    // if ($request->hasFile('logo2')) {
    //     $logo2 = $request->file('logo2');
    //     $logo2Path = $logo2->store('generalimg/');
    //     $data->logo2 = $logo2Path;
    // }

    $data->update([
        'fb' => $request->fb, 
        'ig' => $request->ig, 
        'address' => $request->address, 
        'phone1' => $request->phone1, 
        'wa' => $request->wa, 
        'email' => $request->email, 
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
