<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'スポーツ',
                'sort_order' => 1,
            ],
            [
                'name' => '食品',
                'sort_order' => 2,
            ],
            [
                'name' => '家電',
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => '筋トレ',
                'sort_order' => 1,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'サッカー',
                'sort_order' => 2,
                'primary_category_id' => 1,
            ],
            [
                'name' => '保存食',
                'sort_order' => 3,
                'primary_category_id' => 2,
            ],
            [
                'name' => 'ギフトセット',
                'sort_order' => 4,
                'primary_category_id' => 2,
            ],
            [
                'name' => '調理家電',
                'sort_order' => 5,
                'primary_category_id' => 3,
            ],
            [
                'name' => '生活家電',
                'sort_order' => 6,
                'primary_category_id' => 3,
            ],
        ]);
    }
}
