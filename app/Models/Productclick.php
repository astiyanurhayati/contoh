<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productclick extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'click_time',
    ];
}
