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
            /* Center the text and bar */
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
    <?php 
        $course_data_info = [
            1 => ['image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg'],
            2 => ['image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI5B7-SHyi6qSn8CAY8k-1EjzKQsR6DpWN3A&s'],
            3 => ['image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI5B7-SHyi6qSn8CAY8k-1EjzKQsR6DpWN3A&s'],
            4 => ['image' => 'https://download.logo.wine/logo/Spring_Framework/Spring_Framework-Logo.wine.png'],
            5 => ['image' => 'https://miro.medium.com/v2/resize:fit:1400/1*vFiGOTV1S8yz0RTIQteTjw.png']
        ]
    ?>
    @extends('layout')

    @section('content')
    <div class="container mt-4">
        <div class="titles font-bold mb-4 fs-3">
            <h1>My Courses</h1>
        </div>

        <div class="search-container mt-28">
            <input type="text" id="search" class="search-input" placeholder="Search..." />
            <button class="search-button" onclick="searchFunction()">Search</button>
        </div>

        <div class="mt-10">
            <div class="header-section">
                <h2 class="course-language font-bold">Courses in Progress</h2>
            </div>
            <div class="courses d-flex align-content-start flex-wrap gap-4 ">
                @foreach ($userCourses as $course)
                    @if ($percentage($course->id) !== 100)

                    <div class="card" style="width: 18rem;">
                    <img src="{{ $course_data_info[1]["image"] }}" class="card-img-top" alt="{{ $course->name }}">
                    <div class="card-body d-flex flex-column justify-content-between gap-3">
                        <h5 class="card-title">{{ $course->name }}</h5>
                        <p class="card-text">{{ $course->description }}</p>
                        <div class="progress-bar-container">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ $percentage($course->id) }}%;" aria-valuenow="{{$percentage($course->id)}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-bar-text">{{ $percentage($course->id) }}%</span>
                        </div>
                    </div>
                </div>
                    @endif
               
                @endforeach
            </div>
        </div>

        <div class="allcontent">
            <div class="header-section">
                <h2 class="course-language font-bold mt-20">Completed Courses</h2>
            </div>
            <div class="completed-courses d-flex align-content-start flex-wrap gap-4">
                @foreach ($userCourses as $course)
                @if ($percentage($course->id) === 100)
                
              
                <div class="card" style="width: 18rem;">
                    <img src="{{ $course['image'] }}" class="card-img-top" alt="{{ $course['title'] }}">
                    <div class="card-body d-flex flex-column justify-content-between gap-3">
                        <h5 class="card-title">{{ $course->name }}</h5>
                        <p class="card-text">{{ $course->description }}</p>
                    </div>
                </div>  
                @endif
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
    </div>
</body>

</html>