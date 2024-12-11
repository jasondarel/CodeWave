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
                <li class="active"><a href="/lessons/dawp/dawp01">Chapter 1: Data Manipulation with Pandas and NumPy</a></li>
                <li><a href="/lessons/dawp/dawp02">Chapter 2: Data Cleaning and Preprocessing Techniques</a></li>
                <li><a href="/lessons/dawp/dawp03">Chapter 3: Statistical Analysis and Hypothesis Testing</a></li>
                <li><a href="/lessons/dawp/dawp04">Chapter 4: Data Visualization using Matplotlib and Seaborn</a></li>
                <li><a href="/lessons/dawp/dawp05">Chapter 5: Building Data Analysis Projects and Reports</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Data Manipulation with Pandas and NumPy</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn the basics of data manipulation with Pandas and NumPy</li>
                <li>Understand how to load and clean data using Pandas</li>
                <li>Perform mathematical and statistical operations with NumPy</li>
                <li>Master data filtering, sorting, and aggregation techniques</li>
            </ul>

            <h2>1. Introduction to Pandas and NumPy</h2>
            <p>
                Pandas and NumPy are powerful libraries in Python for data manipulation and numerical computing. Pandas provides high-level data structures and functions designed to work with structured data, while NumPy provides support for large, multi-dimensional arrays and matrices, along with a collection of mathematical functions.
            </p>

            <h2>2. Working with Pandas DataFrames</h2>
            <p>
                A DataFrame is a two-dimensional size-mutable, potentially heterogeneous tabular data structure with labeled axes (rows and columns). It is the most commonly used data structure in Pandas for handling and analyzing data.
            </p>
            <pre>
                import pandas as pd

                # Create a DataFrame
                data = {'Name': ['Alice', 'Bob', 'Charlie'],
                        'Age': [24, 27, 22],
                        'City': ['New York', 'Los Angeles', 'Chicago']}
                df = pd.DataFrame(data)

                # Display the DataFrame
                print(df)
            </pre>

            <h2>3. Data Manipulation with NumPy</h2>
            <p>
                NumPy is the core library for numerical computing in Python. It provides support for arrays and matrices, along with a large number of mathematical functions to perform operations on these data structures.
            </p>
            <pre>
                import numpy as np

                # Create a NumPy array
                arr = np.array([1, 2, 3, 4])

                # Perform mathematical operations
                arr_squared = arr ** 2
                print(arr_squared)
            </pre>

            <h2>4. Combining Pandas and NumPy for Data Manipulation</h2>
            <p>
                Pandas and NumPy can be combined to perform powerful data manipulation. For example, you can use NumPy to perform mathematical operations on columns in a Pandas DataFrame.
            </p>
            <pre>
                df['Age_squared'] = np.square(df['Age'])
                print(df)
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>