<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Template::first();
        return view('backend.template.template', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $request->validate([
        //     'icon_slidder' => 'required',
        //     'icon_special' => 'required',
        //     'icon_banner' => 'required',
        //     'bg_special' => 'required',
        //     'bg_banner' => 'required',
        //     'bg_feature' => 'required',
        //     'bg_recipe' => 'required',
        //     'bg_footer' => 'required',
        //     'judul_special' => 'required',
        //     'judul_banner' => 'required',
        //     'judul_portofolio' => 'required',
        //     'judul_testimonial' => 'required',
        //     'judul_price' => 'required',
        //     'judul_footer1' => 'required',
        //     'judul_footer2' => 'required',
        //     'btn_feature' => 'required',
        //     'btn_banner' => 'required',
        //     'btn_price' => 'required',
        // ]); 

        $item = Template::first(); 
        $item->update([
            'judul_special' => $request->judul_special,
            'judul_banner' => $request->judul_banner,
            'judul_portofolio' => $request->judul_portofolio,
            'judul_testimonial' => $request->judul_testimonial,
            'judul_price' => $request->judul_price,
            'judul_footer1' => $request->judul_footer1,
            'judul_footer2' => $request->judul_footer2,
            'btn_feature' => $request->btn_feature,
            'btn_banner' => $request->btn_banner,
            'btn_price' => $request->btn_price,
        ]);

        $imageFields = [
            'icon_slidder',
            'icon_special',
            'icon_banner',
            'bg_special',
            'bg_banner',
            'bg_feature',
            'bg_recipe',
            'bg_footer',
        ];
        
        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $image = $request->file($field);
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('public/images', $imageName);
        
                $item->{$field} = $imageName;
                $item->save();
            }
        }

        alert('berhasil update data');
        return redirect()->route('template.index');       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template)
    {
        //
    }
}
