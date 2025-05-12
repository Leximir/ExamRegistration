<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('semesters')->insert([
            ['semester' => 1 , 'year' => 1],
            ['semester' => 2 , 'year' => 1],
            ['semester' => 3 , 'year' => 2],
            ['semester' => 4 , 'year' => 2],
            ['semester' => 5 , 'year' => 3],
            ['semester' => 6 , 'year' => 3],
            ['semester' => 7 , 'year' => 4],
            ['semester' => 8 , 'year' => 4],
            ['semester' => 9 , 'year' => 5],
            ['semester' => 10 , 'year' => 5],
        ]);
    }
}
