<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Courses</title>
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
        <h1>Python Courses</h1>
    </div>

    <div class="allcontent mt-10">
        <div class="courses d-flex align-content-start flex-wrap gap-4 mb-10">
            @foreach ([
            ['title' => 'Python for Beginners', 'description' => 'Learn the fundamentals of Python programming, including syntax, data structures, and simple scripts.', 'image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg', 'id' => 1],
            ['title' => 'Data Analysis with Python', 'description' => 'Use Python libraries like Pandas and NumPy to perform data analysis and visualization.', 'image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg', 'id' => 2],
            ['title' => 'Python for Machine Learning', 'description' => 'Master machine learning basics using Python and frameworks like TensorFlow or Scikit-learn.', 'image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg', 'id' => 3],
            ['title' => 'Advanced Python Programming', 'description' => 'Learn advanced Python concepts like decorators, generators, and performance optimization, along with the standard library.', 'image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg', 'id' => 4],
            ['title' => 'Web Development with Django', 'description' => 'Build robust web applications using Python and the Django framework.', 'image' => 'https://imagedelivery.net/qc7VvyphMGWFiPVvTbB-ww/swapps.com/2016/02/simply-django-announcements.jpg/w=1024,h=576', 'id' => 5]
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
        <div class="courses d-flex align-content-start flex-wrap gap-4 mb-10">
            @foreach ([
            ['title' => 'Python for Automation', 'description' => 'Automate repetitive tasks like file management and web scraping with Python.', 'image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg', 'id' => 6],
            ['title' => 'Python for Game Development', 'description' => 'Create games with Python using PyGame and learn core game mechanics.', 'image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg' , 'id' => 7],
            ['title' => 'Introduction to Flask', 'description' => 'Build lightweight web apps with Python and the Flask framework.', 'image' => 'https://blog.appseed.us/content/images/2021/08/icons-flask-x500w.png', 'id' => 8],
            ['title' => 'Python for Cybersecurity', 'description' => 'Learn to write scripts for network scanning, penetration testing, and data encryption.', 'image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg' , 'id' => 9],
            ['title' => 'Data Visualization with Python', 'description' => 'Master visualization tools like Matplotlib, Seaborn, and Plotly.', 'image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg', 'id' => 10]
            ] as $course)
            <div class="card" style="width: 18rem;">
                <img src="{{ $course['image'] }}" class="card-img-top" alt="{{ $course['title'] }}">
                <div class="card-body d-flex flex-column justify-content-between gap-3">
                    <h5 class="card-title">{{ $course['title'] }}</h5>
                    <p class="card-text">{{ $course['description'] }}</p>
                    @if (!$isAuthenticated)
                    <a href="#" class="btn btn-primary">Enroll</a>

                    @else
       
                    <a href="<?php echo $redirectThrough($course['id'], $isEnrollmentExists($course['id']) )?>" class="btn btn-primary">
                        @if ($isEnrollmentExists($course['id']))
                        View
                        @else
                        Enroll  
                        @endif 
                    </a>
                   
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