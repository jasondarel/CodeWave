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
                <li class="active"><a href="/lessons/jwdwsb/jwdwsb01">Chapter 1: Setting up a Spring Boot Project from Scratch</a></li>
                <li><a href="/lessons/jwdwsb/jwdwsb02">Chapter 2: Building and Consuming RESTful APIs</a></li>
                <li><a href="/lessons/jwdwsb/jwdwsb03">Chapter 3: Connecting Your Spring Boot Application to a Database</a></li>
                <li><a href="/lessons/jwdwsb/jwdwsb04">Chapter 4: Implementing Authentication and Authorization using Spring Security</a></li>
                <li><a href="/lessons/jwdwsb/jwdwsb05">Chapter 5: Testing Your Spring Boot Applications</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Setting up a Spring Boot Project from Scratch</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to create a Spring Boot project from scratch</li>
                <li>Understand the project structure and dependencies</li>
                <li>Set up Maven or Gradle for managing dependencies</li>
                <li>Get familiar with Spring Boot’s built-in features</li>
            </ul>

            <h2>1. Introduction</h2>
            <p>
                In this chapter, you will learn how to set up a Spring Boot project from scratch. We will use Spring Initializr to generate a project and explore the basic configuration and structure of a Spring Boot application.
            </p>

            <h2>2. Creating a Spring Boot Project with Spring Initializr</h2>
            <p>
                Spring Initializr is a web-based tool that simplifies the process of setting up a Spring Boot project. You can generate a project by visiting the official Spring Initializr website:
            </p>
            <ul>
                <li>Go to <a href="https://start.spring.io" target="_blank">start.spring.io</a></li>
                <li>Select the project type (Maven or Gradle)</li>
                <li>Choose the Java version</li>
                <li>Add dependencies such as Spring Web, Spring Data JPA, and Spring Boot DevTools</li>
                <li>Click "Generate" to download your project</li>
            </ul>

            <h2>3. Project Structure</h2>
            <p>
                Once you’ve generated your project, unzip it and open it in your IDE. A basic Spring Boot project includes the following structure:
            </p>
            <pre>
                src/
                    main/
                        java/
                            com/
                                example/
                                    demo/
                                        DemoApplication.java
                        resources/
                            application.properties
                            static/
                            templates/
            </pre>
            <p>
                - <code>DemoApplication.java</code>: This is the entry point of your Spring Boot application.
                - <code>application.properties</code>: This file is where you can configure various settings for your Spring Boot app.
                - <code>static/</code>: This directory holds static files like CSS, JavaScript, and images.
                - <code>templates/</code>: This directory holds HTML templates, which are used by Spring MVC for rendering views.
            </p>

            <h2>4. Running Your Spring Boot Application</h2>
            <p>
                To run your Spring Boot application, open a terminal and navigate to the project directory. Use the following command for Maven:
            </p>
            <pre>
                mvn spring-boot:run
            </pre>
            <p>
                If you’re using Gradle, run:
            </p>
            <pre>
                gradle bootRun
            </pre>
            <p>
                After running the application, open your browser and navigate to <code>http://localhost:8080</code> to see the default Spring Boot welcome page.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>