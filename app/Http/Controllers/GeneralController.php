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
        $request->validate([
            'logo1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'logo2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $data = General::first();

        // Handle logo1 upload and update
        if ($request->hasFile('logo1')) {
            $logo1 = $request->file('logo1');
            $logo1Path = $logo1->store('generalimg', 'public'); // Store in the public disk
            $data->logo1 = $logo1Path;
        }

        // Handle logo2 upload and update
        if ($request->hasFile('logo2')) {
            $logo2 = $request->file('logo2');
            $logo2Path = $logo2->store('generalimg', 'public'); // Store in the public disk
            $data->logo2 = $logo2Path;
        }

        // Update other fields
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
