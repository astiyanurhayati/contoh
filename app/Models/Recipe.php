<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Categoryrecipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function kategori_resep()
    {
        return $this->belongsTo(Categoryrecipe::class, 'kategori_resep_id');
    }
}
