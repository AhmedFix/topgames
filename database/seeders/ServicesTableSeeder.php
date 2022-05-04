<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $services = [
            ['سايبر باي', 'service_1.png'],
            ['فوري', 'service_2.png'],
            ['سوداني', 'service_3.png'],
            ['MTN', 'service_4.png'],
            ['Zain', 'service_5.png'],
            ['بنكك', 'service_6.png']
        ];

        foreach ($services as $service) {

            Service::create([
                'name' => $service[0],
                'image' => $service[1], 
            ]);

        }//end of foreach

    }//end of run

}//end of seeder
