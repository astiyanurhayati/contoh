<?php

namespace App\Http\Controllers;

use App\Models\Slidder;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SlidderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Slidder::all();
        return view('backend.slidder.slidder', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slidder.slidderCreate');
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
            'image' => 'required',
            'judul' => 'required',
            'desk' => 'required'
        ]);

        $img = $request->image;
        $imgname = time() . '_' . $img->getClientOriginalName();


        Slidder::create([
            'image' => $imgname,
            'judul' => $request->judul,
            'desk' => $request->desk
        ]);

        $img->move(public_path('/slidderimg/'), $imgname);

        alert('data berhasil ditambahkan');


        return redirect()->route('slidder.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slidder  $slidder
     * @return \Illuminate\Http\Response
     */
    public function show(Slidder $slidder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slidder  $slidder
     * @return \Illuminate\Http\Response
     */
    public function edit(Slidder $slidder)
    {
        $data = Slidder::find($slidder->id);
        return view('backend.slidder.slidderEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slidder  $slidder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Slidder::find($id);
        
        $request->validate([
            'judul' => 'required', 
            'desk' => 'required'
            
        ]);
        if ($request->hasFile('image')) {
            $gambar = $request->file('image');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalName();
            $lokasi = public_path('slidderimg/');
            $gambar->move($lokasi, $nama_gambar);
            
            // mengambil data terbaru dari tabel
            $data = Slidder::where('id', $id)->first();
            $file_path = public_path('slidderimg/' . $data->image);
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            $data->update([
                'image' => $nama_gambar,
                
            ]);
        } else {
            // mengambil data terbaru dari tabel
            $data = Slidder::first();
            $data->update([
                'image' => $data->image,
            ]);
        }
        $item->update([
            'judul' => $request->judul, 
            'desk' => $request->desk
        ]);
        alert('Berhasil update data');
        return redirect()->route('slidder.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slidder  $slidder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Slidder::find($id);
        $foto_path = public_path('slidderimg/' . $data->image);
        if (file_exists($foto_path)) {
            unlink($foto_path);
        }

        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('slidder.index');
    }
}
