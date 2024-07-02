<?php

namespace App\Http\Controllers;

use App\Models\Mainmenu;
use App\Models\Submenu;
use Illuminate\Http\Request;

class SubmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $submenu = Submenu::all();
        return view('backend.submenu.submenu', compact('submenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Mainmenu::all();
        return view('backend.submenu.submenuCreate', compact('categories'));
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
            'mainmenu_id' => 'required',
            'name' => 'required',
            'title' => 'required',
            'url' => 'required|unique:submenus,url',


        ]);

        Submenu::create([
            'mainmenu_id' => $request->mainmenu_id,
            'name' => $request->name,
            'title' => $request->title,
            'show' => $request->show,
            'url' => $request->url
        ]);

        alert('Berhasil Menambahkan data');
        return redirect()->route('sub-menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function show(Submenu $submenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Mainmenu::all();
        $menu = Submenu::find($id);
        return view('backend.submenu.submenuEdit', compact('menu', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Submenu::find($id);
        $request->validate([
            'mainmenu_id' => 'required',
            'name' => 'required',
            'title' => 'required',
            'url' => 'required',
        ]);

        $data->update([
            'mainmenu_id' => $request->mainmenu_id,
            'name' => $request->name,
            'title' => $request->title,
            'show' => $request->show,
            'url' => $request->url
        ]);

        alert();
        return redirect()->route('sub-menu.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Submenu::find($id);

        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('sub-menu.index');
    }
}
