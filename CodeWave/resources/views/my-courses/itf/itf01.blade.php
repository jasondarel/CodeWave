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
                <li class="active"><a href="/lessons/itf/itf01">Chapter 1: Introduction to Flask and Setting up a Flask Environment</a></li>
                <li><a href="/lessons/itf/itf02">Chapter 2: Building Your First Flask App</a></li>
                <li><a href="/lessons/itf/itf03">Chapter 3: Understanding Flask Routing and HTTP Methods</a></li>
                <li><a href="/lessons/itf/itf04">Chapter 4: Handling Form Data and Requests in Flask</a></li>
                <li><a href="/lessons/itf/itf05">Chapter 5: Creating Templates and Rendering HTML with Jinja2</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Introduction to Flask and Setting up a Flask Environment</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the basics of Flask framework</li>
                <li>Set up a Flask environment on your local machine</li>
                <li>Learn the structure of a Flask project</li>
                <li>Understand how Flask works with routes and templates</li>
            </ul>

            <h2>1. Introduction to Flask</h2>
            <p>
                Flask is a lightweight web framework for Python. It is designed to be simple and flexible, making it an excellent choice for building small to medium-sized web applications.
                Flask follows the WSGI (Web Server Gateway Interface) standard, which allows it to communicate with web servers.
            </p>

            <h2>2. Setting Up a Flask Environment</h2>
            <p>
                To begin working with Flask, you need to set up a Python environment on your local machine. Here's how to do that:
            <ol>
                <li>Install Python: Download and install Python from <a href="https://www.python.org/downloads/">python.org</a>.</li>
                <li>Set up a virtual environment: This is useful to manage dependencies for different projects.</li>
                <pre>
                    python -m venv flask_env
                    source flask_env/bin/activate  # On Windows use flask_env\Scripts\activate
                    </pre>
                <li>Install Flask: You can install Flask using pip.</li>
                <pre>
                    pip install Flask
                    </pre>
            </ol>
            </p>

            <h2>3. Project Structure</h2>
            <p>
                A simple Flask project structure typically looks like this:
            <pre>
                /my_flask_app
                    /templates
                        index.html
                    app.py
                </pre>
            The `app.py` file contains the main Flask application, and the `templates` folder holds HTML files for rendering.
            </p>

            <h2>4. Running Your First Flask App</h2>
            <p>
                After setting up the environment and creating the basic project structure, you can write a simple Flask app:
            <pre>
                from flask import Flask

                app = Flask(__name__)

                @app.route('/')
                def home():
                    return "Hello, Flask!"

                if __name__ == '__main__':
                    app.run(debug=True)
                </pre>
            This will run a basic web server, and when you visit `http://127.0.0.1:5000/`, you'll see the message "Hello, Flask!".
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>