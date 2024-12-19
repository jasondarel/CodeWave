<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 10px;
            padding: 20px;
            box-sizing: border-box;
        }

        .courses {
            display: flex;
            flex-direction: row;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            overflow: hidden;
            transition: transform 0.3s ease;
            min-width: 220px;
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

        .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
            margin-left: 700px;
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

        .course-language {
            font-size: 25px;
        }

        @media (max-width: 1200px) {
            .container {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }

        @media (max-width: 992px) {
            .container {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .container {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }

        @media (max-width: 480px) {
            .container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <?php
    $course_data_info = [
        1 =>  [ 'image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg'],
        2 => ['image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg'],
        3 => ['image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg'],
        4 => ['image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg'],
        5 => ['image' => 'https://imagedelivery.net/qc7VvyphMGWFiPVvTbB-ww/swapps.com/2016/02/simply-django-announcements.jpg/w=1024,h=576'],
        6 => ['image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg'],
        7=> ['image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg'],
        8 => ['image' => 'https://blog.appseed.us/content/images/2021/08/icons-flask-x500w.png'],
        9 => ['image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg'],
        10 => ['image' => 'https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg'],
        11 => ['image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI5B7-SHyi6qSn8CAY8k-1EjzKQsR6DpWN3A&s' ],
        12 => [ 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI5B7-SHyi6qSn8CAY8k-1EjzKQsR6DpWN3A&s' ],
        13 => ['image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI5B7-SHyi6qSn8CAY8k-1EjzKQsR6DpWN3A&s' ],
        14=> ['image' => 'https://download.logo.wine/logo/Spring_Framework/Spring_Framework-Logo.wine.png'],
        15 => ['image' => 'https://miro.medium.com/v2/resize:fit:1400/1*vFiGOTV1S8yz0RTIQteTjw.png'],
        16 => ['image' => 'https://media.licdn.com/dms/image/D4D12AQG_8eaFpxIX8g/article-cover_image-shrink_600_2000/0/1685624189443?e=2147483647&v=beta&t=n2AxgBk8PQ5-5Vl761c3u-WUaSCebSD8LYds4yXZijg'],
        17 => ['image' => 'https://media.licdn.com/dms/image/D4D12AQG_8eaFpxIX8g/article-cover_image-shrink_600_2000/0/1685624189443?e=2147483647&v=beta&t=n2AxgBk8PQ5-5Vl761c3u-WUaSCebSD8LYds4yXZijg'],
        18 => ['image' => 'https://i.pinimg.com/originals/5c/7b/53/5c7b53a7be1dd267f24f7559584d1345.jpg'],
        19 => ['image' => 'data:image/png;base64,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1/YqwmrmycK7cT+288GYMr3fHMyzVIj/1928YYGBM8bTr2c30dUIMjCbXR2JKc7tlQhVtDDP+MsROcPw3xeglMHzIcMQHZX74ewwW4R8iK3+eVBaxCpIucUAkdPFtgYIeAaLa//pikZnpkTl+bE+AqukK1dlELYqs2Zyct0YxrlRpA3XyvJ+9vVEjGyj2omiBJfpyDbE9pPirQF/C2u/K8NX/odRmrrtLGKZSuvsjhlS0WwTrGbctURbx+q+qRXlT2KfiS7tirClylA368VfA4Ns7yuUjMGvZXD3chaotmbzxx8BBmRH0ZeJItbvR8zzindUidnz80TONkasf2Nlw8RepXPsxIQX5pdQJfK02hLvEVE22uz7amhrgTvitj1KLyfgF6Le44X7C7J9Ve6bV01InLwHbk7sprn/wR1luzwK9+Vk32hNzz9PzlI4J1xxC/bJPB6hDYc6dnpra4IszWKY5+hig8ODp+O6nu15e+irmBTSUDFTNf5v/A9BEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEOTP8V/Aki89PhevHAAAAABJRU5ErkJggg=='],
        20 => ['image' => 'https://miro.medium.com/v2/resize:fit:1400/1*f7ztMaMM0etsFHpEfkdiwA.png'],
    ]
    ?>
    @extends('layout')

    @section('content')
    <div class="container mt-4">
        <div class="titles font-bold mb-4 fs-3">
            <h1>My Courses</h1>
        </div>

       
            <!-- <input type="text" id="search" class="search-input" placeholder="Search..." />
            <button  onclick="searchFunction()">Search</button> -->
            <form method="GET" action="/my-courses" class="search-container mt-10">
                <input type="text" name="search" placeholder="Search..." class="search-input" value="{{ request('search') }}">
                <button class="search-button" type="submit">Search</button>
            </form>


        <div class="mt-10">
            <div class="header-section">
                <h2 class="course-language font-bold">Courses in Progress</h2>
            </div>
            <div class="courses align-content-start flex-wrap gap-3.5 w-[1500px] ">
                @foreach ($userCourses as $course)
                @if ((int)$percentage($course->id) !== 100)

                <div class="card" style="width: 18rem;">
                    <img src="{{ $course_data_info[$course->id]["image"] }}" class="card-img-top" alt="{{ $course->name }}">
                    <div class="card-body d-flex flex-column justify-content-between gap-3">
                        <h5 class="card-title">{{ $course->name }}</h5>
                        <p class="card-text">{{ $course->description }}</p>
                        <div class="progress-bar-container">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ $percentage($course->id) }}%;" aria-valuenow="{{$percentage($course->id)}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-bar-text">{{ $percentage($course->id) }}%</span>
                        </div>
                        <a href="/{{$redirectTo($course->id)}}" class="btn btn-primary">View</a>
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
            <div class="completed-courses d-flex align-content-start flex-wrap gap-3.5 w-[1500px]">
                @foreach ($userCourses as $course)
                @if ((int)$percentage($course->id) === 100)

                <div class="card" style="width: 18rem;">
                    <img src="{{ $course_data_info[$course->id]["image"] }}" class="card-img-top" alt="{{ $course->name }}">
                    <div class="card-body d-flex flex-column justify-content-between gap-3">
                        <h5 class="card-title">{{ $course->name }}</h5>
                        <p class="card-text">{{ $course->description }}</p>

                        <a href="/{{$redirectTo($course->id)}}" class="btn btn-primary">View</a>
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