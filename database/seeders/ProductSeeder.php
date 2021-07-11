<?php

namespace Database\Seeders;

use App\Models\Product;
use DirectoryIterator;
use Illuminate\Database\Seeder;
use Intervention\Image\Image;
use Intervention\Image\ImageManager;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $files = new DirectoryIterator(public_path('images'));
        $count = 1;
        foreach ($files as $file) {
            if ($file->isFile() && !$file->isDot()) {
                echo "Resizing {$file->getFilename()}...\n";
                (new ImageManager(['driver' => 'gd']))->make($file->getRealPath())
                    ->resize(730, 487)
                    ->save($file->getRealPath());

                echo "Inserting product $count...\n";
                Product::query()->create([
                    'name' => "Product $count",
                    'category' => rand(1, 2),
                    'price' => (float)rand(1000, 5000),
                    'description' => "Product $count is really high quality product, don't let this chance pass you",
                    'gallery' => "images/{$file->getFilename()}",
                ]);
            }

            $count += 1;
        }
    }
}
