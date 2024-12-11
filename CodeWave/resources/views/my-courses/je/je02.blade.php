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
                <li><a href="/lessons/je/je01">Chapter 1: Understanding JavaScript syntax and data types</a></li>
                <li class="active"><a href="/lessons/je/je02">Chapter 2: Writing functions and using variables</a></li>
                <li><a href="/lessons/je/je03">Chapter 3: Control flow and loops in JavaScript</a></li>
                <li><a href="/lessons/je/je04">Chapter 4: Handling events and user interactions</a></li>
                <li><a href="/lessons/je/je05">Chapter 5: Working with arrays and objects in JavaScript</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Writing functions and using variables</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to declare and use functions in JavaScript</li>
                <li>Understand how to define parameters and return values</li>
                <li>Learn about variable scope in JavaScript</li>
                <li>Understand the difference between `var`, `let`, and `const`</li>
            </ul>

            <h2>1. Functions in JavaScript</h2>
            <p>
                Functions are reusable blocks of code that can be called to perform specific tasks. In JavaScript, you can declare a function using the `function` keyword.
            </p>
            <pre>
                function greet(name) {
                    return "Hello, " + name + "!";
                }
                console.log(greet("John"));  // Output: Hello, John!
            </pre>

            <h2>2. Parameters and Return Values</h2>
            <p>
                Functions can accept parameters (input values) and return a result (output value). Here's an example:
            </p>
            <pre>
                function add(a, b) {
                    return a + b;
                }
                console.log(add(2, 3));  // Output: 5
            </pre>

            <h2>3. Variable Scope</h2>
            <p>
                Variables in JavaScript can be declared inside a function (local scope) or outside (global scope). Local variables are accessible only within the function, while global variables can be accessed throughout the code.
            </p>
            <pre>
                let globalVar = "I'm global";
                function localScopeExample() {
                    let localVar = "I'm local";
                    console.log(localVar);  // Accessible
                    console.log(globalVar); // Accessible
                }
                console.log(localVar); // Error: localVar is not defined
            </pre>

            <h2>4. Declaring Variables</h2>
            <p>
                In JavaScript, you can declare variables using `var`, `let`, and `const`.
                - `var`: Function-scoped, can be re-assigned.
                - `let`: Block-scoped, can be re-assigned.
                - `const`: Block-scoped, cannot be re-assigned.
            </p>
            <pre>
                var oldVar = "This is var";
                let newVar = "This is let";
                const constantVar = "This cannot be changed";
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>