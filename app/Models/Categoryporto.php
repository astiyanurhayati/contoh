<?php

namespace App\Models;

use App\Models\Portofolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoryporto extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function porofolios()
    {
        return $this->hasMany(Portofolio::class);
    }
}
