<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        banner::create([
            'avatar' => '1253_new.jpg',
        ]);
        banner::create([
            'avatar' => 'slide_1.jpg',
        ]);
        banner::create([
            'avatar' => 'slide_2.jpg',
        ]);
        banner::create([
            'avatar' => 'slide_3.png',
        ]);
        banner::create([
            'avatar' => 'slide_4.png',
        ]);
    }
}
