<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        $product_1 =Product::create([
                'category_id' => 1,
                'name' => 'Pubg mobile',
                'image' => 'product_1.png',
                'description' => 'Pubg mobile description',
                'purchase_price' => 500,
                'sale_price' => 400,
                'stock' => 100,
                'status' => true,
                'vote' => 0.4,
                'vote_count' => 10,
            ]);
            $product_2 =Product::create([
                'category_id' => 1,
                'name' => 'بطاقة Blizzard',
                'image' => 'product_2.png',
                'description' => 'بطاقة Blizzard description',
                'purchase_price' => 420,
                'sale_price' => 320,
                'stock' => 100,
                'status' => true,
                'vote' => 0.4,
                'vote_count' => 10,
            ]);
            $product_3 =Product::create([
                'category_id' => 1,
                'name' => 'FreeFire',
                'image' => 'product_3.png',
                'description' => 'FreeFire description',
                'purchase_price' => 200,
                'sale_price' => 100,
                'stock' => 100,
                'status' => true,
                'vote' => 0.4,
                'vote_count' => 10,
            ]);
            $product_4 =Product::create([
                'category_id' => 1,
                'name' =>  'Clash Of Clans',
                'image' => 'product_4.png',
                'description' => 'Clash Of Clans description',
                'purchase_price' => 400,
                'sale_price' => 300,
                'stock' => 100,
                'status' => true,
                'vote' => 0.4,
                'vote_count' => 10,
            ]);
            $product_5 =Product::create([
                'category_id' => 1,
                'name' =>  'CALL OF DUTY: MOBILE',
                'image' => 'product_5.png',
                'description' => 'CALL OF DUTY: MOBILE description',
                'purchase_price' => 140,
                'sale_price' => 80,
                'stock' => 100,
                'status' => true,
                'vote' => 0.4,
                'vote_count' => 10,
            ]);
            $product_6 =Product::create([
                'category_id' => 1,
                'name' => 'origin بطاقة',
                'image' => 'product_6.png',
                'description' => 'origin بطاقة description',
                'purchase_price' => 100,
                'sale_price' => 70,
                'stock' => 100,
                'status' => true,
                'vote' => 0.4,
                'vote_count' => 10,
            ]);
            $product_7 =Product::create([
                'category_id' => 1,
                'name' =>  'بطاقات ايتونز USA', 
                'image' => 'product_7.png',
                'description' => 'بطاقات ايتونز USA description',
                'purchase_price' => 510,
                'sale_price' => 410,
                'stock' => 100,
                'status' => true,
                'vote' => 0.4,
                'vote_count' => 10,
            ]);
            $product_8 =Product::create([
                'category_id' => 1,
                'name' => 'بطاقات STEAM', 
                'image' => 'product_8.png',
                'description' => 'بطاقات STEAM description',
                'purchase_price' => 210,
                'sale_price' => 110,
                'stock' => 100,
                'status' => true,
                'vote' => 0.4,
                'vote_count' => 10,
            ]);
            $product_9 =Product::create([
                'category_id' => 1,
                'name' => 'بطاقات Google Play', 
                'image' => 'product_9.png',
                'description' => 'بطاقات Google Play description',
                'purchase_price' => 350,
                'sale_price' => 250,
                'stock' => 100,
                'status' => true,
                'vote' => 0.4,
                'vote_count' => 10,
            ]);
            $product_10 =Product::create([
                'category_id' => 1,
                'name' => 'Xbox Live',
                'image' => 'product_10.png',
                'description' => 'Xbox Live description',
                'purchase_price' => 620,
                'sale_price' => 420,
                'stock' => 100,
                'status' => true,
                'vote' => 0.4,
                'vote_count' => 10,
            ]);


    }//end of run

}//end of seeder
