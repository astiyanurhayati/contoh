<?php

namespace App\Http\Controllers;

use App\Models\Sliderecipe;
use Illuminate\Http\Request;

class SliderecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Sliderecipe::all();
        return view('backend.slide-recepi.sliderecepi', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slide-recepi.sliderecepiCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required',
            'desk' => 'required'
        ]);
        $img = $request->gambar;
        $imgname = time() . '_' . $img->getClientOriginalName();
        Sliderecipe::create([
            'gambar' => $imgname,
            'desk' => $request->desk
        ]);
        $img->move(public_path('/sliderecipe/'), $imgname);

        alert('data berhasil ditambahkan');


        return redirect()->route('slide-recipe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gelery  $gelery
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gelery  $gelery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = Sliderecipe::find($id);
        return view('backend.slide-recepi.sliderecepiEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gelery  $gelery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Sliderecipe::find($id);
        
        $request->validate([
            'desk' => 'required'
        ]);
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalName();
            $lokasi = public_path('sliderecipe/');
            $gambar->move($lokasi, $nama_gambar);
            
            // mengambil data terbaru dari tabel
            $data = Sliderecipe::where('id', $id)->first();
            $file_path = public_path('sliderecipe/' . $data->gambar);
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            $data->update([
                'gambar' => $nama_gambar,
                
            ]);
        } else {
            // mengambil data terbaru dari tabel
            $data = Sliderecipe::first();
            $data->update([
                'gambar' => $data->gambar,
            ]);
        }

        $item->update([
            'desk' => $request->desk
        ]);
        alert('Berhasil update data');
        return redirect()->route('slide-recipe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gelery  $gelery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Sliderecipe::find($id);
        $foto_path = public_path('sliderecipe/' . $data->gambar);
        if (file_exists($foto_path)) {
            unlink($foto_path);
        }
        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('slide-recipe.index');
    }
}
