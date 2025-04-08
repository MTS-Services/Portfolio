<?php

namespace Database\Factories;

use App\Models\Portfolio_Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Portfolio_CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $slugs = ['app', 'web', 'other'];
        $slug = array_shift($slugs);
        return [
            'name' => $slug,
        ];
    }
}
