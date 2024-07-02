<?php

namespace App\Http\Controllers;

use App\Models\Mainmenu;
use Illuminate\Http\Request;

class MainmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mainMenu = Mainmenu::all();
        return view('backend.mainmenu.main_menu', compact('mainMenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.mainmenu.main_menu_create');
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
            'title' => 'required'
        ]); 

        Mainmenu::create([
            'name' => $request->name, 
            'title' => $request->title,  
            'show' => $request->show
        ]);

        alert('Berhasil Menambahkan data'); 
        return redirect()->route('main-menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mainmenu  $mainmenu
     * @return \Illuminate\Http\Response
     */
    public function show(Mainmenu $mainmenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mainmenu  $mainmenu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Mainmenu::find($id); 
        return view('backend.mainmenu.man_menu_edit', compact('menu'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mainmenu  $mainmenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $menu = Mainmenu::find($id); 
        
        $request->validate([
            'name' => 'required', 
            'title' => 'required'
        ]); 

        $menu->update([
            'name' => $request->name, 
            'title' => $request->title,  
            'show' => $request->show
        ]);

        alert();
        return redirect()->route('main-menu.index');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mainmenu  $mainmenu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Mainmenu::find($id);

        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('main-menu.index');
    }
}
