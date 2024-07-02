<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function search(Request $request){
        $searchQuery = $request->input('query');

        $testimonials = Testimonial::where('judul', 'like', "%$searchQuery%")
            ->orWhere('desk', 'like', "%$searchQuery%")            
            ->paginate(5);


        return view('backend.testimonial.testimonial', compact('testimonials'));
    }
    public function index()
    {

        $testimonials = Testimonial::paginate(5);
        return view('backend.testimonial.testimonial', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonial.testimonialCreate');
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
            'image' => 'required',
            'judul' => 'required',
            'desk' => 'required'
        ]);

        $img = $request->image;
        $imgname = time() . '_' . $img->getClientOriginalName();


        Testimonial::create([
            'image' => $imgname,
            'judul' => $request->judul,
            'desk' => $request->desk
        ]);

        $img->move(public_path('/testimonialimg/'), $imgname);

        alert('data berhasil ditambahkan');


        return redirect()->route('testimonial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Testimonial::find($id); 

        return view('backend.testimonial.testimonialEdit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            
        $item = Testimonial::find($id);
        
        $request->validate([
            'judul' => 'required', 
            'desk' => 'required'
            
        ]);
        if ($request->hasFile('image')) {
            $gambar = $request->file('image');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalName();
            $lokasi = public_path('testimonialimg/');
            $gambar->move($lokasi, $nama_gambar);
            
            // mengambil data terbaru dari tabel
            $data = Testimonial::where('id', $id)->first();
            $file_path = public_path('testimonialimg/' . $data->image);
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            $data->update([
                'image' => $nama_gambar,
                
            ]);
        } else {
            // mengambil data terbaru dari tabel
            $data = Testimonial::first();
            $data->update([
                'image' => $data->image,
            ]);
        }
        $item->update([
            'judul' => $request->judul, 
            'desk' => $request->desk
        ]);
        alert('Berhasil update data');
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Testimonial::find($id);
        $foto_path = public_path('testimonialimg/' . $data->image);
        if (file_exists($foto_path)) {
            unlink($foto_path);
        }

        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('slidder.index');
    }
}
