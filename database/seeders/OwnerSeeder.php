<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'testname1',
                'email' => 'test@test.com1',
                'password' => Hash::make('test0430'),
                'created_at'=> '2022/05/07 11:11:11'
            ],
            [
                'name' => 'testname2',
                'email' => 'test@test.com2',
                'password' => Hash::make('test0430'),
                'created_at'=> '2022/05/07 11:11:11'
            ],
            [
                'name' => 'testname3',
                'email' => 'test@test.com3',
                'password' => Hash::make('test0430'),
                'created_at'=> '2022/05/07 11:11:11'
            ],
            [
                'name' => 'testname4',
                'email' => 'test@test.com4',
                'password' => Hash::make('test0430'),
                'created_at'=> '2022/05/07 11:11:11'
            ],
            [
                'name' => 'testname5',
                'email' => 'test@test.com5',
                'password' => Hash::make('test0430'),
                'created_at'=> '2022/05/07 11:11:11'
            ],
        ]);
    }
}
