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
                <li><a href="/lessons/app/app01">Chapter 1: Advanced Object-Oriented Programming Techniques</a></li>
                <li class="active"><a href="/lessons/app/app02">Chapter 2: Functional Programming Concepts and Tools in Python</a></li>
                <li><a href="/lessons/app/app03">Chapter 3: Working with Decorators, Context Managers, and Generators</a></li>
                <li><a href="/lessons/app/app04">Chapter 4: Concurrency and Parallelism with Threading and Multiprocessing</a></li>
                <li><a href="/lessons/app/app05">Chapter 5: Optimizing Performance and Memory Management in Python</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Functional Programming Concepts and Tools in Python</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the principles of functional programming in Python</li>
                <li>Learn how to work with higher-order functions and lambdas</li>
                <li>Explore Python's built-in functional programming tools</li>
                <li>Utilize the map(), filter(), and reduce() functions</li>
            </ul>

            <h2>1. Introduction to Functional Programming</h2>
            <p>
                Functional programming (FP) is a programming paradigm where computation is treated as the evaluation of mathematical functions, avoiding changing state and mutable data. In Python, functional programming can be achieved using functions like <code>map()</code>, <code>filter()</code>, and <code>reduce()</code>.
            </p>

            <h2>2. Higher-Order Functions and Lambdas</h2>
            <p>
                A higher-order function is one that either takes one or more functions as arguments, returns a function as a result, or both. Lambda functions in Python are small anonymous functions defined using the <code>lambda</code> keyword.
            </p>
            <pre>
                # Example of a lambda function
                square = lambda x: x ** 2
                print(square(5))  # Output: 25
            </pre>

            <h2>3. Python’s Built-in Functional Programming Tools</h2>
            <p>
                Python provides several tools for functional programming:
            </p>
            <ul>
                <li><code>map(function, iterable)</code>: Applies the given function to all items in the iterable.</li>
                <li><code>filter(function, iterable)</code>: Filters items from the iterable based on a condition provided by the function.</li>
                <li><code>reduce(function, iterable)</code>: Applies the function cumulatively to the items of the iterable, from left to right, so as to reduce the iterable to a single value.</li>
            </ul>

            <h2>4. Example: Using map(), filter(), and reduce()</h2>
            <p>
                Here's how we can use these functions to manipulate data:
            </p>
            <pre>
                from functools import reduce

                numbers = [1, 2, 3, 4, 5]

                # Using map to square numbers
                squared_numbers = map(lambda x: x ** 2, numbers)
                print(list(squared_numbers))  # Output: [1, 4, 9, 16, 25]

                # Using filter to get even numbers
                even_numbers = filter(lambda x: x % 2 == 0, numbers)
                print(list(even_numbers))  # Output: [2, 4]

                # Using reduce to calculate the sum of numbers
                total = reduce(lambda x, y: x + y, numbers)
                print(total)  # Output: 15
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>