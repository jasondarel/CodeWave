<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 6: Building a Final Project</title>
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
                <li><a href="/lessons/pfb/pfb03">Chapter 3: Working with loops and conditionals</a></li>
                <li><a href="/lessons/pfb/pfb04">Chapter 4: Defining and using functions</a></li>
                <li><a href="/lessons/pfb/pfb05">Chapter 5: Creating and managing Python modules</a></li>
                <li class="active"><a href="/lessons/pfb/pfb06">Chapter 6: Building a final project</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 6: Building a Final Project</h1>

            <h2>Learning Objectives</h2>
            <ul>
                <li>Understand how to combine all the concepts learned in previous chapters.</li>
                <li>Plan and design a small Python project.</li>
                <li>Write clean and efficient code to implement the project.</li>
                <li>Debug and test your final project for errors and functionality.</li>
            </ul>

            <h2>1. Introduction</h2>
            <p>In this chapter, you will create a final project that ties together all the concepts you've learned so far. You will practice designing, coding, and testing a Python application.</p>

            <h2>2. Project Overview</h2>
            <p>Your project should demonstrate proficiency in:</p>
            <ul>
                <li>Using variables, data types, and operators.</li>
                <li>Implementing loops and conditionals.</li>
                <li>Defining and using functions effectively.</li>
                <li>Organizing code into reusable modules.</li>
            </ul>

            <h2>3. Steps to Build Your Project</h2>
            <p>Follow these steps:</p>
            <ol>
                <li>Define the goal and scope of your project.</li>
                <li>Plan the structure of your code.</li>
                <li>Write the code for your project.</li>
                <li>Test and debug your project.</li>
                <li>Document your work with comments and a README file.</li>
            </ol>

            <h2>4. Submission Guidelines</h2>
            <p>Once your project is complete, submit your code along with a brief explanation of its functionality and features.</p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>

           
        </div>
    </div>
    @endsection
</body>

</html>