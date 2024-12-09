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
                <li><a href="/my-courses/python-for-beginners/chapter-1">Chapter 1: Introduction to Python and setting up your environment</a></li>
                <li class="active"><a href="/my-courses/python-for-beginners/chapter-2">Chapter 2: Understanding variables, data types, and operators</a></li>
                <li><a href="/my-courses/python-for-beginners/chapter-3">Chapter 3: Working with loops and conditionals</a></li>
                <li><a href="/my-courses/python-for-beginners/chapter-4">Chapter 4: Defining and using functions</a></li>
                <li><a href="/my-courses/python-for-beginners/chapter-5">Chapter 5: Creating and managing Python modules</a></li>
                <li><a href="/my-courses/python-for-beginners/chapter-6">Chapter 6: Building a final project</a></li>
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

            <div class="next-chapter">
                <a href="/my-courses/python-for-beginners?id=PFB03" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>