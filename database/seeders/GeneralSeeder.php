<?php

namespace Database\Seeders;

use App\Models\General;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        General::create([
            'logo1' => 'logo1.png',
            'logo2' => 'log2.png',
            'fb' => 'wantek.facobook.com', 
            'ig' => 'wantek.instagram.com', 
            'address' => '785 Carriage Drive, Jacksonville Beach, FL', 
            'phone1' => '+1 203-284-2818', 
            'wa' => '085694031604', 
            'email' => 'info@your-site.com', 
            'footer' => 'Bellaria - A Delicious Cakes and Bakery allright deserved', 
            'linkfooter' => 'wanteknologi.co.id', 
            'description' => 'ini meta description',
            'title' => 'ini meta title',
            'website' => 'ini meta website',
            'keywords' => 'ini meta keywords',
            'searchengine' => 'ini meta searchengine',
            'author' => 'ini meta author',
        ]);
    }
}
