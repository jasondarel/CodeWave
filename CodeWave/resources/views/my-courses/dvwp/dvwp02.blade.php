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
                <li><a href="/lessons/dvwp/dvwp01">Chapter 1: Introduction to Data Visualization with Python</a></li>
                <li class="active"><a href="/lessons/dvwp/dvwp02">Chapter 2: Creating Static Plots with Matplotlib</a></li>
                <li><a href="/lessons/dvwp/dvwp03">Chapter 3: Building Advanced Visualizations using Seaborn</a></li>
                <li><a href="/lessons/dvwp/dvwp04">Chapter 4: Interactive Data Visualizations with Plotly</a></li>
                <li><a href="/lessons/dvwp/dvwp05">Chapter 5: Using Visualization for Data Analysis and Reporting</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Creating Static Plots with Matplotlib</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the basics of Matplotlib for static plotting</li>
                <li>Create line plots, bar charts, histograms, and scatter plots</li>
                <li>Customize plots with titles, labels, and legends</li>
                <li>Learn how to save and display plots</li>
            </ul>

            <h2>1. Introduction to Matplotlib</h2>
            <p>
                Matplotlib is one of the most commonly used libraries for creating static plots in Python. It provides a flexible framework for creating various types of plots and is often used for data analysis and visualization in scientific and engineering fields.
            </p>

            <h2>2. Creating a Simple Line Plot</h2>
            <p>
                A line plot is a basic plot that connects data points with a line. It is useful for showing trends over time or ordered categories. Here's how you can create a simple line plot using Matplotlib:
            </p>
            <pre>
                import matplotlib.pyplot as plt
                x = [1, 2, 3, 4, 5]
                y = [2, 3, 5, 7, 11]
                plt.plot(x, y)
                plt.title('Simple Line Plot')
                plt.xlabel('X-axis')
                plt.ylabel('Y-axis')
                plt.show()
            </pre>

            <h2>3. Bar Chart</h2>
            <p>
                Bar charts are useful for comparing discrete categories. Here's an example of how to create a bar chart:
            </p>
            <pre>
                categories = ['A', 'B', 'C', 'D']
                values = [3, 7, 2, 5]
                plt.bar(categories, values)
                plt.title('Bar Chart Example')
                plt.xlabel('Category')
                plt.ylabel('Values')
                plt.show()
            </pre>

            <h2>4. Scatter Plot</h2>
            <p>
                Scatter plots are used to show the relationship between two continuous variables. Here's an example:
            </p>
            <pre>
                x = [1, 2, 3, 4, 5]
                y = [5, 4, 3, 2, 1]
                plt.scatter(x, y)
                plt.title('Scatter Plot Example')
                plt.xlabel('X-axis')
                plt.ylabel('Y-axis')
                plt.show()
            </pre>

            <h2>5. Customizing Plots</h2>
            <p>
                Matplotlib allows you to customize the appearance of your plots, including adding titles, labels, legends, and adjusting the colors and styles of the lines.
            </p>
            <pre>
                plt.plot(x, y, color='green', linestyle='--', marker='o')
                plt.title('Customized Line Plot')
                plt.xlabel('X-axis')
                plt.ylabel('Y-axis')
                plt.legend(['Line 1'])
                plt.show()
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>