<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'judul1' => 'Our Story', 
            'judul2' => 'Our Mission', 
            'judul3' => 'Our Bakery', 
            'judul4' => 'Our Standarts', 

            'desk1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nisi et dolor ornare pellentesque. Nullam porttitor, odio id facilisis dapibus, mauris dolor rhoncus elit, ultricies nulla eros at dui. In suscipit leo sagittis aliquam. Integer tristique tempus urna. et pharetra dui urna volutpat elit odio at.', 
            'desk2' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent molestie eu turpis nec
            molestie. Nam auctor magna mauris.', 
            'desk3' => 'Maria is a Roman-born pastry chef who spent 15 years in his city Rome perfecting his craft and exceptional creations. Vestibulum rhoncus ornare tincidunt. Etiam pretium metus sit amet est aliquet vulputate. Fusce et cursus ligula. Sed accumsan dictum porta. Aliquam rutrum ullamcorper velit hendrerit convallis.', 
            'desk4' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel sem imperdiet, venenatis eros ac,mattis mauris. Nam ac purus justo. Vivamus non hendrerit velit.', 
            'desk5' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel sem imperdiet, venenatis eros ac,mattis mauris. Nam ac purus justo. Vivamus non hendrerit velit.', 
            'desk6' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel sem imperdiet, venenatis eros ac,mattis mauris. Nam ac purus justo. Vivamus non hendrerit velit.', 
            'desk7' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit suspendisse,Nullam porttitor, odio id facilisis dapibus, mauris dolor rhoncus elit,In suscipit hendrerit leo sagittis aliquam. Integer tristique tempus urna,Proin id enim euismod ultricies magna sed ultrices mauris,Proin interdum enim ac placerat egestas mauris massa scelerisque',

            'bg1' => 'bg1.jpg',
            'bg2' => 'bg2.jpg',
            'bg3' => 'bg3.jpg',
            'bg4' => 'bg4.jpg',
            'bg5' => 'bg5.jpg',
            'owner' =>  'onwer.png',
            'owner_name' => 'Alex Doe', 
            'owner_title' => 'Masterchef'

        ]);
    }
}
