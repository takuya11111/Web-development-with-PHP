<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//2024-07-24 start
use Illuminate\Support\Facades\DB; // ←Class 'Database\Seeders\DB' not found」エラーが出たときこれを追加
//2024-07-24 end

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //2024-07-24 start
        DB::table('examples')->insert([
            [
                'name' => 'example 1',
                'description' => 'example 1 bla bla',
            ],
            [
                'name' => 'example 2',
                'description' => 'example 2 bla bla',
            ],
        ]);
        //2024-07-24 end
    }
}
