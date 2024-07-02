<?php

namespace App\Models;

use App\Models\Categoryblog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function categoryblog(){
        return $this->belongsTo(Categoryblog::class);
    }
}
