<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::create([
            'name' => 'super_admin',
            'email' => 'super_admin@app.com',
            'password' => bcrypt('Ffff3333'),
            'type' => 'super_admin',
        ]);
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@app.com',
            'password' => bcrypt('12344321'),
            'type' => 'admin',
        ]);

        $superAdmin->attachRole('super_admin');
        $admin->attachRole('admin');

    }//end of run

}//end of seeder
