<?php

namespace App\Http\Controllers;

use App\Models\Iklan;
use Illuminate\Http\Request;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Iklan::latest()->get();
        return view('backend.iklan.iklan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.iklan.iklanCreate');
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
            'name' => 'required', 
            'link' => 'required'
        ]);
        $img = $request->gambar;
        $imgname = time() . '_' . $img->getClientOriginalName();
        Iklan::create([
            'gambar' => $imgname,
            'nama' => $request->name, 
            'link' => $request->link, 
            'show' => $request->show
        ]);
        $img->move(public_path('/iklanblogimg/'), $imgname);

        alert('data berhasil ditambahkan');


        return redirect()->route('iklan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function show(Iklan $iklan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data  = Iklan::find($id);
        return view('backend.iklan.iklanEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Iklan::find($id);
        $request->validate([
            'name' => 'required', 
            'link' => 'required'
        ]);
        
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalName();
            $lokasi = public_path('iklanblogimg/');
            $gambar->move($lokasi, $nama_gambar);
            
            // mengambil data terbaru dari tabel
            $data = Iklan::where('id', $id)->first();

            $file_path = public_path('iklanblogimg/' . $data->gambar);
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            $data->update([
                'gambar' => $nama_gambar,
                
            ]);
        } else {
            // mengambil data terbaru dari tabel
            $data = Iklan::first();
            $data->update([
                'gambar' => $data->gambar,
            ]);
        }

        $item->update([
            'nama' => $request->name, 
            'link' => $request->link, 
            'show' => $request->show
        ]);
        alert('Berhasil update data');
        return redirect()->route('iklan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Iklan::find($id);
        $foto_path = public_path('iklanblogimg/' . $data->gambar);
        if (file_exists($foto_path)) {
            unlink($foto_path);
        }

        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('iklan.index');
    }
}
