<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\ItemImage;
use App\Models\ObjectItem;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    protected $model = Item::class;

    /*
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'user_id' => User::factory(),
            'description' => $this->faker->word,
            'created_at' => $this->faker->dateTime,
            'address' => $this->faker->address,
            'availabilities' => $this->faker->boolean,
            'booked' => $this->faker->boolean,
            'score_cost' => $this->faker->randomNumber,
        ];
    }
    */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'user_id' => User::factory(),
            'description' => $this->faker->sentence,
            'address' => $this->faker->address,
            'availabilities' => $this->faker->boolean,
            'booked' => $this->faker->boolean,
            'score_cost' => $this->faker->numberBetween(1, 12),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Item $item) {
            ObjectItem::factory();
            ItemImage::factory();
        });
    }

}
