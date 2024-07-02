<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Request $request, $recipeId)
    {
        // Mendapatkan ID resep dari cookies
        $likedRecipes = $request->cookie('liked_recipes', []);
        $likedRecipes = is_array($likedRecipes) ? $likedRecipes : [];

        // Menambahkan ID resep ke cookies jika belum ada
        if (!in_array($recipeId, $likedRecipes)) {
            $likedRecipes[] = $recipeId;
            $minutes = 60 * 24 * 30; // Misalnya, simpan selama 30 hari
            return response('Liked')->cookie('liked_recipes', $likedRecipes, $minutes);
        }

        return response('Error: Recipe already liked', 400);
    }

    public function unlike(Request $request, $recipeId)
    {
        // Mendapatkan ID resep dari cookies
        $likedRecipes = $request->cookie('liked_recipes', []);
        $likedRecipes = is_array($likedRecipes) ? $likedRecipes : [];
        $key = array_search($recipeId, $likedRecipes);

        // Menghapus ID resep dari cookies jika ditemukan
        if ($key !== false) {
            unset($likedRecipes[$key]);
            $minutes = 60 * 24 * 30; // Misalnya, simpan selama 30 hari
            return response('Unliked')->cookie('liked_recipes', $likedRecipes, $minutes);
        }

        return response('Error: Recipe not found', 404);
    }

    
}
