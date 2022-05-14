<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'owner_id' => 1,
                'filename' => 'seeder1.jpg',
                'title' => null
            ],
            [
                'owner_id' => 2,
                'filename' => 'seeder2.jpg',
                'title' => null
            ],  [
                'owner_id' => 3,
                'filename' => 'seeder3.jpg',
                'title' => null
            ],  [
                'owner_id' => 4,
                'filename' => 'seeder4.jpg',
                'title' => null
            ]]);
                
    }
}
