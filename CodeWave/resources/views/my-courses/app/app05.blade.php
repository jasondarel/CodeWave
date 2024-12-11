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
                <li><a href="/lessons/app/app01">Chapter 1: Advanced Object-Oriented Programming Techniques</a></li>
                <li><a href="/lessons/app/app02">Chapter 2: Functional Programming Concepts and Tools in Python</a></li>
                <li><a href="/lessons/app/app03">Chapter 3: Working with Decorators, Context Managers, and Generators</a></li>
                <li><a href="/lessons/app/app04">Chapter 4: Concurrency and Parallelism with Threading and Multiprocessing</a></li>
                <li class="active"><a href="/lessons/app/app05">Chapter 5: Optimizing Performance and Memory Management in Python</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Optimizing Performance and Memory Management in Python</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand how to profile and optimize Python code</li>
                <li>Learn about memory management in Python</li>
                <li>Explore techniques for improving performance and reducing memory consumption</li>
            </ul>

            <h2>1. Profiling and Optimization</h2>
            <p>
                To improve the performance of Python code, profiling helps identify bottlenecks and areas for optimization. The `cProfile` module can be used for profiling:
            </p>
            <pre>
                import cProfile

                def slow_function():
                    total = 0
                    for i in range(1000000):
                        total += i
                    return total

                cProfile.run('slow_function()')
            </pre>
            <p>
                After running the profiler, it will provide statistics on the execution time of various parts of your code, helping you focus on areas that need optimization.
            </p>

            <h2>2. Memory Management in Python</h2>
            <p>
                Python automatically manages memory using a garbage collector. However, you can also control memory usage using the `sys.getsizeof` function to check the size of objects:
            </p>
            <pre>
                import sys

                a = [1, 2, 3]
                print(sys.getsizeof(a))  # Output: Memory size of the list in bytes
            </pre>

            <h2>3. Techniques for Improving Performance</h2>
            <p>
                Several strategies can help improve the performance of your Python code:
            <ul>
                <li><b>Using built-in functions:</b> Built-in functions like `map()`, `filter()`, and `reduce()` are often faster than custom implementations.</li>
                <li><b>Using generators:</b> Generators allow for lazy evaluation, meaning they generate values only when needed, reducing memory usage.</li>
                <li><b>Optimizing loops:</b> Avoid using `for` loops for expensive operations when list comprehensions or `map()` can be used instead.</li>
            </ul>
            </p>

            <h2>4. Reducing Memory Consumption</h2>
            <p>
                Memory usage can be reduced by using more efficient data structures, such as:
            <ul>
                <li><b>Arrays:</b> For numeric data, use the `array` module instead of lists to store values more efficiently.</li>
                <li><b>Sets and dictionaries:</b> These structures are often more efficient for membership testing and storage than lists.</li>
            </ul>
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>