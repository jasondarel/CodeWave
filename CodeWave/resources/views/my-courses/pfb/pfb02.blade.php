<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 2: Understanding Variables, Data Types, and Operators</title>
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
                <li class="active"><a href="/lessons/pfb/pfb02">Chapter 2: Understanding variables, data types, and operators</a></li>
                <li><a href="/lessons/pfb/pfb03">Chapter 3: Working with loops and conditionals</a></li>
                <li><a href="/lessons/pfb/pfb04">Chapter 4: Defining and using functions</a></li>
                <li><a href="/lessons/pfb/pfb05">Chapter 5: Creating and managing Python modules</a></li>
                <li><a href="/lessons/pfb/pfb06">Chapter 6: Building a final project</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Understanding Variables, Data Types, and Operators</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand what variables are and how they store data in Python</li>
                <li>Learn about different data types in Python, including strings, integers, floats, and booleans</li>
                <li>Understand the concept of type conversion and how to use it</li>
                <li>Learn about basic operators in Python such as arithmetic, comparison, and logical operators</li>
                <li>Practice working with variables and operators in Python to perform simple calculations</li>
            </ul>

            <h2>1. Introduction</h2>
            <p>
                Variables, data types, and operators are fundamental concepts in programming. In this chapter, we’ll dive into how Python stores and manages data, and explore the tools you can use to manipulate and work with that data.
            </p>

            <h2>2. Variables</h2>
            <p>
                A variable is a named storage location for data in a program. In Python, you can create a variable by simply assigning a value to it using the equals sign (<code>=</code>).
            </p>
            <pre>
# Example
name = "Alice"
age = 25
height = 5.6
print(name, age, height)
    </pre>

            <h2>3. Data Types</h2>
            <p>
                Python supports various data types. Here are some common ones:
            </p>
            <ul>
                <li><strong>String:</strong> Text enclosed in quotes. Example: <code>"Hello, World!"</code></li>
                <li><strong>Integer:</strong> Whole numbers. Example: <code>42</code></li>
                <li><strong>Float:</strong> Numbers with decimals. Example: <code>3.14</code></li>
                <li><strong>Boolean:</strong> True or False values. Example: <code>True</code></li>
            </ul>
            <pre>
# Example
greeting = "Hello"
is_sunny = True
temp = 23.5
print(greeting, is_sunny, temp)
    </pre>

            <h2>4. Type Conversion</h2>
            <p>
                Python allows you to convert one data type to another using built-in functions:
            </p>
            <ul>
                <li><code>int()</code>: Converts to an integer</li>
                <li><code>float()</code>: Converts to a float</li>
                <li><code>str()</code>: Converts to a string</li>
            </ul>
            <pre>
# Example
age = "25"
age_in_int = int(age)
print(age_in_int + 5)  # Outputs: 30
    </pre>

            <h2>5. Operators</h2>
            <p>
                Operators are symbols that perform operations on variables and values. Here are some basic types:
            </p>
            <ul>
                <li><strong>Arithmetic Operators:</strong> +, -, *, /, %, **</li>
                <li><strong>Comparison Operators:</strong> ==, !=, >, <,>=, <=< /li>
                <li><strong>Logical Operators:</strong> and, or, not</li>
            </ul>
            <pre>
# Example
x = 10
y = 20

# Arithmetic
print(x + y)  # Outputs: 30

# Comparison
print(x < y)  # Outputs: True

# Logical
print(x > 5 and y < 25)  # Outputs: True
    </pre>

            <h2>6. Practice: Working with Variables and Operators</h2>
            <p>
                Try creating variables of different data types, perform operations on them, and print the results. Here's a simple exercise:
            </p>
            <pre>
# Exercise
name = "John"
score = 95
bonus = 5
total_score = score + bonus
print(f"{name}'s total score is {total_score}")
    </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>

    </div>
    @endsection
</body>

</html>