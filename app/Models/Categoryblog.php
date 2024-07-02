<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoryblog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function blogs(){
        return $this->hasMany(Blog::class);
    }
}
