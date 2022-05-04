<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LaratrustSeeder::class,
            UsersTableSeeder::class,
            SlidersTableSeeder::class,
            BannersTableSeeder::class,
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            ClientsTableSeeder::class,
            ServicesTableSeeder::class
        ]);
    }
}