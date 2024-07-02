<?php

namespace App\Models;

use App\Models\Categoryproduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shop extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function categoryproduk()
    {
        return $this->belongsTo(Categoryproduk::class);
    }

    public function clicks()
    {
        return $this->hasMany(Productclick::class, 'product_id');
    }
}
