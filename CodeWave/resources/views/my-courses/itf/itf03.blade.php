<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 3</title>
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
                <li><a href="/lessons/itf/itf01">Chapter 1: Introduction to Flask and Setting up a Flask Environment</a></li>
                <li><a href="/lessons/itf/itf02">Chapter 2: Building Your First Flask App</a></li>
                <li class="active"><a href="/lessons/itf/itf03">Chapter 3: Understanding Flask Routing and HTTP Methods</a></li>
                <li><a href="/lessons/itf/itf04">Chapter 4: Handling Form Data and Requests in Flask</a></li>
                <li><a href="/lessons/itf/itf05">Chapter 5: Creating Templates and Rendering HTML with Jinja2</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Understanding Flask Routing and HTTP Methods</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how Flask handles routing</li>
                <li>Understand HTTP methods (GET, POST, etc.) and how to handle them in Flask</li>
                <li>Learn how to define dynamic URLs in Flask</li>
                <li>Explore the Flask request object for accessing incoming data</li>
            </ul>

            <h2>1. Flask Routing</h2>
            <p>
                Flask uses routes to map URLs to functions. A route is a decorator used to associate a URL with a function. Here's an example:
            </p>
            <pre>
                @app.route('/')
                def home():
                    return "Welcome to the Home Page!"
            </pre>
            <p>
                The `@app.route()` decorator is used to tell Flask which function should handle the incoming request for a given URL. In this case, it maps the `/` URL to the `home()` function.
            </p>

            <h2>2. HTTP Methods (GET, POST, etc.)</h2>
            <p>
                Flask supports various HTTP methods such as GET, POST, PUT, DELETE, etc. The most common methods are GET (to retrieve data) and POST (to submit data).
            </p>
            <p>
                By default, Flask routes handle GET requests. However, you can specify which HTTP methods a route should accept by passing the `methods` argument:
            </p>
            <pre>
                @app.route('/submit', methods=['POST'])
                def submit_form():
                    return "Form submitted successfully!"
            </pre>
            <p>
                In this example, the `/submit` route will only accept POST requests.
            </p>

            <h2>3. Dynamic Routes</h2>
            <p>
                Flask allows you to define dynamic routes by using variables in the URL. For example, if you want to capture an ID in the URL, you can define a route like this:
            </p>
            <pre>
                @app.route('/user/<username>')
                def show_user_profile(username):
                    return f'User {username}'
            </pre>
            <p>
                In this example, `<username>` is a variable that Flask will capture and pass to the `show_user_profile()` function.
            </p>

            <h2>4. The Request Object</h2>
            <p>
                Flask provides a `request` object that contains all the data sent with a request, including form data, query parameters, and more. Here's an example of how to access form data:
            </p>
            <pre>
                from flask import request

                @app.route('/submit', methods=['POST'])
                def submit_form():
                    name = request.form['name']
                    return f'Hello {name}!'
            </pre>
            <p>
                In this example, the form data sent via POST is accessed using `request.form`.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>