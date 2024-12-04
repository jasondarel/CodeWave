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
            object-fit: cover;
            /* Ensures the image fills the container properly */
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
            ['title' => 'Introduction to Python', 'description' => 'Learn the basics of Python, including syntax, data types, and simple programming concepts.', 'progress' => 45, 'image' => 'https://1000logos.net/wp-content/uploads/2020/08/Python-Logo.jpg'],
            ['title' => 'Basic Web Development', 'description' => 'Master the fundamentals of HTML, CSS, and JavaScript to create responsive websites.', 'progress' => 70, 'image' => 'https://plus.unsplash.com/premium_photo-1723849222657-e1e48a0a306e?q=80&w=2021&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
            ['title' => 'JavaScript Essentials', 'description' => 'Understand JavaScript fundamentals, DOM manipulation, and event handling.', 'progress' => 30, 'image' => 'https://img-c.udemycdn.com/course/750x422/1468694_d595_2.jpg'],
            ['title' => 'React for Beginners', 'description' => 'Start building dynamic user interfaces with React and learn the basics of component-based design.', 'progress' => 55, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8p4M-RWLBXSxhSBGVnEugAmeznB8U2jBADg&s'],
            ['title' => 'Laravel Basics', 'description' => 'Dive into Laravel framework essentials and learn how to build scalable web applications.', 'progress' => 25, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfBz081b3NyUYlOhYItosdQrFccxx_bY_k6A&s'],
            ['title' => 'Database Management with MySQL', 'description' => 'Learn how to design, query, and manage databases using MySQL.', 'progress' => 80, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQZCnRrKXTQ1ClbVQXUNulFHHFyQ1FGe7AgzPn-H-zcJjukQS9ZLeL6EX7YYzMTYDkJJs&usqp=CAU'],
            ] as $course)
            <div class="col-md-4">
                <div class="course-item">
                    <h5><strong>{{ $course['title'] }}</strong></h5>
                    <img src="{{ $course['image'] }}" alt="{{ $course['title'] }}" class="course-image">
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
            ['title' => 'Advanced CSS Techniques', 'description' => 'Take your CSS skills to the next level with animations, transitions, and modern layout techniques.', 'image' => 'https://www.htmlecsspro.com/uploads/images/2018/03/aplicando-estilos-css-1521410533.png'],
            ['title' => 'Intro to Machine Learning', 'description' => 'Learn the basics of machine learning and build simple models to predict data trends.', 'image' => 'https://image.web.id/images/Machine-Learning.jpg'],
            ['title' => 'Version Control with Git', 'description' => 'Master the fundamentals of Git for version control and collaboration.', 'image' => 'https://ositcom.com/static/images/images/git-blog-header_1.png'],
            ] as $course)
            <div class="col-md-4">
                <div class="course-item completed">
                    <h5><strong>{{ $course['title'] }}</strong></h5>
                    <img src="{{ $course['image'] }}" alt="{{ $course['title'] }}" class="course-image">
                    <p>{{ $course['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection
</body>

</html>