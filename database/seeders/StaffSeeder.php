<?php

namespace Database\Seeders;

use App\Models\Pagestaf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pagestaf::create([
            'judul' => 'Our Staff', 
            'desk' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nisi et dolor ornare pellentesque. Nullam porttitor,
            odio id facilisis dapibus, mauris dolor rhoncus elit, ultricies nulla eros at dui. In suscipit leo sagittis aliquam.
            ', 
            'owner_name' => 'Alex Doe', 
            'owner_jabatan' => 'Masterchef', 
            'owner_history' => 'Alex is a Roman-born pastry chef who spent 15 years in his city Rome perfecting his craft and exceptional creations. Vestibulum rhoncus ornare tincidunt. Etiam pretium metus sit amet est aliquet vulputate. Fusce et cursus ligula. Sed accumsan dictum porta. Aliquam rutrum ullamcorper velit hendrerit convallis.
            ', 
            'bg' => 'bg.jpg', 
            'gambar_history' => 'hat.png'
        ]);
    }
}
