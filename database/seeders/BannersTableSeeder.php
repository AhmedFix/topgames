<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $banner_1 = Banner::create([
            'name' => "CHARGE GAMES",
            'image' => 'banner_1.jpg',
            'link' => "#",
        ]);
        $banner_2 = Banner::create([
            'name' => "Offers",
            'image' => 'banner_2.jpg',
            'link' => "#",
        ]);
        $banner_3 = Banner::create([
            'name' => "GAMES CARDS",
            'image' => 'banner_3.jpg',
            'link' => "#",
        ]);

    }//end of run

}//end of seeder
