<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'name' => 'math', 
                'description' => 'Algebra, Amusements, Calculus, Combinatorics'
            ],
            [
                'name' => 'literature , fiction, poetry, modern drama',
                'description' => ''
            ],
        ]);
    }
}
