<?php

namespace Database\Seeders;

use App\Models\ObjectItem;
use Illuminate\Database\Seeder;

class ObjectItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ObjectItem::factory(10)->create();
    }
}
