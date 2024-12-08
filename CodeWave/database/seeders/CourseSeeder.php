<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $courses = [
            ['name' => 'Python for Beginners', 'description' => 'Learn the fundamentals of Python programming, including syntax, data structures, and simple scripts.', 'lessonamount' => 5],
            ['name' => 'Data Analysis with Python', 'description' => 'Use Python libraries like Pandas and NumPy to perform data analysis and visualization.', 'lessonamount' => 5],
            ['name' => 'Python for Machine Learning', 'description' => 'Master machine learning basics using Python and frameworks like TensorFlow or Scikit-learn.', 'lessonamount' => 5],
            ['name' => 'Advanced Python Programming', 'description' => 'Learn advanced Python concepts like decorators, generators, and performance optimization, along with the standard library.', 'lessonamount' => 5],
            ['name' => 'Web Development with Django', 'description' => 'Build robust web applications using Python and the Django framework.', 'lessonamount' => 5],
        ];

        foreach ($courses as $course) {
            DB::table('courses')->insert([
                'name' => $course['name'],
                'description' => $course['description'],
                'total_time' => rand(6, 12), // Randomize total_time
                'lessonamount' => $course['lessonamount'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
      
    }
}
