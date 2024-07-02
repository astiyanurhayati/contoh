<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Categoryrecipe;

class CategoryrecipeController extends Controller
{
    public function search(Request $request)
    {
        $searchQuery = $request->input('query');
        $data = Categoryrecipe::where('name', 'like', "%$searchQuery%")
            ->get();
        return view('backend.category-recipe.carecipe', compact('data'));
    }
    public function index()
    {

        $data = Categoryrecipe::all();
        return view('backend.category-recipe.carecipe', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category-recipe.carecipeCreate');
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

        Categoryrecipe::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-')
        ]);


        alert('Berhasil tambah data');

        return redirect()->route('category-recipe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoryrecipe  $categoryrecipe
     * @return \Illuminate\Http\Response
     */
    public function show(Categoryrecipe $categoryrecipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoryrecipe  $categoryrecipe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Categoryrecipe::find($id);
        return view('backend.category-recipe.carecipeEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoryrecipe  $categoryrecipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = Categoryrecipe::find($id);
        $request->validate([
            'name' => 'required',

        ]);


        $data->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-')
        ]);

        alert('Data Berhasil di update');
        return redirect()->route('category-recipe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoryrecipe  $categoryrecipe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Categoryrecipe::find($id);
        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('category-recipe.index');
    }
}
