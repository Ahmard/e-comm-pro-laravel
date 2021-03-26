<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Royal',
                'price' => "15000",
                'description' => "Royal Sofa with high good quality",
                'category' => 'chair',
                'gallery' => 'C:\Users\ANAS MAIMALEE\Desktop\L\e-comm-pro\resources\public\images\IMG-20210216-WA0001.jpg',
            ],
            [
                'name' => 'Tv Stand',
                'price' => "50000",
                'description' => "Tv stand with high good quality",
                'category' => 'tv-Stand',
                'gallery' => 'C:\Users\ANAS MAIMALEE\Desktop\L\e-comm-pro\resources\public\images\IMG-20210216-WA0002.jpg',
            ],
            [
                'name' => 'Royal',
                'price' => "150000",
                'description' => "Royal Sofa with high good quality",
                'category' => 'chair',
                'gallery' => 'C:\Users\ANAS MAIMALEE\Desktop\L\e-comm-pro\resources\public\images\IMG-20210216-WA0004~2.jpg',
            ],
            [
                'name' => 'Royal',
                'price' => "150000",
                'description' => "Royal Sofa with high good quality",
                'category' => 'chair',
                'gallery' => 'C:\Users\ANAS MAIMALEE\Desktop\L\e-comm-pro\resources\public\images\IMG-20210216-WA0003.jpg',
            ],
            [
                'name' => 'Royal',
                'price' => "150000",
                'description' => "Royal Sofa with high good quality",
                'category' => 'chair',
                'gallery' => 'C:\Users\ANAS MAIMALEE\Desktop\L\e-comm-pro\resources\public\images\IMG-20210216-WA0006.jpg',
            ]
        ]);
    }
}
