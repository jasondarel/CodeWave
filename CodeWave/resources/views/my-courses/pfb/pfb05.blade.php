<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 5: Creating and Managing Python Modules</title>
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

        .code-snippet {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin: 20px 0;
            font-family: Consolas, "Courier New", monospace;
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
                <li><a href="/lessons/pfb/pfb03">Chapter 3: Working with loops and conditionals</a></li>
                <li><a href="/lessons/pfb/pfb04">Chapter 4: Defining and using functions</a></li>
                <li class="active"><a href="/lessons/pfb/pfb05">Chapter 5: Creating and managing Python modules</a></li>
                <li><a href="/lessons/pfb/pfb06">Chapter 6: Building a final project</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Creating and Managing Python Modules</h1>

            <h2>Learning Objectives</h2>
            <ul>
                <li>Understand the purpose of modules in Python programming.</li>
                <li>Learn how to create, import, and use Python modules.</li>
                <li>Explore the concept of built-in modules.</li>
                <li>Understand the structure of Python packages and their significance.</li>
                <li>Learn how to organize your code using modules and packages.</li>
            </ul>

            <h2>1. Introduction</h2>
            <p>Modules in Python allow you to structure your code into smaller, reusable components. By organizing code into modules, you can make it more readable, maintainable, and scalable.</p>

            <h2>2. Creating Your First Module</h2>
            <p>To create a module, simply save your Python code in a file with a <code>.py</code> extension. For example:</p>
            <div class="code-snippet">
                <pre>
# my_module.py
def greet(name):
    return f"Hello, {name}!"
                </pre>
            </div>

            <h2>3. Importing and Using Modules</h2>
            <p>You can import and use modules in other Python files using the <code>import</code> keyword:</p>
            <div class="code-snippet">
                <pre>
import my_module

print(my_module.greet("Alice"))  # Output: Hello, Alice!
                </pre>
            </div>

            <h2>4. Built-in Modules</h2>
            <p>Python comes with many built-in modules like <code>math</code>, <code>os</code>, and <code>random</code>. For example:</p>
            <div class="code-snippet">
                <pre>
import math

print(math.sqrt(16))  # Output: 4.0
                </pre>
            </div>

            <h2>5. Packages and Directory Structure</h2>
            <p>A package is a collection of modules grouped in a directory with an <code>__init__.py</code> file. Example structure:</p>
            <div class="code-snippet">
                <pre>
my_package/
    __init__.py
    module1.py
    module2.py
                </pre>
            </div>
            <p>You can import from packages using:</p>
            <div class="code-snippet">
                <pre>
from my_package import module1
                </pre>
            </div>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>

          
        </div>
    </div>
    @endsection
</body>

</html>