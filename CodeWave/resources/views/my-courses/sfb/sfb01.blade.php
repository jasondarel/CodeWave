<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 1</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-direction: row;
            height: 100%;
        }

        .sidebar {
            width: 250px;
            background-color: #f8f9fa;
            padding: 20px;
            border-right: 1px solid #ddd;
            position: sticky;
            top: 0;
            height: 100%;
            overflow-y: auto;
        }

        .chapter-list {
            margin-left: 20px;
            flex: 0 0 250px;
            padding-right: 20px;
            border-right: 1px solid #ddd;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background-color: #fff;
            height: 100vh;
        }

        .chapter-list h3 {
            margin-bottom: 10px;
        }

        .chapter-list ul {
            list-style: none;
            padding: 0;
        }

        .chapter-list ul li {
            margin-bottom: 10px;
        }

        .chapter-list ul li a {
            text-decoration: none;
            color: #007BFF;
            font-size: 16px;
        }

        .chapter-list ul li a:hover {
            text-decoration: underline;
        }

        .chapter-list ul li.active a {
            font-weight: bold;
            color: #0056b3;
        }

        .main-content h1 {
            font-size: 28px;
            color: #333;
        }

        .main-content h2 {
            font-size: 24px;
            color: #555;
            margin-top: 70px;
        }

        .main-content p {
            font-size: 18px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .next-chapter {
            text-align: center;
            margin-top: 40px;
        }

        .next-chapter-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #FFC107;
            color: #003366;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 20px;
        }

        .next-chapter-button:hover {
            background-color: #e0a800;
        }
    </style>
</head>

<body>

    @extends('layout')

    @section('content')
    <div class="container">

        <div class="chapter-list">
            <h3>CHAPTERS</h3>
            <ul>
                <li class="active"><a href="/lessons/sfb/sfb01">Chapter 1: Introduction to the Spring Framework and its features</a></li>
                <li><a href="/lessons/sfb/sfb02">Chapter 2: Setting up a Spring Boot application</a></li>
                <li><a href="/lessons/sfb/sfb03">Chapter 3: Working with Spring Dependency Injection (DI)</a></li>
                <li><a href="/lessons/sfb/sfb04">Chapter 4: Creating RESTful APIs with Spring Web</a></li>
                <li><a href="/lessons/sfb/sfb05">Chapter 5: Testing and deploying Spring applications</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Introduction to the Spring Framework and its features</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the core features of the Spring Framework</li>
                <li>Learn the benefits of using Spring in Java applications</li>
                <li>Explore the various Spring modules and their purposes</li>
                <li>Gain insights into the evolution of Spring</li>
            </ul>

            <h2>1. Overview of Spring Framework</h2>
            <p>
                The Spring Framework is a powerful, lightweight, and popular framework for developing enterprise-level Java applications. It simplifies development by providing comprehensive infrastructure support and a wide range of features for modern application development.
            </p>

            <h2>2. Key Features of Spring Framework</h2>
            <p>
                Some of the core features of Spring include:
            </p>
            <ul>
                <li>Dependency Injection (DI): Simplifies object creation and dependencies management.</li>
                <li>Aspect-Oriented Programming (AOP): Enables modularizing cross-cutting concerns.</li>
                <li>Spring Data: Simplifies database interactions.</li>
                <li>Spring Web: Facilitates the creation of RESTful APIs and web applications.</li>
                <li>Testing Support: Provides tools for easier unit and integration testing.</li>
            </ul>

            <h2>3. Benefits of Using Spring</h2>
            <p>
                Using Spring in your projects brings several advantages:
            </p>
            <ul>
                <li>Improved testability and modularity</li>
                <li>Wide community support and extensive documentation</li>
                <li>Reduced boilerplate code with intuitive APIs</li>
                <li>Integration with various technologies and frameworks</li>
            </ul>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>