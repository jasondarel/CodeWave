<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend Development with React</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .course-header {
            width: 100%;
            height: 400px;
            background-image: url('https://i.pinimg.com/originals/5c/7b/53/5c7b53a7be1dd267f24f7559584d1345.jpg');
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
            font-size: 48px;
            font-weight: bold;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
            text-align: center;
            z-index: 2;
        }

        .back-link {
            font-size: 24px;
            color: #007BFF;
            text-decoration: none;
            margin-top: 10px;
            margin-left: 20px;
            display: inline-block;
        }

        .back-link:hover {
            color: #0056b3;
        }

        .course-content {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .course-section {
            margin-bottom: 20px;
        }

        .course-section h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .course-section p {
            font-size: 18px;
            color: #555;
        }

        .cta-button {
            display: block;
            text-align: center;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .cta-button:hover {
            background-color: #0056b3;
        }

        .styled-list {
            list-style: none;
            padding-left: 0;
        }

        .styled-list li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 18px;
            color: #555;
        }

        .styled-list li::before {
            content: "\f058";
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            font-size: 20px;
            color: #007BFF;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    @extends('layout')

    @section('content')
    <a href="javascript:history.back()" class="back-link">
        &#8592;
    </a>

    <div class="course-header">
        <div class="course-title">Frontend Development with React</div>
    </div>

    <div class="course-content">
        <div class="course-section">
            <h2><strong>Course Overview</strong></h2>
            <p>
                This course is designed for individuals who want to learn frontend development with React. You’ll dive into the core concepts of React, including components, hooks, state management, and routing. By the end of this course, you’ll be able to create dynamic, interactive, and scalable frontend applications using React.
            </p>
        </div>

        <div class="course-section mt-20">
            <h2><i class="fas fa-list-ul"></i> <strong>What You'll Learn</strong></h2>
            <ul class="styled-list">
                <li>Understanding React components and JSX</li>
                <li>Managing state and props in React</li>
                <li>Using React hooks (useState, useEffect, etc.)</li>
                <li>React Router for building multi-page applications</li>
                <li>Optimizing React apps for performance</li>
            </ul>
        </div>
     
        <a href="/enroll/18" class="cta-button mt-20">Enroll Now</a>
    </div>

    @endsection
</body>

</html>