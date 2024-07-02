<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mainmenu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function getHeader()
    {
        return self::where('show', "on")->get();
    }

}
