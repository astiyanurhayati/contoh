<?php

namespace App\Http\Controllers;

use App\Models\Formcontact;
use Illuminate\Http\Request;

class FormcontactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Formcontact::latest()->get();
        return view('backend.formContact.form', compact('data'));
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
        $request->validate([
            'name' => 'required', 
            'email' => 'required|email', 
            'message' => 'required', 
            'g-recaptcha-response' => 'required|captcha'
        ]);

        
        Formcontact::create([
            'name' => $request->name, 
            'email' => $request->email, 
            'message' => $request->message
        ]);
      
        return back()->with('message', 'Terimakasih, pesan telah terkirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formcontact  $formcontact
     * @return \Illuminate\Http\Response
     */
    public function show(Formcontact $formcontact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formcontact  $formcontact
     * @return \Illuminate\Http\Response
     */
    public function edit(Formcontact $formcontact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formcontact  $formcontact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formcontact $formcontact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formcontact  $formcontact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Formcontact::find($id);
      

        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('form.contact');
    }
}
