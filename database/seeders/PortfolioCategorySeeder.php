<?php

namespace Database\Seeders;

use App\Models\Portfolio_Category;
use Illuminate\Database\Seeder;

class PortfolioCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio_Category::insert([
            ['name' => 'web'],
            ['name' => 'app'],
            ['name' => 'other'],
        ]);
    }
}
