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

        DB::table('phones')->insert([
            [
                'student_id' => '1',
                'phone_number' => '12343453465',

            ],
            [
                'student_id' => '2',
                'phone_number' => '124234523',

            ],
            [
                'student_id' => '3',
                'phone_number' => '345345345',
            ],
            [
                'student_id' => '3',
                'phone_number' => '1212121212',
            ],
        ]);
    }
}