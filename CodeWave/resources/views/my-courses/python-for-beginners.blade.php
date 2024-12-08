<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses - Python for Beginners</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .course-header {
            width: 100%;
            height: 300px;
            background-image: url('https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .course-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .course-title {
            color: white;
            font-size: 36px;
            font-weight: bold;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
            text-align: center;
            z-index: 2;
        }

        .progress-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .progress-bar {
            background-color: #f1f1f1;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .progress-bar-inner {
            height: 20px;
            width: 50%;
            background-color: #007BFF;
            border-radius: 5px 0 0 5px;
        }

        .chapter-list {
            list-style: none;
            padding-left: 0;
        }

        .chapter-list li {
            margin-bottom: 15px;
        }

        .chapter-link {
            text-decoration: none;
            color: #007BFF;
            font-size: 18px;
        }

        .chapter-link:hover {
            color: #0056b3;
        }

        .mark-complete {
            display: block;
            text-align: center;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            width: 200px;
        }

        .mark-complete:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    @extends('layout')

    @section('content')
    <a href="/my-courses" class="back-link">
        &#8592; Back to My Courses
    </a>

    <div class="course-header">
        <div class="course-title">Python for Beginners</div>
    </div>

    <div class="progress-container">
        <h2>Course Progress</h2>
        <div class="progress-bar">
            <div class="progress-bar-inner" style="width: 50%;"></div>
        </div>
        <p>50% completed</p>

        <h2 class="mt-20"><strong>Chapters</strong></h2>
        <ul class="chapter-list">
            <li><a href="/my-courses/python-for-beginners/chapter-1" class="chapter-link">Chapter 1: Introduction to Python and setting up your environment</a></li>
            <li><a href="/my-courses/python-for-beginners/chapter-2" class="chapter-link">Chapter 2: Understanding variables, data types, and operators</a></li>
            <li><a href="/my-courses/python-for-beginners/chapter-3" class="chapter-link">Chapter 3: Working with loops and conditionals</a></li>
            <li><a href="/my-courses/python-for-beginners/chapter-4" class="chapter-link">Chapter 4: Defining and using functions</a></li>
            <li><a href="/my-courses/python-for-beginners/chapter-5" class="chapter-link">Chapter 5: Creating and managing Python modules</a></li>
            <li><a href="/my-courses/python-for-beginners/chapter-6" class="chapter-link">Chapter 6: Building a final project</a></li>
        </ul>

        <a href="#" class="mark-complete mt-20">Mark Course as Complete</a>
    </div>

    @endsection
</body>

</html>