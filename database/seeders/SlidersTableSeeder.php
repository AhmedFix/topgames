<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $slider_1 = Slider::create([
            'title' => "Get up to 30% Off When you buy Frefire card",
            'image' => 'slider_1.jpg',
            'status' => true,
        ]);
        $slider_2 = Slider::create([
            'title' => "So you don't want to know what's new in PUBG",
            'image' => 'slider_2.png',
            'status' => true,
        ]);

    }//end of run

}//end of seeder
