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
                <li><a href="/lessons/itf/itf01">Chapter 1: Introduction to Flask and Setting up a Flask Environment</a></li>
                <li class="active"><a href="/lessons/itf/itf02">Chapter 2: Building Your First Flask App</a></li>
                <li><a href="/lessons/itf/itf03">Chapter 3: Understanding Flask Routing and HTTP Methods</a></li>
                <li><a href="/lessons/itf/itf04">Chapter 4: Handling Form Data and Requests in Flask</a></li>
                <li><a href="/lessons/itf/itf05">Chapter 5: Creating Templates and Rendering HTML with Jinja2</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Building Your First Flask App</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to set up a basic Flask app</li>
                <li>Understand the structure of a Flask app</li>
                <li>Learn how to define routes and handle HTTP requests</li>
                <li>Create dynamic responses and render HTML templates</li>
            </ul>

            <h2>1. Setting Up Your First Flask App</h2>
            <p>
                After setting up the Flask environment in Chapter 1, let's now create a simple Flask application.
                Create a file named `app.py` and add the following code:
            </p>
            <pre>
                from flask import Flask

                app = Flask(__name__)

                @app.route('/')
                def home():
                    return "Welcome to my first Flask app!"

                if __name__ == '__main__':
                    app.run(debug=True)
            </pre>
            <p>
                This is a basic Flask app with one route, `/`, that returns a string when accessed.
                Run this app by executing `python app.py`, and visit `http://127.0.0.1:5000/` in your browser.
            </p>

            <h2>2. Flask App Structure</h2>
            <p>
                A Flask app typically consists of the following components:
            <ul>
                <li><code>app.py</code> — the main Python file that runs the app</li>
                <li><code>templates/</code> — folder containing HTML templates</li>
                <li><code>static/</code> — folder containing static files like images, CSS, and JavaScript</li>
            </ul>
            For example, the directory structure could look like this:
            <pre>
                /my_flask_app
                    /templates
                        index.html
                    /static
                        style.css
                    app.py
                </pre>
            </p>

            <h2>3. Running the Flask App</h2>
            <p>
                You can run the Flask app using the command:
            <pre>
                python app.py
                </pre>
            After running this, open your web browser and go to `http://127.0.0.1:5000/` to see the "Welcome to my first Flask app!" message.
            </p>

            <h2>4. Adding More Routes</h2>
            <p>
                You can add more routes to your Flask app by defining additional functions and associating them with URLs:
            </p>
            <pre>
                @app.route('/about')
                def about():
                    return "This is the about page"
            </pre>

            <p>
                You can now visit `http://127.0.0.1:5000/about` to see the "This is the about page" message.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>