<?php

namespace App\Http\Controllers;

use App\Models\Categoryporto;
use App\Models\Portofolio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{


    public function search(Request $request){
        $searchQuery = $request->input('query');

        $portofolio = Portofolio::where('judul', 'like', "%$searchQuery%")
            ->orWhere('desk', 'like', "%$searchQuery%")
            ->paginate(5);


        return view('backend.portofolio.portofolio', compact('portofolio'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $portofolio = Portofolio::all();
        return view('backend.portofolio.portofolio', compact('portofolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Categoryporto::all();
        return view('backend.portofolio.portofolioCreate', compact('categories'));
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
            'desk' => 'required', 
            'categoryporto_id' => 'required'
        ]);

        $img = $request->image;
        $imgname = time() . '_' . $img->getClientOriginalName();


        Portofolio::create([
            'image' => $imgname,
            'judul' => $request->judul,
            'desk' => $request->desk, 
            'slug' => Str::slug($request->judul, '-'), 
            'categoryporto_id' => $request->categoryporto_id
        ]);

        $img->move(public_path('/portofolioimg/'), $imgname);

        alert('data berhasil ditambahkan');


        return redirect()->route('portofolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data = Portofolio::where('slug', $slug)->first();
        return view('backend.portofolio.portofolioEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           
        $item = Portofolio::find($id);
        
        $request->validate([
            'judul' => 'required', 
            'desk' => 'required', 
            'categoryporto_id' => 'required'
            
        ]);
        if ($request->hasFile('image')) {
            $gambar = $request->file('image');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalName();
            $lokasi = public_path('portofolioimg/');
            $gambar->move($lokasi, $nama_gambar);
            
            // mengambil data terbaru dari tabel
            $data = Portofolio::where('id', $id)->first();
            $file_path = public_path('portofolioimg/' . $data->image);
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            $data->update([
                'image' => $nama_gambar,
                
            ]);
        } else {
            // mengambil data terbaru dari tabel
            $data = Portofolio::first();
            $data->update([
                'image' => $data->image,
            ]);
        }
        $item->update([
            'judul' => $request->judul, 
            'desk' => $request->desk, 
            'categoryporto_id' => $request->categoryporto_id
        ]);
        alert('Berhasil update data');
        return redirect()->route('portofolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Portofolio::find($id);
        $foto_path = public_path('portofolioimg/' . $data->image);
        if (file_exists($foto_path)) {
            unlink($foto_path);
        }

        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('portofolio.index');
    }
}
