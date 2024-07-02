<?php

namespace Database\Seeders;

use App\Models\Submenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Submenu::create([
            'name' => 'About Us', 
            'title' => 'About Us', 
            'show' => 'on', 
            'mainmenu_id' => 2, 
            "url" => "about"
        ]);
        Submenu::create([
            'name' => 'Our Staff', 
            'title' => 'Our Staff', 
            'show' => 'on', 
            'mainmenu_id' => 2, 
            "url" => "staff"
        ]);

        Submenu::create([
            'name' => 'Pricing Tables', 
            'title' => 'Pricing Table', 
            'show' => 'on', 
            'mainmenu_id' => 2, 
            "url" => "pricing"
        ]);
        Submenu::create([
            'name' => 'Recipe Grid', 
            'title' => 'Recipe Grid', 
            'show' => 'on', 
            'mainmenu_id' => 2, 
            "url" => "recipe"
        ]);


    }
}
