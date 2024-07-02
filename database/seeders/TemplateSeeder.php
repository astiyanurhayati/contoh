<?php

namespace Database\Seeders;

use App\Models\Template;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Template::create([
            'icon_slidder' => 'icon_slidder.png', 
            'icon_special' => 'icon_special.png', 
            'icon_banner' => 'icon_banner.png', 

            'bg_special' => 'bg_special.jpg', 
            'bg_banner' => 'bg_banner.jpg', 
            'bg_feature' => 'bg_feature.jpg',
            'bg_recipe' => 'bg_recipe.jpg', 
            'bg_footer' => 'bg_footer.jpg', 

            'judul_special' => 'Our Specialties', 
            'judul_banner' => 'Magic Processing', 
            'judul_portofolio' => 'Our Creations',
            'judul_testimonial' => 'Clients Say', 
            'judul_price' => 'Our Prices', 
            'judul_footer1' => 'Follow Us', 
            'judul_footer2' => 'Get Our Sweet News', 

            'btn_feature' => 'Know Us Better', 
            'btn_banner' => 'Discover More', 
            'btn_price' => 'Order Now', 

            'desk_banner' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent molestie eu turpis nec
            molestie. Nam auctor magna mauris, non lacinia felis mattis nec.', 
            'desk_price' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nisi et dolor ornare pellentesque. Nullam porttitor,
            odio id facilisis dapibus, mauris dolor rhoncus elit, ultricies nulla eros at dui.'

        ]);
    }
}
