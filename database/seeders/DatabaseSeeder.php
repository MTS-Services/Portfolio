<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            SiteSettingsSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            PortfolioCategorySeeder::class,
            PortfolioSeeder::class,
            TestimonialSeeder::class,
            ServiceSeeder::class,
            SkillSeeder::class
        ]);
    }
}
