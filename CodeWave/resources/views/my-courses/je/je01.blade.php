<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 1</title>
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
                <li class="active"><a href="/lessons/je/je01">Chapter 1: Understanding JavaScript syntax and data types</a></li>
                <li><a href="/lessons/je/je02">Chapter 2: Writing functions and using variables</a></li>
                <li><a href="/lessons/je/je03">Chapter 3: Control flow and loops in JavaScript</a></li>
                <li><a href="/lessons/je/je04">Chapter 4: Handling events and user interactions</a></li>
                <li><a href="/lessons/je/je05">Chapter 5: Working with arrays and objects in JavaScript</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Understanding JavaScript syntax and data types</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand JavaScript syntax</li>
                <li>Learn about different data types in JavaScript</li>
                <li>Understand variables and constants</li>
                <li>Learn how to use operators in JavaScript</li>
            </ul>

            <h2>1. JavaScript Syntax</h2>
            <p>
                JavaScript follows a specific syntax that is essential for writing code that works correctly. It is case-sensitive, and statements are terminated with a semicolon. Here's an example of basic syntax:
            </p>
            <pre>
                let name = "JavaScript";
                console.log(name);
            </pre>

            <h2>2. Data Types in JavaScript</h2>
            <p>
                JavaScript supports different types of data, such as numbers, strings, and booleans. Here are the most common data types:
            <ul>
                <li><b>String</b>: Represents a sequence of characters enclosed in quotes.</li>
                <li><b>Number</b>: Represents numeric values.</li>
                <li><b>Boolean</b>: Represents true or false values.</li>
                <li><b>Array</b>: A collection of values.</li>
                <li><b>Object</b>: A collection of key-value pairs.</li>
            </ul>
            </p>

            <h2>3. Variables and Constants</h2>
            <p>
                In JavaScript, you can use the `let`, `const`, and `var` keywords to declare variables. It's recommended to use `let` and `const` due to better scoping rules. Here's an example:
            </p>
            <pre>
                let age = 25;
                const name = "John";
            </pre>

            <h2>4. Operators</h2>
            <p>
                JavaScript supports various operators, including:
            <ul>
                <li><b>Arithmetic operators</b>: +, -, *, /, %</li>
                <li><b>Comparison operators</b>: ==, ===, !=, <,>, <=,>=</li>
                <li><b>Logical operators</b>: && (AND), || (OR), ! (NOT)</li>
            </ul>
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>