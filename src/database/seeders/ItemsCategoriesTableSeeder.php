<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items_categories')->insert([
            [
                'item_id' => '1',
                'category_id' => '1',
            ],
            [
                'item_id' => '1',
                'category_id' => '5',
            ]
        ]);
    }
}
