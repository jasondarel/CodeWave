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
                <li><a href="/lessons/app/app01">Chapter 1: Advanced Object-Oriented Programming Techniques</a></li>
                <li><a href="/lessons/app/app02">Chapter 2: Functional Programming Concepts and Tools in Python</a></li>
                <li class="active"><a href="/lessons/app/app03">Chapter 3: Working with Decorators, Context Managers, and Generators</a></li>
                <li><a href="/lessons/app/app04">Chapter 4: Concurrency and Parallelism with Threading and Multiprocessing</a></li>
                <li><a href="/lessons/app/app05">Chapter 5: Optimizing Performance and Memory Management in Python</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Working with Decorators, Context Managers, and Generators</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand decorators and how to use them</li>
                <li>Learn how to create and use context managers</li>
                <li>Explore Python generators and their use cases</li>
            </ul>

            <h2>1. Decorators in Python</h2>
            <p>
                A decorator is a function that modifies the behavior of another function or method. Decorators are used to extend the functionality of functions without modifying their structure.
            </p>
            <pre>
                def decorator(func):
                    def wrapper():
                        print("Something is happening before the function is called.")
                        func()
                        print("Something is happening after the function is called.")
                    return wrapper

                @decorator
                def say_hello():
                    print("Hello!")

                say_hello()
            </pre>
            <p>
                In this example, the <code>decorator</code> adds extra behavior before and after the <code>say_hello</code> function is executed.
            </p>

            <h2>2. Context Managers</h2>
            <p>
                Context managers are used to manage resources like files or network connections. The most common way to create a context manager is using the <code>with</code> statement.
            </p>
            <pre>
                # Example of a context manager using the 'with' statement
                with open("example.txt", "w") as file:
                    file.write("Hello, world!")
            </pre>
            <p>
                The context manager ensures that the file is properly closed after writing to it, even if an exception is raised.
            </p>

            <h2>3. Generators</h2>
            <p>
                Generators are a way to create iterators in Python. They allow you to iterate over data without loading everything into memory at once, making them useful for working with large datasets.
            </p>
            <pre>
                def my_generator():
                    yield 1
                    yield 2
                    yield 3

                for value in my_generator():
                    print(value)
            </pre>
            <p>
                In this example, <code>my_generator()</code> yields values one by one instead of returning them all at once, allowing for more efficient memory usage.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>