<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <style>
        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .course-language {
            font-size: 24px;
        }
    </style>
</head>

<body>
    @extends('layout')
    @section('content')
    <div class="titles font-bold mb-4 fs-3">
        <h1>Courses List</h1>
    </div>

    <div class="allcontent">
        <h2 class="course-language font-bold">Python Courses</h2>
        <div class="courses d-flex align-content-start flex-wrap gap-4">
            @foreach ([
            ['title' => 'Python for Beginners', 'description' => 'Learn the fundamentals of Python programming, including syntax, data structures, and simple scripts.', 'image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg'],
            ['title' => 'Data Analysis with Python', 'description' => 'Use Python libraries like Pandas and NumPy to perform data analysis and visualization.', 'image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg'],
            ['title' => 'Python for Machine Learning', 'description' => 'Master machine learning basics using Python and frameworks like TensorFlow or Scikit-learn.', 'image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg'],
            ['title' => 'Web Development with Django', 'description' => 'Build robust web applications using Python and the Django framework.', 'image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg']
            ] as $course)
            <div class="card" style="width: 18rem;">
                <img src="{{ $course['image'] }}" class="card-img-top" alt="{{ $course['title'] }}">
                <div class="card-body d-flex flex-column justify-content-between gap-3">
                    <h5 class="card-title">{{ $course['title'] }}</h5>
                    <p class="card-text">{{ $course['description'] }}</p>
                    <a href="#" class="btn btn-primary">Enroll</a>
                </div>
            </div>
            @endforeach
        </div>

        <h2 class="course-language mt-5 font-bold">Java Courses</h2>
        <div class="courses d-flex align-content-start flex-wrap gap-4">
            @foreach ([
            ['title' => 'Java Fundamentals for Beginners', 'description' => 'Learn the basics of Java programming, including syntax, variables, and loops.', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI5B7-SHyi6qSn8CAY8k-1EjzKQsR6DpWN3A&s'],
            ['title' => 'Object-Oriented Programming in Java', 'description' => 'Dive deep into OOP principles with Java, including classes, inheritance, and polymorphism.', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI5B7-SHyi6qSn8CAY8k-1EjzKQsR6DpWN3A&s'],
            ['title' => 'Spring Framework Basics', 'description' => 'Understand the fundamentals of Spring to build Java-based web applications.', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI5B7-SHyi6qSn8CAY8k-1EjzKQsR6DpWN3A&s'],
            ['title' => 'Java for Mobile Development', 'description' => 'Learn to build mobile apps using Java and frameworks like Android SDK.', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI5B7-SHyi6qSn8CAY8k-1EjzKQsR6DpWN3A&s']
            ] as $course)
            <div class="card" style="width: 18rem;">
                <img src="{{ $course['image'] }}" class="card-img-top" alt="{{ $course['title'] }}">
                <div class="card-body d-flex flex-column justify-content-between gap-3">
                    <h5 class="card-title">{{ $course['title'] }}</h5>
                    <p class="card-text">{{ $course['description'] }}</p>
                    <a href="#" class="btn btn-primary">Enroll</a>
                </div>
            </div>
            @endforeach
        </div>

        <h2 class="course-language mt-5 font-bold">JavaScript Courses</h2>
        <div class="courses d-flex align-content-start flex-wrap gap-4 mb-5">
            @foreach ([
            ['title' => 'JavaScript Essentials', 'description' => 'Learn the fundamentals of JavaScript, including syntax, variables, and DOM manipulation.', 'image' => 'https://media.licdn.com/dms/image/D4D12AQG_8eaFpxIX8g/article-cover_image-shrink_600_2000/0/1685624189443?e=2147483647&v=beta&t=n2AxgBk8PQ5-5Vl761c3u-WUaSCebSD8LYds4yXZijg'],
            ['title' => 'Frontend Development with React', 'description' => 'Build interactive UIs using React, one of the most popular JavaScript libraries.', 'image' => 'https://media.licdn.com/dms/image/D4D12AQG_8eaFpxIX8g/article-cover_image-shrink_600_2000/0/1685624189443?e=2147483647&v=beta&t=n2AxgBk8PQ5-5Vl761c3u-WUaSCebSD8LYds4yXZijg'],
            ['title' => 'JavaScript for Web Development', 'description' => 'Master JavaScript for creating modern, interactive web applications.', 'image' => 'https://media.licdn.com/dms/image/D4D12AQG_8eaFpxIX8g/article-cover_image-shrink_600_2000/0/1685624189443?e=2147483647&v=beta&t=n2AxgBk8PQ5-5Vl761c3u-WUaSCebSD8LYds4yXZijg'],
            ['title' => 'Node.js for Backend Development', 'description' => 'Learn server-side JavaScript development using Node.js and build scalable applications.', 'image' => 'https://media.licdn.com/dms/image/D4D12AQG_8eaFpxIX8g/article-cover_image-shrink_600_2000/0/1685624189443?e=2147483647&v=beta&t=n2AxgBk8PQ5-5Vl761c3u-WUaSCebSD8LYds4yXZijg']
            ] as $course)
            <div class="card" style="width: 18rem;">
                <img src="{{ $course['image'] }}" class="card-img-top" alt="{{ $course['title'] }}">
                <div class="card-body d-flex flex-column justify-content-between gap-3">
                    <h5 class="card-title">{{ $course['title'] }}</h5>
                    <p class="card-text">{{ $course['description'] }}</p>
                    <a href="#" class="btn btn-primary">Enroll</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection
</body>

</html>