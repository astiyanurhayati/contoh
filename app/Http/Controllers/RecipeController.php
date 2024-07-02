<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Categoryrecipe;

class RecipeController extends Controller
{
    public function search(Request $request){

        $searchQuery = $request->input('query');
        // return $searchQuery;
        $recepies = Recipe::where('judul', 'like', "%$searchQuery%")
            ->orWhere('prep_time', 'like', "%$searchQuery%")
            ->orWhere('desk', 'like', "%$searchQuery%")
            ->orWhere('cook_time', 'like', "%$searchQuery%")
            ->orWhere('kesulitan', 'like', "%$searchQuery%")
            ->orWhere('resep', 'like', "%$searchQuery%")
            ->paginate(5);


        return view('backend.recipes.recipe', compact('recepies'));

    }
    public function index()
    {

        $recepies = Recipe::latest()->paginate(5);
        return view('backend.recipes.recipe', compact('recepies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Categoryrecipe::all();
        return view('backend.recipes.recipeCreate', compact('categories'));
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
            'prep_time' => 'required', 
            'cook_time' => 'required', 
            'kategori_resep_id' => 'required', 
            'kesulitan' => 'required', 
            'desk' => 'required',
            'gambar' => 'required', 
            'resep' => 'required', 
        ]); 


        $img = $request->gambar;
        $imgname = time() . '_' . $img->getClientOriginalName();


        Recipe::create([
            'gambar' => $imgname,
            'judul' => $request->judul, 
            'prep_time' => $request->prep_time, 
            'cook_time' => $request->cook_time, 
            'kategori_resep_id' => $request->kategori_resep_id, 
            'kesulitan' => $request->kesulitan, 
            'desk' => $request->desk,
            'resep' => $request->resep, 
            'slug' => Str::slug($request->judul, '-')
            
        ]);

        $img->move(public_path('/recipeimg  /'), $imgname);

        alert('data berhasil ditambahkan');


        return redirect()->route('recipe.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Recipe::find($id);


        $categories = Categoryrecipe::all();
        return view('backend.recipes.recipeEdit', compact('data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $item = Recipe::find($id);
        
        $request->validate([
            'judul' => 'required', 
            'prep_time' => 'required', 
            'cook_time' => 'required', 
            'kategori_resep_id' => 'required', 
            'kesulitan' => 'required', 
            'desk' => 'required',
            'resep' => 'required', 
            
        ]);
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalName();
            $lokasi = public_path('recipeimg/');
            $gambar->move($lokasi, $nama_gambar);
            
            // mengambil data terbaru dari tabel
            $data = Recipe::where('id', $id)->first();
            $file_path = public_path('recipeimg/' . $data->gambar);
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            $data->update([
                'gambar' => $nama_gambar,
                
            ]);
        } else {
            // mengambil data terbaru dari tabel
            $data = Recipe::first();
            $data->update([
                'gambar' => $data->gambar,
            ]);
        }
        $item->update([
            'judul' => $request->judul,
            'prep_time' => $request->prep_time, 
            'cook_time' => $request->cook_time, 
            'kategori_resep_id' => $request->kategori_resep_id, 
            'kesulitan' => $request->kesulitan, 
            'desk' => $request->desk,
            'resep' => $request->resep, 
        ]);
        alert('Berhasil update data');
        return redirect()->route('recipe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Recipe::find($id);
        $foto_path = public_path('recipeimg/' . $data->gambar);
        if (file_exists($foto_path)) {
            unlink($foto_path);
        }

        $data->delete();
        alert('Berhasil hapus data');
        return redirect()->route('recipe.index');
    }
}
