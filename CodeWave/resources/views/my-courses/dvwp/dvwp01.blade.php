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
                <li class="active"><a href="/lessons/dvwp/dvwp01">Chapter 1: Introduction to Data Visualization with Python</a></li>
                <li><a href="/lessons/dvwp/dvwp02">Chapter 2: Creating Static Plots with Matplotlib</a></li>
                <li><a href="/lessons/dvwp/dvwp03">Chapter 3: Building Advanced Visualizations using Seaborn</a></li>
                <li><a href="/lessons/dvwp/dvwp04">Chapter 4: Interactive Data Visualizations with Plotly</a></li>
                <li><a href="/lessons/dvwp/dvwp05">Chapter 5: Using Visualization for Data Analysis and Reporting</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Introduction to Data Visualization with Python</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the importance of data visualization</li>
                <li>Learn about different Python libraries for data visualization</li>
                <li>Gain knowledge of when and why to use visualizations in data analysis</li>
                <li>Understand how data visualization can reveal insights</li>
            </ul>

            <h2>1. Importance of Data Visualization</h2>
            <p>
                Data visualization is a critical aspect of data analysis. It enables the exploration of complex data sets and helps in communicating insights in a visually appealing way. Well-designed visualizations can reveal hidden patterns, trends, and correlations within the data that may not be apparent in raw form.
            </p>

            <h2>2. Popular Python Libraries for Data Visualization</h2>
            <p>
                Python has several powerful libraries for creating data visualizations. The most commonly used libraries include:
            <ul>
                <li><strong>Matplotlib</strong>: A fundamental library for creating static plots.</li>
                <li><strong>Seaborn</strong>: Built on top of Matplotlib, it provides a high-level interface for drawing attractive statistical graphics.</li>
                <li><strong>Plotly</strong>: A library for creating interactive plots that can be used in web applications.</li>
            </ul>
            </p>

            <h2>3. Types of Visualizations</h2>
            <p>
                There are different types of visualizations, each suited to different kinds of data. Some of the common types include:
            <ul>
                <li><strong>Bar charts</strong>: Ideal for comparing discrete categories.</li>
                <li><strong>Line plots</strong>: Used to show trends over time or ordered categories.</li>
                <li><strong>Scatter plots</strong>: Useful for displaying relationships between two continuous variables.</li>
                <li><strong>Heatmaps</strong>: Useful for visualizing matrix-style data and finding patterns.</li>
            </ul>
            </p>

            <h2>4. When and Why to Use Visualizations</h2>
            <p>
                Visualizations are particularly useful when you need to:
            <ul>
                <li>Communicate data findings effectively to non-technical stakeholders.</li>
                <li>Explore data interactively to detect trends, outliers, and relationships.</li>
                <li>Present insights in a clear and accessible manner.</li>
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