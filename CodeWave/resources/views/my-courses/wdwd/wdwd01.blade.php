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
                <li class="active"><a href="/lessons/wdwd/wdwd01">Chapter 1: Setting Up a Django Project and Understanding Its Structure</a></li>
                <li><a href="/lessons/wdwd/wdwd02">Chapter 2: Designing and Managing Databases with Django Models</a></li>
                <li><a href="/lessons/wdwd/wdwd03">Chapter 3: Creating Dynamic Views Using Django Views and Templates</a></li>
                <li><a href="/lessons/wdwd/wdwd04">Chapter 4: Implementing User Authentication and Authorization</a></li>
                <li><a href="/lessons/wdwd/wdwd05">Chapter 5: Deploying Django Applications to Production Servers</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Setting Up a Django Project and Understanding Its Structure</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand how to set up a new Django project</li>
                <li>Learn about the directory structure of a Django project</li>
                <li>Configure Django settings for development</li>
            </ul>

            <h2>1. Introduction to Django</h2>
            <p>
                Django is a high-level Python web framework that encourages rapid development and clean, pragmatic design. It is widely used for building robust and scalable web applications.
            </p>
            <p>
                The first step in working with Django is setting up a project. A Django project consists of multiple apps that work together. Each app is responsible for a specific aspect of the web application.
            </p>

            <h2>2. Setting Up a Django Project</h2>
            <p>
                To create a Django project, make sure you have Python and pip installed on your system. Then, you can use the following command to install Django:
            </p>
            <pre><code>pip install django</code></pre>

            <p>
                Once Django is installed, you can create a new project with the following command:
            </p>
            <pre><code>django-admin startproject myproject</code></pre>

            <p>
                This will create a directory called `myproject` with the following structure:
            </p>
            <pre><code>
myproject/
    manage.py
    myproject/
        __init__.py
        settings.py
        urls.py
        wsgi.py
            </code></pre>

            <h2>3. Understanding the Project Structure</h2>
            <p>
                The project directory contains several important files:
            </p>
            <ul>
                <li><strong>manage.py:</strong> A command-line utility that allows you to interact with your Django project.</li>
                <li><strong>settings.py:</strong> Contains settings and configuration for your Django project, including database setup, middleware, and installed apps.</li>
                <li><strong>urls.py:</strong> The URL routing file, where you define the URLs for your project and map them to views.</li>
                <li><strong>wsgi.py:</strong> This file is used to serve your Django project in a production environment.</li>
            </ul>

            <h2>4. Running the Development Server</h2>
            <p>
                To run the development server and see your project in action, use the following command:
            </p>
            <pre><code>python manage.py runserver</code></pre>

            <p>
                By default, the development server runs on <code>http://127.0.0.1:8000/</code>.
            </p>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we learned how to set up a Django project, explored its directory structure, and ran the development server. The next chapter will focus on designing and managing databases with Django models.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>