<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Feature::first();
        return view('backend.feature.feature', compact('data'));
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
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        $item = Feature::first();
        if ($request->hasFile('image')) {
            $gambar = $request->file('image');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalName();
            $lokasi = public_path('featureimg/');
            $gambar->move($lokasi, $nama_gambar);
        
            // mengambil data terbaru dari tabel
            $data = Feature::first();
            $file_path = public_path('featureimg/' . $data->image);
            if (file_exists($file_path)) {
                File::delete($file_path);
            }
        
            $data->update([
                'image' => $nama_gambar,
            ]);
        } 
        $item->update([

            'svg1' => $request->svg1,
            'judul1' => $request->judul1,
            'desk1' => $request->desk1,

            'svg2' => $request->svg2,
            'judul2' => $request->judul2,
            'desk2' => $request->desk2,

            'svg3' => $request->svg3,
            'judul3' => $request->judul3,
            'desk3' => $request->desk3,

            'svg4' => $request->svg4,
            'judul4' => $request->judul4,
            'desk4' => $request->desk4,
        ]);

        $lokasi = public_path('featureimg/');
        File::deleteDirectory($lokasi);

        alert();
        return redirect()->route('feature.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        //
    }
}
