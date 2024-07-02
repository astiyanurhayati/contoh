<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Categoryblog;
use Illuminate\Http\Request;

class CategoryblogController extends Controller
{
    public function search(Request $request)
    {
        $searchQuery = $request->input('query');

        $data = Categoryblog::where('name', 'like', "%$searchQuery%")
            ->get();

        return view('backend.category-blog.cateblog', compact('data'));
    }
    public function index()
    {
        $data = Categoryblog::all();
        return view('backend.category-blog.cateblog', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category-blog.cateblogCreate');
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

        Categoryblog::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-')
        ]);


        alert('Berhasil tambah data');

        return redirect()->route('category-blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoryblog  $categoryblog
     * @return \Illuminate\Http\Response
     */
    public function show(Categoryblog $categoryblog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoryblog  $categoryblog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Categoryblog::find($id);
        return view('backend.category-blog.cateblogEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoryblog  $categoryblog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Categoryblog::find($id);
        $request->validate([
            'name' => 'required',

        ]);


        $data->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-')
        ]);

        alert('Data Berhasil di update');
        return redirect()->route('category-blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoryblog  $categoryblog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = Categoryblog::find($id);
        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('category-blog.index');
    }
}
