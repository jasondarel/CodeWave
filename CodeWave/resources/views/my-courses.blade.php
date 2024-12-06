<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .course-language {
            font-size: 20px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 10px;
            padding: 20px;
            box-sizing: border-box;
        }

        .card {
            flex: 1 1 calc(20% - 20px);
            box-sizing: border-box;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .card h3 {
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .card p {
            font-size: 14px;
            margin-bottom: 20px;
            color: #555;
        }

        .completed-courses {
            opacity: 0.6;
        }

        .progress-bar-container {
            margin-top: 10px;
            width: 100%;
            text-align: center;
        }

        .progress-bar-text {
            font-weight: bold;
            color: black;
            margin-top: 5px;
        }

        .progress {
            height: 10px;
            margin-bottom: 10px;
        }

        @media (max-width: 1200px) {
            .card {
                flex: 1 1 calc(25% - 20px);
            }
        }

        @media (max-width: 992px) {
            .card {
                flex: 1 1 calc(33.33% - 20px);
            }
        }

        @media (max-width: 768px) {
            .card {
                flex: 1 1 calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .card {
                flex: 1 1 100%;
            }
        }
    </style>
</head>

<body>
    @extends('layout')

    @section('content')
    <div class="container mt-4">
        <div class="titles font-bold mb-4 fs-3">
            <h1>My Courses</h1>
        </div>

        <div class="mt-10">
            <div class="header-section">
                <h2 class="course-language font-bold">Courses in Progress</h2>
            </div>
            <div class="courses d-flex align-content-start flex-wrap gap-4">
                @foreach ([
                ['title' => 'Java Fundamentals for Beginners', 'description' => 'Learn the basics of Java programming, including syntax, variables, and loops.', 'progress' => 40, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI5B7-SHyi6qSn8CAY8k-1EjzKQsR6DpWN3A&s'],
                ['title' => 'Python for Beginners', 'description' => 'Learn the fundamentals of Python programming, including syntax, data structures, and simple scripts.', 'progress' => 60, 'image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg'],
                ['title' => 'Java for Mobile Development', 'description' => 'Learn to build mobile apps using Java and frameworks like Android SDK.', 'progress' => 20, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI5B7-SHyi6qSn8CAY8k-1EjzKQsR6DpWN3A&s'],
                ['title' => 'Spring Framework Basics', 'description' => 'Understand the fundamentals of Spring to build Java-based web applications.', 'progress' => 55, 'image' => 'https://download.logo.wine/logo/Spring_Framework/Spring_Framework-Logo.wine.png'],
                ['title' => 'Java Web Development with Spring Boot', 'description' => 'Build scalable web apps using Java and Spring Boot, covering RESTful APIs, JPA, and Spring Security.', 'progress' => 35, 'image' => 'https://miro.medium.com/v2/resize:fit:1400/1*vFiGOTV1S8yz0RTIQteTjw.png']
                ] as $course)
                <div class="card" style="width: 18rem;">
                    <img src="{{ $course['image'] }}" class="card-img-top" alt="{{ $course['title'] }}">
                    <div class="card-body d-flex flex-column justify-content-between gap-3">
                        <h5 class="card-title">{{ $course['title'] }}</h5>
                        <p class="card-text">{{ $course['description'] }}</p>
                        <div class="progress-bar-container">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ $course['progress'] }}%;" aria-valuenow="{{ $course['progress'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-bar-text">{{ $course['progress'] }}%</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="allcontent">
            <div class="header-section">
                <h2 class="course-language font-bold mt-20">Completed Courses</h2>
            </div>
            <div class="completed-courses d-flex align-content-start flex-wrap gap-4">
                @foreach ([
                ['title' => 'Java Fundamentals for Beginners', 'description' => 'Learn the basics of Java programming, including syntax, variables, and loops.', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI5B7-SHyi6qSn8CAY8k-1EjzKQsR6DpWN3A&s'],
                ['title' => 'Object-Oriented Programming in Java', 'description' => 'Dive deep into OOP principles with Java, including classes, inheritance, and polymorphism.', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI5B7-SHyi6qSn8CAY8k-1EjzKQsR6DpWN3A&s'],
                ] as $course)
                <div class="card" style="width: 18rem;">
                    <img src="{{ $course['image'] }}" class="card-img-top" alt="{{ $course['title'] }}">
                    <div class="card-body d-flex flex-column justify-content-between gap-3">
                        <h5 class="card-title">{{ $course['title'] }}</h5>
                        <p class="card-text">{{ $course['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endsection
    </div>
</body>

</html>