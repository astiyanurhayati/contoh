<?php

namespace App\Http\Controllers;

use App\Models\Special;
use Illuminate\Http\Request;

class SpecialController extends Controller
{


    public function search(Request $request){

        $searchQuery = $request->input('query');

        $special = Special::where('judul', 'like', "%$searchQuery%")
            ->orWhere('desk', 'like', "%$searchQuery%")
            ->paginate(5);


        return view('backend.special.special', compact('special'));

    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $special = Special::paginate(5);
    
        return view('backend.special.special', compact('special'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.special.specialCreate');
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


        Special::create([
            'image' => $imgname,
            'judul' => $request->judul,
            'desk' => $request->desk
        ]);

        $img->move(public_path('/specialimg/'), $imgname);

        alert('data berhasil ditambahkan');
        return redirect()->route('special.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function show(Special $special)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function edit(Special $special)
    {
        $data = Special::find($special->id);
        return view('backend.special.specialEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Special::find($id);
        
        $request->validate([
            'judul' => 'required', 
            'desk' => 'required'
            
        ]);
        if ($request->hasFile('image')) {
            $gambar = $request->file('image');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalName();
            $lokasi = public_path('specialimg/');
            $gambar->move($lokasi, $nama_gambar);
            
            // mengambil data terbaru dari tabel
            $data = Special::where('id', $id)->first();
            $file_path = public_path('specialimg/' . $data->image);
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            $data->update([
                'image' => $nama_gambar,
                
            ]);
        } else {
            // mengambil data terbaru dari tabel
            $data = Special::first();
            $data->update([
                'image' => $data->image,
            ]);
        }
        $item->update([
            'judul' => $request->judul, 
            'desk' => $request->desk
        ]);
        alert('Berhasil update data');
        return redirect()->route('special.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data = Special::find($id);
        $foto_path = public_path('specialimg/' . $data->image);
        if (file_exists($foto_path)) {
            unlink($foto_path);
        }

        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('special.index');
    }
}
