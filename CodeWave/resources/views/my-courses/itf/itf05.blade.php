<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 5</title>
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
                <li><a href="/lessons/itf/itf03">Chapter 3: Understanding Flask Routing and HTTP Methods</a></li>
                <li><a href="/lessons/itf/itf04">Chapter 4: Handling Form Data and Requests in Flask</a></li>
                <li class="active"><a href="/lessons/itf/itf05">Chapter 5: Creating Templates and Rendering HTML with Jinja2</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Creating Templates and Rendering HTML with Jinja2</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the concept of templates in Flask</li>
                <li>Learn how to use Jinja2 for dynamic HTML rendering</li>
                <li>Integrate Flask with HTML templates</li>
                <li>Explore template inheritance for reusability</li>
            </ul>

            <h2>1. Introduction to Templates</h2>
            <p>
                Templates in Flask allow you to separate the presentation layer from the application logic. Flask uses Jinja2 as the templating engine. Jinja2 allows you to embed Python-like expressions within HTML to generate dynamic content.
            </p>
            <pre>
                from flask import Flask, render_template

                app = Flask(__name__)

                @app.route('/')
                def home():
                    return render_template('index.html')
            </pre>
            <p>
                In this example, `render_template('index.html')` renders an HTML template named `index.html` from the templates folder.
            </p>

            <h2>2. Jinja2 Syntax</h2>
            <p>
                Jinja2 provides several features for rendering dynamic content. Here are some of the most common syntax elements:
            </p>
            <ul>
                <li><strong>Variables</strong>: <code>name</code> - Used to display a variable's value passed from the Flask view function (e.g., "John").</li>
                <li><strong>Control structures</strong>: <code>{% for item in list %} ... {% endfor %}</code> - Used for loops and conditionals.</li>
                <li><strong>Filters</strong>: <code>name|capitalize</code> - Used to modify output, such as formatting strings or numbers.</li>
            </ul>
            <p>
                For example, if you pass a variable `name` from your Flask route, like this:
            </p>
            <pre>
    @app.route('/')
    def home():
        return render_template('index.html', name="John")
</pre>
            <p>
                The template will render the string "Welcome to Flask, John!" when accessed.
            </p>


            <h2>3. Using Templates with Flask</h2>
            <p>
                To use templates, create an `HTML` file in the `templates` folder in your Flask project directory. For example, create a file called `index.html`:
            </p>
            <pre>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Welcome</title>
                </head>
                <body>
                    <h1>Welcome to Flask, ''name''!</h1>
                </body>
                </html>
            </pre>
            <p>
                This template renders a dynamic `name` variable that you pass to the template from your Flask route.
            </p>

            <h2>4. Template Inheritance</h2>
            <p>
                Flask and Jinja2 support template inheritance, which allows you to define a base template and extend it in child templates.
            </p>
            <pre>
                <!-- base.html -->
                <html>
                <head>
                    <title>Base Template</title>
                </head>
                <body>
                    <header>
                        <h1>Welcome to the Site</h1>
                    </header>
                    <main>
                        {% block content %}{% endblock %}
                    </main>
                </body>
                </html>

                <!-- child.html -->
                {% extends 'base.html' %}

                {% block content %}
                <h2>Child Template Content</h2>
                {% endblock %}
            </pre>
            <p>
                In this example, `child.html` extends the base template `base.html` and defines the content inside the `block content` section.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Back to Course Overview</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>