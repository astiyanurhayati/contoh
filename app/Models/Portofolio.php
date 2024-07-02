<?php

namespace App\Models;

use App\Models\Categoryporto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portofolio extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function categoryporto()
    {
        return $this->belongsTo(Categoryporto::class);
    }
}
