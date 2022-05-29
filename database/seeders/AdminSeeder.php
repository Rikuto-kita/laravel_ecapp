<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'testname',
            'email' => 'test@test.com',
            'password' => Hash::make('test0430'),
            'created_at'=> '2022/05/07 11:11:11'
        ]);
    }
}
