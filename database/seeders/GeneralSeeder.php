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
            'logo3' => 'logo3.png',
            'fb' => 'wantek.facobook.com', 
            'tw' => 'wantek.twetter.com', 
            'ig' => 'wantek.instagram.com', 
            'yt' => 'wantek.youtube.com', 
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253840.65639166607!2d106.6646998143559!3d-6.229379583970736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1685370697068!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', 
            'address' => '785 Carriage Drive, Jacksonville Beach, FL', 
            'phone1' => '+1 203-284-2818', 
            'phone2' => '+1 203-284-2919', 
            'wa' => '085694031604', 
            'email1' => 'info@your-site.com', 
            'email2' => 'sales@your-site.com', 
            'footer' => 'Bellaria - A Delicious Cakes and Bakery allright deserved', 
            'linkfooter' => 'wanteknologi.co.id', 
            'breadcrumb' => 'bread.jpg', 
            
            'description' => 'ini meta description',
            'title' => 'ini meta title',
            'website' => 'ini meta website',
            'keywords' => 'ini meta keywords',
            'searchengine' => 'ini meta searchengine',
            'author' => 'ini meta author',
        ]);
    }
}
