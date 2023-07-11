<?php

namespace Database\Seeders;

use App\Models\ItemImage;
use Illuminate\Database\Seeder;

class ItemImagesSeeder extends Seeder
{

    public function run()
    {
    ItemImage::factory(10)->create();
    }
}
