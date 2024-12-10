<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 4: Defining and Using Functions</title>
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
            margin-top: 50px;
        }

        .main-content p {
            font-size: 18px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        .code-snippet {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin: 20px 0;
            font-family: Consolas, "Courier New", monospace;
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

        <!-- Sidebar -->
        <div class="chapter-list">
            <h3>CHAPTERS</h3>
            <ul>
                <li><a href="/lessons/pfb/pfb01">Chapter 1: Introduction to Python and setting up your environment</a></li>
                <li ><a href="/lessons/pfb/pfb02">Chapter 2: Understanding variables, data types, and operators</a></li>
                <li><a href="/lessons/pfb/pfb03">Chapter 3: Working with loops and conditionals</a></li>
                <li class="active"><a href="/lessons/pfb/pfb04">Chapter 4: Defining and using functions</a></li>
                <li><a href="/lessons/pfb/pfb05">Chapter 5: Creating and managing Python modules</a></li>
                <li><a href="/lessons/pfb/pfb06">Chapter 6: Building a final project</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h1>Chapter 4: Defining and Using Functions</h1>

            <!-- Learning Objectives -->
            <h2>Learning Objectives</h2>
            <ul>
                <li>Understand the syntax for defining functions in Python.</li>
                <li>Learn to use parameters and arguments effectively.</li>
                <li>Explore the use of return statements in functions.</li>
                <li>Understand the difference between built-in and user-defined functions.</li>
                <li>Learn about recursion and lambda functions.</li>
            </ul>

            <!-- Content -->
            <h2>1. Introduction</h2>
            <p>Functions are an essential part of programming that allow you to reuse blocks of code and structure your program in an organized way. In this chapter, we will cover how to define, use, and understand functions.</p>

            <h2>2. Defining a Function</h2>
            <p>To define a function in Python, you use the <code>def</code> keyword followed by the function name and parentheses. Here's an example:</p>
            <div class="code-snippet">
                <pre>
def greet(name):
    print(f"Hello, {name}!")

greet("Alice")  # Output: Hello, Alice!
                </pre>
            </div>

            <h2>3. Function Parameters</h2>
            <p>Parameters are variables that you define in the function's parentheses. You can use these variables within the function. For example:</p>
            <div class="code-snippet">
                <pre>
def add_numbers(a, b):
    return a + b

result = add_numbers(5, 3)
print(result)  # Output: 8
                </pre>
            </div>

            <h2>4. Return Statement</h2>
            <p>The <code>return</code> statement allows you to send a value back to the caller of the function:</p>
            <div class="code-snippet">
                <pre>
def square(num):
    return num * num

result = square(4)
print(result)  # Output: 16
                </pre>
            </div>

            <h2>5. Lambda Functions</h2>
            <p>Lambda functions are small, anonymous functions defined using the <code>lambda</code> keyword. Example:</p>
            <div class="code-snippet">
                <pre>
square = lambda x: x * x
print(square(5))  # Output: 25
                </pre>
            </div>

            <!-- Next Chapter -->
            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>

        </div>
    </div>
    @endsection
</body>

</html>