<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dashboard-container {
            padding: 20px;
        }

        .user-info p {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .news-section {
            margin-top: 50px;
        }

        .announcements-section {
            margin-top: 100px;
        }

        .news-item,
        .announcement-item {
            padding: 15px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            background-color: #f8f9fa;
            margin-bottom: 15px;
        }

        .news-item h3,
        .announcement-item h3 {
            margin-bottom: 10px;
        }

        .news-item p,
        .announcement-item p {
            margin-bottom: 5px;
        }

        .news-item .image,
        .announcement-item .image {
            background-color: #d1d1d1;
            width: 100%;
            height: 200px;
            margin-bottom: 15px;
        }

        .news-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .announcement-item {
            display: flex;
            flex-direction: column;
            padding: 20px;
            margin-bottom: 10px;
        }

        .welcome-header {
            font-size: xx-large;
            margin-bottom: 10px;
        }

        .pagination {
            margin-top: 20px;
        }

        .no-margin {
            margin-top: 0 !important;
        }

        .user-info .spasi {
            margin-bottom: 50px;
            display: block;
        }

        .titles h1 {
            border-bottom: 2px solid #10375c;
            display: inline-block;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        .section-divider {
            border: 0;
            height: 2px;
            background-color: #10375c;
            margin-top: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    @extends('layout')

    @section('content')

    <div class="dashboard-container">
        @auth
        <h1 class="welcome-header">Welcome Back, <strong style="color: #10375c;">{{ Auth::user()->name }}</strong>!</h1>

        <div class="user-info">
            <p>Courses Enrolled: {{$coursesEnrolled}}</p>
            <p>Lessons Completed: {{$lessonsCompleted}}</p>
            <p>Rank: {{ucfirst($rank)}}</p>
            <span class="spasi"></span>
        </div>
        @endauth

        <div class="news-section mt-28">
            <div class="titles font-bold mb-4 fs-3">
                <h1>Latest News</h1>
                <hr class="section-divider">
            </div>

            <div class="row">
                <div class="col-md-4">
                    <a href="/news1">
                        <div class="news-item">
                            <h3><strong>Understanding AI in Modern Development</strong></h3>
                            <img src="https://plus.unsplash.com/premium_photo-1683121710572-7723bd2e235d?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="AI Development">
                            <p>Discover how artificial intelligence is shaping the future of software development.</p>
                            <small>Published on: December 1, 2024</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/news2">
                        <div class="news-item">
                            <h3><strong>Top 10 Programming Languages for 2024</strong></h3>
                            <img src="https://images.unsplash.com/photo-1555952494-efd681c7e3f9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Top 10 Languages">
                            <p>Explore the most in-demand programming languages in the tech industry today.</p>
                            <small>Published on: November 30, 2024</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/news3">
                        <div class="news-item">
                            <h3><strong>Introduction to Quantum Computing</strong></h3>
                            <img src="https://www.ncsa.illinois.edu/wp-content/uploads/2024/08/Quantum-computing.jpg" alt="Quantum Computing">
                            <p>Learn the basics of quantum computing and why it matters for future developers.</p>
                            <small>Published on: November 28, 2024</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="announcements-section mb-10">
            <div class="titles font-bold mb-4 fs-3">
                <h1>Announcements</h1>
                <hr class="section-divider">
            </div>

            <div class="announcement-item">
                <h3>New Course: <strong>Advanced Python</strong></h3>
                <p>We have launched a new course on Advanced Python. Enroll now to deepen your skills!</p>
                <small>Created on: November 25, 2024</small>
            </div>
            <div class="announcement-item">
                <h3>Maintenance Scheduled</h3>
                <p>Our platform will undergo maintenance on December 10, 2024. Expect downtime from 1 AM to 3 AM.</p>
                <small>Created on: November 20, 2024</small>
            </div>
            <div class="announcement-item">
                <h3>Congratulations to Top Performers</h3>
                <p>Congratulations to our top performers for the month of November! Keep up the great work.</p>
                <small>Created on: November 15, 2024</small>
            </div>
        </div>
    </div>

    @endsection

</body>

</html>