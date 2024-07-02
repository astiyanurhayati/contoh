<?php

namespace App\Models;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoryproduk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
}
