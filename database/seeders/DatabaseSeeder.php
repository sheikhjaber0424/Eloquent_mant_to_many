<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'name' => 'Alex',
            ],
            [
                'name' => 'James',

            ],
            [
                'name' => 'Tom',

            ],
        ]);
        DB::table('departments')->insert([
            [
                'student_id' => '1',
                'dept_name' => 'CSE',

            ],
            [
                'student_id' => '2',
                'dept_name' => 'EEE',

            ],
            [
                'student_id' => '3',
                'dept_name' => 'ME',
            ],
        ]);
    }
}