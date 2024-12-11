<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <style>
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        .card button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .card button:hover {
            background-color: #0056b3;
        }

        .back-link {
            font-size: 24px;
            color: #007BFF;
            text-decoration: none;
            margin-top: -20px;
        }

        .back-link:hover {
            color: #0056b3;
        }

        .search-container {
            display: flex;
            align-items: center;
            margin: 20px 0;
            margin-right: 37%;
        }

        .search-input {
            width: 250px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-right: 10px;
        }

        .search-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
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
    <div class="titles font-bold mb-4 fs-3">
        <a href="/courses" class="back-link">
            &#8592;
        </a>
        <h1>Java Courses</h1>
    </div>

    <div class="allcontent mt-10">
        <div class="courses d-flex align-content-start flex-wrap gap-4 mb-10">
            @foreach ([
            ['title' => 'Java Fundamentals for Beginners', 'description' => 'Learn the basics of Java programming, including syntax, variables, and loops.', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI5B7-SHyi6qSn8CAY8k-1EjzKQsR6DpWN3A&s' , 'id' => 6],
            ['title' => 'Object-Oriented Programming in Java', 'description' => 'Dive deep into OOP principles with Java, including classes, inheritance, and polymorphism.', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI5B7-SHyi6qSn8CAY8k-1EjzKQsR6DpWN3A&s' , 'id' => 7],
            ['title' => 'Java for Mobile Development', 'description' => 'Learn to build mobile apps using Java and frameworks like Android SDK.', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI5B7-SHyi6qSn8CAY8k-1EjzKQsR6DpWN3A&s' , 'id' => 8],
            ['title' => 'Spring Framework Basics', 'description' => 'Understand the fundamentals of Spring to build Java-based web applications.', 'image' => 'https://download.logo.wine/logo/Spring_Framework/Spring_Framework-Logo.wine.png' , 'id' => 9],
            ['title' => 'Java Web Development with Spring Boot', 'description' => 'Build scalable web apps using Java and Spring Boot, covering RESTful APIs, JPA, and Spring Security.', 'image' => 'https://miro.medium.com/v2/resize:fit:1400/1*vFiGOTV1S8yz0RTIQteTjw.png' , 'id' => 10]
            ] as $course)
            <div class="card" style="width: 18rem;">
                <img src="{{ $course['image'] }}" class="card-img-top" alt="{{ $course['title'] }}">
                <div class="card-body d-flex flex-column justify-content-between gap-3">
                    <h5 class="card-title">{{ $course['title'] }}</h5>
                    <p class="card-text">{{ $course['description'] }}</p>
                    @if (!$isAuthenticated)
                    <a href="#" class="btn btn-primary">Enroll</a>

                    @else
       
                    @if ($isEnrollmentExists($course['id']))
                        <a href="/<?php echo $redirectThrough($course['id'], $isEnrollmentExists($course['id']) )?>" class="btn btn-primary">
                        View
                        </a>
                        @else
                        <a href="<?php echo $redirectThrough($course['id'], $isEnrollmentExists($course['id']) )?>" class="btn btn-primary">
                        Enroll
                        </a>
                        @endif 
                   
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection
    <script>
        function searchFunction() {
            var query = document.getElementById('search').value;
            console.log("Searching for:", query);
        }
    </script>
</body>

</html>