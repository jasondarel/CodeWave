<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 4</title>
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
                <li><a href="/lessons/dawp/dawp01">Chapter 1: Data Manipulation with Pandas and NumPy</a></li>
                <li><a href="/lessons/dawp/dawp02">Chapter 2: Data Cleaning and Preprocessing Techniques</a></li>
                <li><a href="/lessons/dawp/dawp03">Chapter 3: Statistical Analysis and Hypothesis Testing</a></li>
                <li class="active"><a href="/lessons/dawp/dawp04">Chapter 4: Data Visualization using Matplotlib and Seaborn</a></li>
                <li><a href="/lessons/dawp/dawp05">Chapter 5: Building Data Analysis Projects and Reports</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Data Visualization using Matplotlib and Seaborn</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the importance of data visualization in data analysis</li>
                <li>Learn how to create basic plots using Matplotlib</li>
                <li>Explore advanced visualization techniques using Seaborn</li>
                <li>Learn how to customize plots and improve data presentation</li>
            </ul>

            <h2>1. Introduction to Data Visualization</h2>
            <p>
                Data visualization is a crucial step in data analysis, allowing you to convey patterns, trends, and insights from your data through visual means. In this chapter, we'll learn to use two powerful libraries in Python: Matplotlib and Seaborn.
            </p>

            <h2>2. Creating Basic Plots with Matplotlib</h2>
            <p>
                Matplotlib is a widely-used library for creating basic plots in Python. Below is an example of how to create a simple line plot:
            </p>
            <pre>
                import matplotlib.pyplot as plt

                # Sample data
                x = [1, 2, 3, 4, 5]
                y = [2, 4, 6, 8, 10]

                # Create a line plot
                plt.plot(x, y)
                plt.title("Basic Line Plot")
                plt.xlabel("X-axis")
                plt.ylabel("Y-axis")
                plt.show()
            </pre>

            <h2>3. Creating Advanced Visualizations with Seaborn</h2>
            <p>
                Seaborn is built on top of Matplotlib and provides a higher-level interface for creating more complex and aesthetically pleasing visualizations. Here's how to create a bar plot using Seaborn:
            </p>
            <pre>
                import seaborn as sns

                # Sample data
                data = {'Category': ['A', 'B', 'C'], 'Values': [5, 7, 3]}

                # Create a bar plot
                sns.barplot(x='Category', y='Values', data=data)
                plt.title("Bar Plot")
                plt.show()
            </pre>

            <h2>4. Customizing Your Plots</h2>
            <p>
                Both Matplotlib and Seaborn allow you to customize your plots with different themes, colors, and styles. For example, you can change the plot's appearance in Seaborn as follows:
            </p>
            <pre>
                sns.set_theme(style="darkgrid")

                # Create a plot with a dark grid style
                sns.lineplot(x=x, y=y)
                plt.title("Line Plot with Dark Grid")
                plt.show()
            </pre>

            <h2>5. Visualizing Correlations and Distributions</h2>
            <p>
                One of Seaborn’s strengths is its ability to easily create visualizations for statistical data such as correlations and distributions. Below is an example of how to visualize a correlation matrix using a heatmap:
            </p>
            <pre>
                import numpy as np

                # Create a correlation matrix
                corr_matrix = np.random.rand(5, 5)

                # Create a heatmap
                sns.heatmap(corr_matrix, annot=True, cmap="coolwarm")
                plt.title("Correlation Matrix Heatmap")
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