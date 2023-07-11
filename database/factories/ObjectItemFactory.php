<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\ObjectItem;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ObjectItemFactory extends Factory
{
    protected $model = ObjectItem::class;

    public function definition()
    {
        return [
            'item_id' => Item::factory()->create()->id,
            'condition' => $this->faker->randomElement(['new', 'used', 'broken']),
            'category_id' => Category::factory(),
        ];
    }
}
