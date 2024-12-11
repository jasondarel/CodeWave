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
                <li><a href="/lessons/app/app01">Chapter 1: Advanced Object-Oriented Programming Techniques</a></li>
                <li><a href="/lessons/app/app02">Chapter 2: Functional Programming Concepts and Tools in Python</a></li>
                <li><a href="/lessons/app/app03">Chapter 3: Working with Decorators, Context Managers, and Generators</a></li>
                <li class="active"><a href="/lessons/app/app04">Chapter 4: Concurrency and Parallelism with Threading and Multiprocessing</a></li>
                <li><a href="/lessons/app/app05">Chapter 5: Optimizing Performance and Memory Management in Python</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Concurrency and Parallelism with Threading and Multiprocessing</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the concepts of concurrency and parallelism</li>
                <li>Learn how to use threading for concurrent programming</li>
                <li>Explore multiprocessing for parallelism in Python</li>
                <li>Differentiate between threading and multiprocessing</li>
            </ul>

            <h2>1. Concurrency and Parallelism</h2>
            <p>
                Concurrency refers to the ability of a program to execute multiple tasks simultaneously, but not necessarily in parallel. Parallelism, on the other hand, involves executing multiple tasks at the exact same time using multiple processors.
            </p>

            <h2>2. Threading</h2>
            <p>
                The threading module allows you to run multiple threads in a program. Each thread runs independently but shares the same memory space. Here's an example:
            </p>
            <pre>
                import threading

                def print_numbers():
                    for i in range(5):
                        print(i)

                thread1 = threading.Thread(target=print_numbers)
                thread2 = threading.Thread(target=print_numbers)

                thread1.start()
                thread2.start()

                thread1.join()
                thread2.join()
            </pre>
            <p>
                In this example, two threads are created to print numbers concurrently.
            </p>

            <h2>3. Multiprocessing</h2>
            <p>
                The multiprocessing module is used for parallel execution. It creates separate processes, each with its own memory space. Here's an example:
            </p>
            <pre>
                import multiprocessing

                def print_numbers():
                    for i in range(5):
                        print(i)

                process1 = multiprocessing.Process(target=print_numbers)
                process2 = multiprocessing.Process(target=print_numbers)

                process1.start()
                process2.start()

                process1.join()
                process2.join()
            </pre>
            <p>
                In this example, each process runs independently with its own memory space.
            </p>

            <h2>4. Threading vs Multiprocessing</h2>
            <p>
                - Threading is best suited for tasks that are I/O-bound (e.g., reading from a file or network).
                - Multiprocessing is ideal for CPU-bound tasks (e.g., intensive computations) since each process runs on its own CPU core.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>