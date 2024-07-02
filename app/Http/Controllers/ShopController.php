<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Categoryproduk;

class ShopController extends Controller
{
    public function search(Request $request)
    {
        $searchQuery = $request->input('query');

        $shops = Shop::where('produk_name', 'like', "%$searchQuery%")
            ->orWhere('information', 'like', "%$searchQuery%")
            ->orWhere('before_discount', 'like', "%$searchQuery%")
            ->orWhere('after_discount', 'like', "%$searchQuery%")
            ->orWhere('desc', 'like', "%$searchQuery%")
            ->orWhere('tag', 'like', "%$searchQuery%")
            ->paginate(5);


        return view('backend.shop.shop', compact('shops'));
    }
    public function index()
    {

        $shops = Shop::latest()->paginate(5);
        return view('backend.shop.shop', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categoryproduk::all();

        return view('backend.shop.shopCreate', compact('categories'));
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
            'produk_name' => 'required',
            'information' => 'required',
            'after_discount' => 'required',
            'desc' => 'required',
            'categoryproduk_id' => 'required',
            'tag' => 'required'
        ]);

        $img = $request->gambar;
        $imgname = time() . '_' . $img->getClientOriginalName();


        Shop::create([
            'gambar' => $imgname,
            'slug' => Str::slug($request->produk_name, '-'),
            'produk_name' => $request->produk_name,
            'information' => $request->information,
            'before_discount' => $request->before_discount,
            'after_discount' => $request->after_discount,
            'desc' => $request->desc,
            'categoryproduk_id' => $request->categoryproduk_id,
            'tag' => $request->tag

        ]);

        $img->move(public_path('/shopimg/'), $imgname);

        alert('data berhasil ditambahkan');


        return redirect()->route('shop.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categoryproduk::all();
        $data = Shop::findOrFail($id);
        return view('backend.shop.shopEdit', compact('data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Shop::find($id);

        $request->validate([
            'produk_name' => 'required',
            'information' => 'required',
            'after_discount' => 'required',
            'desc' => 'required',
            'categoryproduk_id' => 'required',
            'tag' => 'required'
        ]);


        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalName();
            $lokasi = public_path('shopimg/');
            $gambar->move($lokasi, $nama_gambar);

            // mengambil data terbaru dari tabel
            $data = Shop::where('id', $id)->first();
            $file_path = public_path('shopimg/' . $data->gambar);
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            $data->update([
                'gambar' => $nama_gambar,

            ]);
        } else {
            // mengambil data terbaru dari tabel
            $data = Shop::first();
            $data->update([
                'gambar' => $data->gambar,
            ]);
        }
        $item->update([
            'slug' => Str::slug($request->produk_name, '-'),
            'produk_name' => $request->produk_name,
            'information' => $request->information,
            'before_discount' => $request->before_discount,
            'after_discount' => $request->after_discount,
            'desc' => $request->desc,
            'categoryproduk_id' => $request->categoryproduk_id,
            'tag' => $request->tag
        ]);
        alert();
        return redirect()->route('shop.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Shop::find($id);
        $foto_path = public_path('shopimg/' . $data->gambar);
        if (file_exists($foto_path)) {
            unlink($foto_path);
        }
        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('shop.index');
    }
}
