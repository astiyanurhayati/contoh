<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use App\Models\Categoryblog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function search(Request $request){
    
    $searchQuery = $request->input('query');
    $blogs = Blog::where('judul', 'like', "%$searchQuery%")
        ->orWhere('body', 'like', "%$searchQuery%")
        ->orWhere('judul', 'like', "%$searchQuery%")
        ->orWhere('label', 'like', "%$searchQuery%")
        ->paginate(5);
        return view('backend.blog.blog', compact('blogs'));
   }
    public function index()
    {

        $blogs = Blog::latest()->paginate(10);
        return view('backend.blog.blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Categoryblog::all();
        return view('backend.blog.blogCreate', compact('categories'));
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
            'judul' => 'required',
            'categoryblog_id' => 'required', 
            'excerpt' => 'required',
            'gambar' => 'required',
            'body' => 'required', 
            'label' => 'required', 
            'meta_key' => 'required'
        ]);

            $img = $request->gambar;
            $imgname = time() . '_' . $img->getClientOriginalName();


        Blog::create([
            'gambar' => $imgname,
            'judul' => $request->judul,
            'categoryblog_id' => $request->categoryblog_id, 
            'excerpt' => $request->excerpt,
            'body' => $request->body, 
            'label' => $request->label, 
            'meta_key' => $request->meta_key, 
            'slug' => Str::slug($request->judul, '-')
            
        ]);

        $img->move(public_path('/blogimg/'), $imgname);

        alert('data berhasil ditambahkan');


        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Blog::where('id', $id)->first();
        $categories = Categoryblog::all();
        return view('backend.blog.blogEdit', compact('data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Blog::find($id);
        
        $request->validate([
            'judul' => 'required',
            'categoryblog_id' => 'required', 
            'excerpt' => 'required',
            'body' => 'required', 
            'label' => 'required', 
            'meta_key' => 'required'
        ]);
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalName();
            $lokasi = public_path('blogimg/');
            $gambar->move($lokasi, $nama_gambar);
            
            // mengambil data terbaru dari tabel
            $data = Blog::where('id', $id)->first();
            $file_path = public_path('blogimg/' . $data->image);
            if (file_exists($file_path)){
                unlink($file_path);
            }

            $data->update([
                'gambar' => $nama_gambar,
                
            ]);
        } else {
            // mengambil data terbaru dari tabel
            $data = Blog::first();
            $data->update([
                'gambar' => $data->gambar,
            ]);
        }

        $item->update([
            'judul' => $request->judul,
            'categoryblog_id' => $request->categoryblog_id, 
            'excerpt' => $request->excerpt,
            'body' => $request->body, 
            'label' => $request->label, 
            'meta_key' => $request->meta_key, 
            'slug' => Str::slug($request->judul, '-')
        ]);
        alert('Berhasil update data');
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blog::find($id);
        $foto_path = public_path('blog/' . $data->gambar);
        if (file_exists($foto_path)) {
            unlink($foto_path);
        }

        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('blog.index');
    }
}
