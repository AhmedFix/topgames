<?php
namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = ['ahmed', 'hassan'];

        foreach ($clients as $client) {

            Client::create([
               'name' => $client,
               'phone' => '01234567',
               'address' => 'khartoum',
            ]);

        }//end of foreach

    }//end of run

}//end of seeder
