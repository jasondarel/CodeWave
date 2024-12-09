<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $lessons = [
            [
                'id' => 'PFB01',
                'name' => 'Introduction to Python and setting up your environment',
                'course_id' => 1 // Replace with an actual course_id if necessary
            ],
            [
                'id' => 'PFB02',
                'name' => 'Understanding variables, data types, and operators',
                'course_id' => 1
            ],
            [
                'id' => 'PFB03',
                'name' => 'Working with loops and conditionals',
                'course_id' => 1
            ],
            [
                'id' => 'PFB04',
                'name' => 'Defining and using functions',
                'course_id' => 1
            ],
            [
                'id' => 'PFB05',
                'name' => 'Creating and managing Python modules',
                'course_id' => 1
            ],
            [
                'id' => 'PFB06',
                'name' => 'Building a final project',
                'course_id' => 1
            ],
        ];

        DB::table('lessons')->insert($lessons);
    }
}
