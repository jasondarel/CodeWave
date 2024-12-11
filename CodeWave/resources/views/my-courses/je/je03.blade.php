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
                <li><a href="/lessons/je/je01">Chapter 1: Understanding JavaScript syntax and data types</a></li>
                <li><a href="/lessons/je/je02">Chapter 2: Writing functions and using variables</a></li>
                <li class="active"><a href="/lessons/je/je03">Chapter 3: Control flow and loops in JavaScript</a></li>
                <li><a href="/lessons/je/je04">Chapter 4: Handling events and user interactions</a></li>
                <li><a href="/lessons/je/je05">Chapter 5: Working with arrays and objects in JavaScript</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Control flow and loops in JavaScript</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand how to use if, else, and else if statements</li>
                <li>Learn how to use switch statements</li>
                <li>Understand the concept of loops in JavaScript</li>
                <li>Learn about `for`, `while`, and `do...while` loops</li>
            </ul>

            <h2>1. If, Else, and Else If Statements</h2>
            <p>
                Control flow in JavaScript allows you to make decisions in your code. The `if` statement checks whether a condition is true, and if so, it executes a block of code.
            </p>
            <pre>
                let age = 18;
                if (age >= 18) {
                    console.log("You are an adult.");
                } else {
                    console.log("You are a minor.");
                }
            </pre>

            <h2>2. Else If Statements</h2>
            <p>
                You can use `else if` to check multiple conditions. The first condition that evaluates to true will execute the corresponding block of code.
            </p>
            <pre>
                let score = 85;
                if (score >= 90) {
                    console.log("Grade A");
                } else if (score >= 80) {
                    console.log("Grade B");
                } else {
                    console.log("Grade C");
                }
            </pre>

            <h2>3. Switch Statements</h2>
            <p>
                The `switch` statement is another way to handle multiple conditions, particularly when you have many possible values for a variable.
            </p>
            <pre>
                let day = 3;
                switch (day) {
                    case 1:
                        console.log("Monday");
                        break;
                    case 2:
                        console.log("Tuesday");
                        break;
                    case 3:
                        console.log("Wednesday");
                        break;
                    default:
                        console.log("Invalid day");
                }
            </pre>

            <h2>4. Loops in JavaScript</h2>
            <p>
                Loops allow you to execute a block of code multiple times. There are different types of loops, such as the `for` loop, `while` loop, and `do...while` loop.
            </p>

            <h3>For Loop</h3>
            <pre>
                for (let i = 0; i < 5; i++) {
                    console.log(i);
                }
            </pre>

            <h3>While Loop</h3>
            <pre>
                let i = 0;
                while (i < 5) {
                    console.log(i);
                    i++;
                }
            </pre>

            <h3>Do...While Loop</h3>
            <pre>
                let i = 0;
                do {
                    console.log(i);
                    i++;
                } while (i < 5);
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>