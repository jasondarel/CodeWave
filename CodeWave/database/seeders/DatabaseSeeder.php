<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Rank;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\UserPerk;
use Date;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('ranks')->insert([
            [
                'name' => 'bronze',
                'minimum_points' => 0,
            ],
            [
                'name' => 'silver',
                'minimum_points' => 200,
            ],
            [
                'name' => 'gold',
                'minimum_points' => 500,
            ],
        ]);
        
        $courses = [
            ['name' => 'Python for Beginners', 'description' => 'Learn the fundamentals of Python programming, including syntax, data structures, and simple scripts.', 'lessonamount' => 5],
            ['name' => 'Data Analysis with Python', 'description' => 'Use Python libraries like Pandas and NumPy to perform data analysis and visualization.', 'lessonamount' => 5],
            ['name' => 'Python for Machine Learning', 'description' => 'Master machine learning basics using Python and frameworks like TensorFlow or Scikit-learn.', 'lessonamount' => 5],
            ['name' => 'Advanced Python Programming', 'description' => 'Learn advanced Python concepts like decorators, generators, and performance optimization, along with the standard library.', 'lessonamount' => 5],
            ['name' => 'Web Development with Django', 'description' => 'Build robust web applications using Python and the Django framework.', 'lessonamount' => 5],
            [
                'name' => 'Python for Automation', 
                'description' => 'Automate repetitive tasks like file management and web scraping with Python.', 
                'lessonamount' => 5
            ],
            [
                'name' => 'Python for Game Development', 
                'description' => 'Create games with Python using PyGame and learn core game mechanics.', 
                'lessonamount' => 5
            ],
            [
                'name' => 'Introduction to Flask', 
                'description' => 'Build lightweight web apps with Python and the Flask framework.', 
                'lessonamount' => 5
            ],
            [
                'name' => 'Python for Cybersecurity', 
                'description' => 'Learn to write scripts for network scanning, penetration testing, and data encryption.', 
                'lessonamount' => 5
            ],
            [
                'name' => 'Data Visualization with Python', 
                'description' => 'Master visualization tools like Matplotlib, Seaborn, and Plotly.', 
                'lessonamount' => 5
            ],
           
            
            
                ['name' => 'Java Fundamentals for Beginners', 'description' => 'Learn the basics of Java programming, including syntax, variables, and loops.', 'lessonamount' => 5],
                ['name' => 'Object-Oriented Programming in Java', 'description' => 'Dive deep into OOP principles with Java, including classes, inheritance, and polymorphism.', 'lessonamount' => 5],
                ['name' => 'Java for Mobile Development', 'description' => 'Learn to build mobile apps using Java and frameworks like Android SDK.', 'lessonamount' => 5],
                ['name' => 'Spring Framework Basics', 'description' => 'Understand the fundamentals of Spring to build Java-based web applications.', 'lessonamount' => 5],
                ['name' => 'Java Web Development with Spring Boot', 'description' => 'Build scalable web apps using Java and Spring Boot, covering RESTful APIs, JPA, and Spring Security.', 'lessonamount' => 5],
                ['name' => 'JavaScript Essentials', 'description' => 'Learn the fundamentals of JavaScript, including syntax, variables, and DOM manipulation.', 'lessonamount' => 11],
                ['name' => 'JavaScript for Web Development', 'description' => 'Master JavaScript for creating modern, interactive web applications.', 'lessonamount' => 12],
                ['name' => 'Frontend Development with React', 'description' => 'Build interactive UIs using React, one of the most popular JavaScript libraries.', 'lessonamount' => 13],
                ['name' => 'Node.js for Backend Development', 'description' => 'Learn server-side JavaScript development using Node.js and build scalable applications.', 'lessonamount' => 14],
                [
                    'name' => 'Full-Stack Development with Node.js and Express', 
                    'description' => 'Learn server-side JavaScript development using Node.js and build scalable applications.', 
                    'lessonamount' => 5
                ],
            
            
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
            [
                'id' => 'DAWP01',
                'name' => 'dawp',
                'course_id' => 2
            ],
            [
                'id' => 'DAWP02',
                'name' => 'dawp',
                'course_id' => 2
            ],
            [
                'id' => 'DAWP03',
                'name' => 'dawp',
                'course_id' => 2
            ],
            [
                'id' => 'DAWP04',
                'name' => 'dawp',
                'course_id' => 2
            ],
            [
                'id' => 'DAWP05',
                'name' => 'dawp',
                'course_id' => 2
            ],
            [
                'id' => 'PFML01',
                'name' => 'pfml',
                'course_id' => 3
            ],
            [
                'id' => 'PFML02',
                'name' => 'pfml',
                'course_id' => 3
            ],
            [
                'id' => 'PFML03',
                'name' => 'pfml',
                'course_id' => 3
            ],
            [
                'id' => 'PFML04',
                'name' => 'pfml',
                'course_id' => 3
            ],
            [
                'id' => 'PFML05',
                'name' => 'pfml',
                'course_id' => 3
            ],
            [
                'id' => 'APP01',
                'name' => 'app',
                'course_id' => 4
            ],
            [
                'id' => 'APP02',
                'name' => 'app',
                'course_id' => 4
            ],
            [
                'id' => 'APP03',
                'name' => 'app',
                'course_id' => 4
            ],
            [
                'id' => 'APP04',
                'name' => 'app',
                'course_id' => 4
            ],
            [
                'id' => 'APP05',
                'name' => 'app',
                'course_id' => 4
            ],
            [
                'id' => 'WDWD01',
                'name' => 'wdwd',
                'course_id' => 5
            ],
            [
                'id' => 'WDWD02',
                'name' => 'wdwd',
                'course_id' => 5
            ],
            [
                'id' => 'WDWD03',
                'name' => 'wdwd',
                'course_id' => 5
            ],
            [
                'id' => 'WDWD04',
                'name' => 'wdwd',
                'course_id' => 5
            ],
            [
                'id' => 'WDWD05',
                'name' => 'wdwd',
                'course_id' => 5
            ],
            [
                'id' => 'PFA01',
                'name' => 'pfa',
                'course_id' => 6
            ],
            [
                'id' => 'PFA02',
                'name' => 'pfa',
                'course_id' => 6
            ],
            [
                'id' => 'PFA03',
                'name' => 'pfa',
                'course_id' => 6
            ],
            [
                'id' => 'PFA04',
                'name' => 'pfa',
                'course_id' => 6
            ],
            [
                'id' => 'PFA05',
                'name' => 'pfa',
                'course_id' => 6
            ],
            [
                'id' => 'PFGD01',
                'name' => 'pgfa',
                'course_id' => 7
            ],
            [
                'id' => 'PFGD02',
                'name' => 'pgfa',
                'course_id' => 7
            ],
            [
                'id' => 'PFGD03',
                'name' => 'pgfa',
                'course_id' => 7
            ],
            [
                'id' => 'PFGD04',
                'name' => 'pgfa',
                'course_id' => 7
            ],
            [
                'id' => 'PFGD05',
                'name' => 'pgfa',
                'course_id' => 7
            ],
            [
                'id' => 'ITF01',
                'name' => 'itf',
                'course_id' => 8
            ],
            [
                'id' => 'ITF02',
                'name' => 'itf',
                'course_id' => 8
            ],
            [
                'id' => 'ITF03',
                'name' => 'itf',
                'course_id' => 8
            ],
            [
                'id' => 'ITF04',
                'name' => 'itf',
                'course_id' => 8
            ],
            [
                'id' => 'ITF05',
                'name' => 'itf',
                'course_id' => 8
            ],
            [
                'id' => 'PFC01',
                'name' => 'pfc',
                'course_id' => 9
            ],
            [
                'id' => 'PFC02',
                'name' => 'pfc',
                'course_id' => 9
            ],
            [
                'id' => 'PFC03',
                'name' => 'pfc',
                'course_id' => 9
            ],
            [
                'id' => 'PFC04',
                'name' => 'pfc',
                'course_id' => 9
            ],
            [
                'id' => 'PFC05',
                'name' => 'pfc',
                'course_id' => 9
            ],
            [
                'id' => 'DVWP01',
                'name' => 'dvwp',
                'course_id' => 10
            ],
            [
                'id' => 'DVWP02',
                'name' => 'dvwp',
                'course_id' => 10
            ],
            [
                'id' => 'DVWP03',
                'name' => 'dvwp',
                'course_id' => 10
            ],
            [
                'id' => 'DVWP04',
                'name' => 'dvwp',
                'course_id' => 10
            ],
            [
                'id' => 'DVWP05',
                'name' => 'dvwp',
                'course_id' => 10
            ],
            [
                'id' => 'JFFB01',
                'name' => 'jffb',
                'course_id' => 11
            ],
            [
                'id' => 'JFFB02',
                'name' => 'jffb',
                'course_id' => 11
            ],
            [
                'id' => 'JFFB03',
                'name' => 'jffb',
                'course_id' => 11
            ],
            [
                'id' => 'JFFB04',
                'name' => 'jffb',
                'course_id' => 11
            ],
            [
                'id' => 'JFFB05',
                'name' => 'jffb',
                'course_id' => 11
            ],
            [
                'id' => 'OPIJ01',
                'name' => 'oopij',
                'course_id' => 12
            ],
            [
                'id' => 'OPIJ02',
                'name' => 'oopij',
                'course_id' => 12
            ],
            [
                'id' => 'OPIJ03',
                'name' => 'oopij',
                'course_id' => 12
            ],
            [
                'id' => 'OPIJ04',
                'name' => 'oopij',
                'course_id' => 12
            ],
            [
                'id' => 'OPIJ05',
                'name' => 'oopij',
                'course_id' => 12
            ]
            ,
            [
                'id' => 'JFMD01',
                'name' => 'jfmd',
                'course_id' => 13
            ],
            [
                'id' => 'JFMD02',
                'name' => 'jfmd',
                'course_id' => 13
            ],
            [
                'id' => 'JFMD03',
                'name' => 'jfmd',
                'course_id' => 13
            ],
            [
                'id' => 'JFMD04',
                'name' => 'jfmd',
                'course_id' => 13
            ],
            [
                'id' => 'JFMD05',
                'name' => 'jfmd',
                'course_id' => 13
            ]
            ,
            [
                'id' => 'SFB01',
                'name' => 'sfb',
                'course_id' => 14
            ],
            [
                'id' => 'SFB02',
                'name' => 'sfb',
                'course_id' => 14
            ],
            [
                'id' => 'SFB03',
                'name' => 'sfb',
                'course_id' => 14
            ],
            [
                'id' => 'SFB04',
                'name' => 'sfb',
                'course_id' => 14
            ],
            [
                'id' => 'SFB05',
                'name' => 'sfb',
                'course_id' => 14
            ]
            ,    [
                'id' => 'JWDWSB01',
                'name' => 'jwdwsb',
                'course_id' => 15
            ],
            [
                'id' => 'JWDWSB02',
                'name' => 'jwdwsb',
                'course_id' => 15
            ],
            [
                'id' => 'JWDWSB03',
                'name' => 'jwdwsb',
                'course_id' => 15
            ],
            [
                'id' => 'JWDWSB04',
                'name' => 'jwdwsb',
                'course_id' => 15
            ],
            [
                'id' => 'JWDWSB05',
                'name' => 'jwdwsb',
                'course_id' => 15
            ]
            ,
            [
                'id' => 'JE01',
                'name' => 'je',
                'course_id' => 16
            ],
            [
                'id' => 'JE02',
                'name' => 'je',
                'course_id' => 16
            ],
            [
                'id' => 'JE03',
                'name' => 'je',
                'course_id' => 16
            ],
            [
                'id' => 'JE04',
                'name' => 'je',
                'course_id' => 16
            ],
            [
                'id' => 'JE05',
                'name' => 'je',
                'course_id' => 16
            ]
            ,[
                'id' => 'JFWD01',
                'name' => 'jfwd',
                'course_id' => 17
            ],
            [
                'id' => 'JFWD02',
                'name' => 'jfwd',
                'course_id' => 17
            ],
            [
                'id' => 'JFWD03',
                'name' => 'jfwd',
                'course_id' => 17
            ],
            [
                'id' => 'JFWD04',
                'name' => 'jfwd',
                'course_id' => 17
            ],
            [
                'id' => 'JFWD05',
                'name' => 'jfwd',
                'course_id' => 17
            ],
            [
                'id' => 'FDWR01',
                'name' => 'fdwr',
                'course_id' => 18
            ],
            [
                'id' => 'FDWR02',
                'name' => 'fdwr',
                'course_id' => 18
            ],
            [
                'id' => 'FDWR03',
                'name' => 'fdwr',
                'course_id' => 18
            ],
            [
                'id' => 'FDWR04',
                'name' => 'fdwr',
                'course_id' => 18
            ],
            [
                'id' => 'FDWR05',
                'name' => 'fdwr',
                'course_id' => 18
            ]
            ,
            [
                'id' => 'NFBD01',
                'name' => 'nfbd',
                'course_id' => 19
            ],
            [
                'id' => 'NFBD02',
                'name' => 'nfbd',
                'course_id' => 19
            ],
            [
                'id' => 'NFBD03',
                'name' => 'nfbd',
                'course_id' => 19
            ],
            [
                'id' => 'NFBD04',
                'name' => 'nfbd',
                'course_id' => 19
            ],
            [
                'id' => 'NFBD05',
                'name' => 'nfbd',
                'course_id' => 19
            ],
            [
                'id' => 'FDWNAE01',
                'name' => 'fsdwn',
                'course_id' => 20
            ],
            [
                'id' => 'FDWNAE02',
                'name' => 'fsdwn',
                'course_id' => 20
            ],
            [
                'id' => 'FDWNAE03',
                'name' => 'fsdwn',
                'course_id' => 20
            ],
            [
                'id' => 'FDWNAE04',
                'name' => 'fsdwn',
                'course_id' => 20
            ],
            [
                'id' => 'FDWNAE05',
                'name' => 'fsdwn',
                'course_id' => 20
            ],
            [
                'id' => 'FDWNAE06',
                'name' => 'fsdwn',
                'course_id' => 20
            ]


                        
        
            
        
        
        
        


        ];

        DB::table('lessons')->insert($lessons);


        

      
       


    }
}
