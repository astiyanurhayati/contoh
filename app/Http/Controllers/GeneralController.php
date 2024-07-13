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
    public function update(Request $request)
    {
        $data = General::first();
        
        if ($request->hasFile('logo1')) {
            $logo1 = $request->file('logo1');
            $logo1Name = time() . '_logo1.' . $logo1->getClientOriginalExtension();
            $logo1->move(public_path('uploads'), $logo1Name);
            $data->logo1 = 'uploads/' . $logo1Name;
        }
        if ($request->hasFile('logo2')) {
            $logo2 = $request->file('logo2');
            $logo2Name = time() . '_logo2.' . $logo2->getClientOriginalExtension();
            $logo2->move(public_path('uploads'), $logo2Name);
            $data->logo2 = 'uploads/' . $logo2Name;
        }
        $data->update([
            'fb' => $request->fb,
            'ig' => $request->ig,
            'address' => $request->address,
            'phone1' => $request->phone1,
            'wa' => $request->wa,
            'email' => $request->email,
            'footer' => $request->footer,
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
