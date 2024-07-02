<?php

namespace Database\Seeders;

use App\Models\Mainmenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mainmenu::create([
            'name' => 'Home',
            'title' => 'Bellaria - a Delicious Cakes and Bakery | Home', 
            'show' => 'on'
        ]);

        Mainmenu::create([
            'name' => 'Profile',
            'title' => 'Our Profile', 
            'show' => 'on'
        ]);

        Mainmenu::create([
            'name' => 'Portofolio',
            'title' => 'Our Portofolio', 
            'show' => 'on'
        ]);
        
        Mainmenu::create([
            'name' => 'Blog',
            'title' => 'Our Blog', 
            'show' => 'on'
        ]);
        Mainmenu::create([
            'name' => 'Shop',
            'title' => 'Shop', 
            'show' => 'on'
        ]);
        Mainmenu::create([
            'name' => 'Contact',
            'title' => 'Our Contact', 
            'show' => 'on'
        ]);

    }
}
