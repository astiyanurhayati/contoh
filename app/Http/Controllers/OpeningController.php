<?php

namespace App\Http\Controllers;

use App\Models\Opening;
use Illuminate\Http\Request;

class OpeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $openings = Opening::all();
        return view('backend.opening.opening', compact('openings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.opening.openingCreate');
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
            'hari' => 'required',
            'jam' => 'required'
        ]);

        Opening::create([
            'hari' => $request->hari,
            'jam' => $request->jam
        ]);

        alert();
        return redirect()->route('opening.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Opening  $opening
     * @return \Illuminate\Http\Response
     */
    public function show(Opening $opening)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Opening  $opening
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Opening::find($id);
        return view('backend.opening.openingEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Opening  $opening
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Opening::find($id);
        $request->validate([
            'hari' => 'required',
            'jam' => 'required'
        ]);

        $item->update([
            'hari' => $request->hari,
            'jam' => $request->jam
        ]);
        alert();
        return redirect()->route('opening.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Opening  $opening
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Opening::find($id);


        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('opening.index');
    }
}
