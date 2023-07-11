<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\ItemImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_id' => Item::factory()->create()->id,
            'image_path' => $this->faker->imageUrl(),
        ];
    }

    public function configure(){
        return $this->afterCreating(function (ItemImage $itemImage) {
            $imageCount=rand(3,5);

            $itemImage->item->itemImages()->createMany(
                $this->randomImages($imageCount)
            );
        });
    }

    private function randomImages($count)
    {
        $images = [];
        for ($i = 0; $i < $count; $i++) {
            $images[] = [
                'image_path' => $this->faker->imageUrl(),
            ];
        }
        return $images;
    }
}
