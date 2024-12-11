<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 2</title>
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
                <li><a href="/lessons/sfb/sfb01">Chapter 1: Introduction to the Spring Framework and its features</a></li>
                <li class="active"><a href="/lessons/sfb/sfb02">Chapter 2: Setting up a Spring Boot application</a></li>
                <li><a href="/lessons/sfb/sfb03">Chapter 3: Working with Spring Dependency Injection (DI)</a></li>
                <li><a href="/lessons/sfb/sfb04">Chapter 4: Creating RESTful APIs with Spring Web</a></li>
                <li><a href="/lessons/sfb/sfb05">Chapter 5: Testing and deploying Spring applications</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Setting up a Spring Boot application</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to create a Spring Boot application</li>
                <li>Understand how to configure a Spring Boot project</li>
                <li>Set up your development environment</li>
                <li>Run and test a basic Spring Boot application</li>
            </ul>

            <h2>1. Creating a Spring Boot Project</h2>
            <p>
                To set up a Spring Boot application, you can use the Spring Initializr, which simplifies the process of creating a new project:
            </p>
            <ul>
                <li>Visit <a href="https://start.spring.io" target="_blank">Spring Initializr</a></li>
                <li>Select your project type (Maven or Gradle)</li>
                <li>Choose your Java version</li>
                <li>Add necessary dependencies such as Spring Web, Spring Boot DevTools, and others</li>
                <li>Click "Generate" to download the project</li>
            </ul>

            <h2>2. Configuring the Application</h2>
            <p>
                Once the project is generated, you can configure it by editing the <code>application.properties</code> file. For example, to set the server port, you can add:
            </p>
            <pre>
                server.port=8081
            </pre>
            <p>
                You can also configure database settings, logging, and other properties in this file.
            </p>

            <h2>3. Running the Application</h2>
            <p>
                To run your Spring Boot application:
            </p>
            <ul>
                <li>Open a terminal and navigate to the project directory</li>
                <li>For Maven, run: <code>mvn spring-boot:run</code></li>
                <li>For Gradle, run: <code>gradle bootRun</code></li>
            </ul>
            <p>
                Once the application is running, navigate to <code>http://localhost:8080</code> (or your configured port) in your browser to see the application.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>


</html>