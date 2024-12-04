<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .course-item {
            background-color: #f8f9fa;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .course-item.completed {
            opacity: 0.6;
        }

        .course-image {
            background-color: #e0e0e0;
            height: 200px;
            /* Increased height */
            width: 100%;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .progress-bar {
            background-color: #0d6efd;
        }
    </style>
</head>

<body>
    @extends('layout')

    @section('content')
    <div class="container mt-4">
        <h1>My Courses</h1>

        <!-- In-Progress Courses -->
        <h2 class="mt-4">Courses in Progress</h2>
        <div class="row">
            <!-- Simulated in-progress courses -->
            @foreach ([
            ['title' => 'Introduction to Python', 'description' => 'Learn the basics of Python, including syntax, data types, and simple programming concepts.', 'progress' => 45],
            ['title' => 'Basic Web Development', 'description' => 'Master the fundamentals of HTML, CSS, and JavaScript to create responsive websites.', 'progress' => 70],
            ['title' => 'JavaScript Essentials', 'description' => 'Understand JavaScript fundamentals, DOM manipulation, and event handling.', 'progress' => 30],
            ['title' => 'React for Beginners', 'description' => 'Start building dynamic user interfaces with React and learn the basics of component-based design.', 'progress' => 55],
            ['title' => 'Laravel Basics', 'description' => 'Dive into Laravel framework essentials and learn how to build scalable web applications.', 'progress' => 25],
            ['title' => 'Database Management with MySQL', 'description' => 'Learn how to design, query, and manage databases using MySQL.', 'progress' => 80],
            ] as $course)
            <div class="col-md-4">
                <div class="course-item">
                    <h5>{{ $course['title'] }}</h5>
                    <div class="course-image"></div>
                    <p>{{ $course['description'] }}</p>
                    <div class="progress mb-2">
                        <div class="progress-bar" style="width: {{ $course['progress'] }}%"></div>
                    </div>
                    <small>Progress: {{ $course['progress'] }}%</small>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Completed Courses -->
        <h2 class="mt-5">Completed Courses</h2>
        <div class="row">
            <!-- Simulated completed courses -->
            @foreach ([
            ['title' => 'Advanced CSS Techniques', 'description' => 'Take your CSS skills to the next level with animations, transitions, and modern layout techniques.'],
            ['title' => 'Intro to Machine Learning', 'description' => 'Learn the basics of machine learning and build simple models to predict data trends.'],
            ['title' => 'Version Control with Git', 'description' => 'Master the fundamentals of Git for version control and collaboration.'],
            ] as $course)
            <div class="col-md-4">
                <div class="course-item completed">
                    <h5>{{ $course['title'] }}</h5>
                    <div class="course-image"></div>
                    <p>{{ $course['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection
</body>

</html>