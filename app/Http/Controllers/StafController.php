<?php

namespace App\Http\Controllers;

use App\Models\Staf;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class StafController extends Controller
{
    
    public function search(Request $request){
        $searchQuery = $request->input('query');

        $stafs = Staf::where('nama', 'like', "%$searchQuery%")
            ->orWhere('jabatan', 'like', "%$searchQuery%")
            ->orWhere('desk', 'like', "%$searchQuery%")
            ->orWhere('ig', 'like', "%$searchQuery%")
            ->orWhere('tw', 'like', "%$searchQuery%")
            ->orWhere('fb', 'like', "%$searchQuery%")
            ->paginate(8);


        return view('backend.staf.staf', compact('stafs'));
    }
    public function index()
    {

        $stafs = Staf::paginate(8);
        return view('backend.staf.staf', compact('stafs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.staf.stafCreate');
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
            'nama' => 'required',
            'jabatan' => 'required', 
            'desk' => 'required'
        ]);
        $img = $request->gambar;
        $imgname = time() . '_' . $img->getClientOriginalName();


        Staf::create([
            'gambar' => $imgname,
            'ig' => $request->ig, 
            'tw' => $request->tw, 
            'fb' => $request->fb, 
            'nama' => $request->nama, 
            'jabatan' => $request->jabatan, 
            'desk' => $request->desk,
            'slug' => Str::slug($request->nama, '-')

        ]);

        $img->move(public_path('/staffimg/'), $imgname);

        alert('data berhasil ditambahkan');


        return redirect()->route('staff.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staf  $staf
     * @return \Illuminate\Http\Response
     */
    public function show(Staf $staf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staf  $staf
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Staf::find($id);
        return view('backend.staf.stafUpdate', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staf  $staf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $item = Staf::find($id);
        
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required', 
            'desk' => 'required'
            
        ]);
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalName();
            $lokasi = public_path('staffimg/');
            $gambar->move($lokasi, $nama_gambar);
            
            // mengambil data terbaru dari tabel
            $data = Staf::where('id', $id)->first();
            $file_path = public_path('staffimg/' . $data->gambar);
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            $data->update([
                'gambar' => $nama_gambar,
                
            ]);
        } else {
            // mengambil data terbaru dari tabel
            $data = Staf::first();
            $data->update([
                'gambar' => $data->gambar,
            ]);
        }
        $item->update([
            'ig' => $request->ig, 
            'tw' => $request->tw, 
            'fb' => $request->fb, 
            'nama' => $request->nama, 
            'jabatan' => $request->jabatan, 
            'desk' => $request->desk, 
            'slug' => Str::slug($request->nama, '-')
        ]);
        alert('Berhasil update data');
        return redirect()->route('staff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staf  $staf
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Staf::find($id);
        $foto_path = public_path('staffimg/' . $data->gambar);
        if (file_exists($foto_path)) {
            unlink($foto_path);
        }

        $data->delete();
        alert();
        return redirect()->route('staff.index');
    }
}
