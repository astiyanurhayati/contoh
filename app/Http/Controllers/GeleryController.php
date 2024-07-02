<?php

namespace App\Http\Controllers;

use App\Models\Gelery;
use Illuminate\Http\Request;

class GeleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Gelery::all();
        return view('backend.galeri.galeri', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.galeri.galeriCreate');
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
        Gelery::create([
            'gambar' => $imgname,
            'desk' => $request->desk
        ]);
        $img->move(public_path('/galeryimg/'), $imgname);

        alert('data berhasil ditambahkan');


        return redirect()->route('galery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gelery  $gelery
     * @return \Illuminate\Http\Response
     */
    public function show(Gelery $gelery)
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
        
        $data = Gelery::find($id);
        return view('backend.galeri.galeriEdit', compact('data'));
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

        dd($request->all());
       
        $item = Gelery::find($id);
        $request->validate([
            'desk' => 'required', 
        ]);
        
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalName();
            $lokasi = public_path('galeryimg/');
            $gambar->move($lokasi, $nama_gambar);
            
            // mengambil data terbaru dari tabel
            $data = Gelery::where('id', $id)->first();

            $file_path = public_path('galeryimg/' . $data->gambar);
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            $data->update([
                'gambar' => $nama_gambar,
                
            ]);
        } else {
            // mengambil data terbaru dari tabel
            $data = Gelery::first();
            $data->update([
                'gambar' => $data->gambar,
            ]);
        }

        $item->update([
            'desk' => $request->desk, 
        ]);
        alert('Berhasil update data');
        return redirect()->route('general.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gelery  $gelery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Gelery::find($id);
        $foto_path = public_path('galeryimg/' . $data->gambar);
        if (file_exists($foto_path)) {
            unlink($foto_path);
        }

        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('galery.index');
    }
}
