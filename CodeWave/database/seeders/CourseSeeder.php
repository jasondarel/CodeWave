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
            
                ['name' => 'Java Fundamentals for Beginners', 'description' => 'Learn the basics of Java programming, including syntax, variables, and loops.', 'lessonamount' => 5],
                ['name' => 'Object-Oriented Programming in Java', 'description' => 'Dive deep into OOP principles with Java, including classes, inheritance, and polymorphism.', 'lessonamount' => 5],
                ['name' => 'Java for Mobile Development', 'description' => 'Learn to build mobile apps using Java and frameworks like Android SDK.', 'lessonamount' => 5],
                ['name' => 'Spring Framework Basics', 'description' => 'Understand the fundamentals of Spring to build Java-based web applications.', 'lessonamount' => 5],
                ['name' => 'Java Web Development with Spring Boot', 'description' => 'Build scalable web apps using Java and Spring Boot, covering RESTful APIs, JPA, and Spring Security.', 'lessonamount' => 5],
                ['name' => 'JavaScript Essentials', 'description' => 'Learn the fundamentals of JavaScript, including syntax, variables, and DOM manipulation.', 'lessonamount' => 11],
                ['name' => 'JavaScript for Web Development', 'description' => 'Master JavaScript for creating modern, interactive web applications.', 'lessonamount' => 12],
                ['name' => 'Frontend Development with React', 'description' => 'Build interactive UIs using React, one of the most popular JavaScript libraries.', 'lessonamount' => 13],
                ['name' => 'Node.js for Backend Development', 'description' => 'Learn server-side JavaScript development using Node.js and build scalable applications.', 'lessonamount' => 14],
            
            
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
