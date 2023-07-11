<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'parent_id' => null, // Set the parent_id to null for a top-level category
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Category $category) {
            // Create child categories if needed
            if (rand(0, 1)) {
                Category::factory()->count(2)->create([
                    'parent_id' => $category->id,
                ]);
            }
        });
    }
}
