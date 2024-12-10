<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 3: Working with Loops and Conditionals</title>
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

        ul {
            list-style-type: disc;
            margin-left: 20px;
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
                <li><a href="/lessons/pfb/pfb01">Chapter 1: Introduction to Python and setting up your environment</a></li>
                <li ><a href="/lessons/pfb/pfb02">Chapter 2: Understanding variables, data types, and operators</a></li>
                <li class="active"><a href="/lessons/pfb/pfb03">Chapter 3: Working with loops and conditionals</a></li>
                <li><a href="/lessons/pfb/pfb04">Chapter 4: Defining and using functions</a></li>
                <li><a href="/lessons/pfb/pfb05">Chapter 5: Creating and managing Python modules</a></li>
                <li><a href="/lessons/pfb/pfb06">Chapter 6: Building a final project</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Working with Loops and Conditionals</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the concept of loops and how they simplify repetitive tasks</li>
                <li>Learn the difference between `for` loops and `while` loops</li>
                <li>Understand how to use conditional statements (`if`, `elif`, `else`) to control program flow</li>
                <li>Practice nesting loops and conditionals to solve complex problems</li>
                <li>Use break, continue, and pass statements effectively in loops</li>
            </ul>

            <h2>1. Introduction</h2>
            <p>Loops and conditionals are fundamental concepts in programming that allow developers to control the flow of their programs effectively. They enable us to automate repetitive tasks and make decisions based on specific conditions.</p>

            <h2>2. Loops</h2>
            <p>In Python, loops are used to iterate over sequences (like lists, dictionaries, or strings) or execute a block of code multiple times until a condition is met.</p>

            <h3>a. `for` Loop</h3>
            <p>The `for` loop is used to iterate over a sequence and execute a block of code for each element.</p>
            <pre><code>for item in [1, 2, 3]:
    print(item)</code></pre>

            <h3>b. `while` Loop</h3>
            <p>The `while` loop is used to execute a block of code repeatedly as long as a condition is true.</p>
            <pre><code>i = 0
while i < 5:
    print(i)
    i += 1</code></pre>

            <h2>3. Conditionals</h2>
            <p>Conditional statements allow you to execute code blocks based on certain conditions.</p>
            <pre><code>if age >= 18:
    print("You are an adult.")
else:
    print("You are a minor.")</code></pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>

        </div>
    </div>
    @endsection
</body>

</html>