<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Categoryproduk;

class CategoryprodukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Categoryproduk::all();
        return view('backend.category-produk.cateproduk', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Categoryproduk::all();
        return view('backend.category-produk.cateprodukCreate', compact('categories'));
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
            'name' => 'required', 
            
        ]);
        
        Categoryproduk::create([
            'name' => $request->name, 
            'slug' => Str::slug($request->name, '-')
        ]); 


        alert('Berhasil tambah data');

        return redirect()->route('category-produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoryproduk  $categoryproduk
     * @return \Illuminate\Http\Response
     */
    public function show(Categoryproduk $categoryproduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoryproduk  $categoryproduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Categoryproduk::find($id); 
        return view('backend.category-produk.cateprodukEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoryproduk  $categoryproduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $data = Categoryproduk::find($id);
        $request->validate([
            'name' => 'required',

        ]);


        $data->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-')
        ]);

        alert('Data Berhasil di update');
        return redirect()->route('category-produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoryproduk  $categoryproduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Categoryproduk::find($id);


        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('category-produk.index');
    }
}
