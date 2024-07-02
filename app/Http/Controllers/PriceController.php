<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function search(Request $request){

        $searchQuery = $request->input('query');

        $price = Price::where('nama', 'like', "%$searchQuery%")
            ->orWhere('price', 'like', "%$searchQuery%")
            ->orWhere('desc', 'like', "%$searchQuery%")
            ->orWhere('portion', 'like', "%$searchQuery%")
            ->orWhere('information', 'like', "%$searchQuery%")
            
            ->paginate(5);


        return view('backend.price.price', compact('price'));

    }
    public function index()
    {
        $price = Price::paginate(5);
        return view('backend.price.price', compact('price'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.price.priceCreate');
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
            'price' => 'required',
            'portion' => 'required',
            'desc' => 'required',
            'information' => 'required'

        ]);
        $img = $request->gambar;
        $imgname = time() . '_' . $img->getClientOriginalName();

        $deskValues = $request->input('desc');
        Price::create([
            'gambar' => $imgname,
            'nama' => $request->nama,
            'price' => $request->price,
            'portion' => $request->portion,
            'desc' => json_encode($deskValues),
            'information' => $request->information
        ]);

        $img->move(public_path('/priceimg/'), $imgname);
        alert('berhasil tambah data');
        return redirect()->route('price.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Price::find($id);
        return view('backend.price.priceEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'nama' => 'required',
            'price' => 'required',
            'portion' => 'required',
            'desc' => 'required',
            'information' => 'required'

        ]);

        $item = Price::findOrFail($id);
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalName();
            $lokasi = public_path('priceimg/');
            $gambar->move($lokasi, $nama_gambar);

            if ($item->gambar) {
                unlink(public_path('priceimg/' . $item->gambar));
            }

            $item->update([
                'gambar' => $nama_gambar
            ]);
        } else {

            $item->update([
                'gambar' => $item->gambar
            ]);
        }

        $item->update([
            'nama' => $request->nama,
            'price' => $request->price,
            'portion' => $request->portion,
            'desc' => json_encode($request->desc),
            'information' => $request->information
        ]);

        alert('success');

        return redirect()->route('price.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Price::find($id);
        $foto_path = public_path('price/' . $data->gambar);
        if (file_exists($foto_path)) {
            unlink($foto_path);
        }

        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('price.index');
    }
}
