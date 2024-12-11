<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 4</title>
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
                <li class="active"><a href="/lessons/itf/itf04">Chapter 4: Handling Form Data and Requests in Flask</a></li>
                <li><a href="/lessons/itf/itf05">Chapter 5: Creating Templates and Rendering HTML with Jinja2</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Handling Form Data and Requests in Flask</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to handle form submissions in Flask</li>
                <li>Understand the `request` object for accessing form data</li>
                <li>Learn how to process and validate form data</li>
                <li>Explore different ways to handle GET and POST requests</li>
            </ul>

            <h2>1. Handling Form Submissions</h2>
            <p>
                In Flask, form data can be handled via the `request` object. When a form is submitted via POST, the data can be accessed through `request.form`.
            </p>
            <pre>
                from flask import Flask, render_template, request

                app = Flask(__name__)

                @app.route('/submit', methods=['GET', 'POST'])
                def submit_form():
                    if request.method == 'POST':
                        name = request.form['name']
                        return f'Hello {name}!'
                    return render_template('form.html')
            </pre>
            <p>
                In this example, when the form is submitted via POST, the name entered by the user will be displayed on the page.
            </p>

            <h2>2. The Request Object</h2>
            <p>
                The `request` object in Flask provides access to all incoming data, including form data, query parameters, and more. Here's how to retrieve form data:
            </p>
            <pre>
                name = request.form['name']  # Retrieves the value of 'name' from the form
                email = request.form['email']  # Retrieves the value of 'email'
            </pre>
            <p>
                You can also access query parameters sent via the URL. For example:
            </p>
            <pre>
                @app.route('/search')
                def search():
                    query = request.args.get('query')
                    return f'Searching for {query}'
            </pre>
            <p>
                Here, `request.args.get('query')` retrieves the value of the `query` parameter from the URL.
            </p>

            <h2>3. Validating Form Data</h2>
            <p>
                It is important to validate form data before using it. You can use simple conditionals or third-party libraries to validate the data.
            </p>
            <pre>
                @app.route('/submit', methods=['POST'])
                def submit_form():
                    name = request.form['name']
                    if not name:
                        return 'Name is required!', 400
                    return f'Hello {name}!'
            </pre>
            <p>
                In this example, the code checks if the `name` field is empty and returns an error if it is.
            </p>

            <h2>4. Handling File Uploads</h2>
            <p>
                Flask also supports file uploads. You can access the uploaded file using `request.files`:
            </p>
            <pre>
                from flask import Flask, request

                app = Flask(__name__)

                @app.route('/upload', methods=['POST'])
                def upload_file():
                    file = request.files['file']
                    file.save(f'./uploads/{file.filename}')
                    return 'File uploaded successfully!'
            </pre>
            <p>
                In this example, the uploaded file is saved to the `uploads` directory.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>