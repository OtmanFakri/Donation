<?php

namespace Database\Factories;

use App\Models\FoodItem;
use App\Models\Item;
use App\Models\ItemImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodItemFactory extends Factory
{
    protected $model = FoodItem::class;

    public function definition()
    {
        return [
            'item_id' => function () {
                return Item::factory()->create()->id;
            },
            'expiration_date' => $this->faker->dateTime(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (FoodItem $foodItem) {
            $item = Item::find($foodItem->item_id);

            $item->itemImages()->saveMany(ItemImage::factory()->count(2)->make());
        });
    }
}
