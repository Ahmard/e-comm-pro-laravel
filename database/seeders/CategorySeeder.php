<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    protected array $categories = [
        [
            'name' => 'Beds',
            'description' => 'This category contains beds of all type',
            'icon' => 'bed',
        ],
        [
            'name' => 'Chairs',
            'description' => 'This category contains chairs of all type',
            'icon' => 'chair',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        foreach ($this->categories as $category){
            Category::query()->create($category);
        }
    }
}
