<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Categoryporto;

class CategoryportoController extends Controller
{
    public function search(Request $request)
    {
        $searchQuery = $request->input('query');

        $data = Categoryporto::where('name', 'like', "%$searchQuery%")
            ->get();

        return view('backend.category-porto.caporto', compact('data'));
    }
    public function index()
    {


        $data = Categoryporto::all(); 
        return view('backend.category-porto.caporto', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category-porto.caportoCreate');
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
        
        Categoryporto::create([
            'name' => $request->name, 
            'slug' => Str::slug($request->name, '-')
        ]); 


        alert('Berhasil tambah data');

        return redirect()->route('category-porto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoryporto  $categoryporto
     * @return \Illuminate\Http\Response
     */
    public function show(Categoryporto $categoryporto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoryporto  $categoryporto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Categoryporto::find($id); 
        return view('backend.category-porto.caportoEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoryporto  $categoryporto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Categoryporto::find($id);
        $request->validate([
             'name' => 'required', 
             
         ]);
 
 
         $data->update([
             'name' => $request->name, 
             'slug' => Str::slug($request->name, '-')
         ]); 
 
         alert('Data Berhasil di update'); 
         return redirect()->route('category-porto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoryporto  $categoryporto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data = Categoryporto::find($id);
     

        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('category-recipe.index');
    }
}
