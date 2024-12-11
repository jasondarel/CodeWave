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
                <li><a href="/lessons/dvwp/dvwp01">Chapter 1: Introduction to Data Visualization with Python</a></li>
                <li><a href="/lessons/dvwp/dvwp02">Chapter 2: Creating Static Plots with Matplotlib</a></li>
                <li class="active"><a href="/lessons/dvwp/dvwp03">Chapter 3: Building Advanced Visualizations using Seaborn</a></li>
                <li><a href="/lessons/dvwp/dvwp04">Chapter 4: Interactive Data Visualizations with Plotly</a></li>
                <li><a href="/lessons/dvwp/dvwp05">Chapter 5: Using Visualization for Data Analysis and Reporting</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Building Advanced Visualizations using Seaborn</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the basics of Seaborn for creating advanced visualizations</li>
                <li>Learn how to create heatmaps, pair plots, and violin plots</li>
                <li>Explore how to work with categorical data in Seaborn</li>
                <li>Customize Seaborn plots for better presentation</li>
            </ul>

            <h2>1. Introduction to Seaborn</h2>
            <p>
                Seaborn is built on top of Matplotlib and is specifically designed for statistical data visualization. It makes it easier to create complex plots with less code, including various advanced visualizations like heatmaps and pair plots.
            </p>

            <h2>2. Creating a Heatmap</h2>
            <p>
                Heatmaps are useful for visualizing correlations or relationships between variables. Here's an example of creating a heatmap using Seaborn:
            </p>
            <pre>
                import seaborn as sns
                import matplotlib.pyplot as plt
                import numpy as np

                data = np.random.rand(10, 12)
                sns.heatmap(data, annot=True, cmap='coolwarm')
                plt.title('Heatmap Example')
                plt.show()
            </pre>

            <h2>3. Pair Plot</h2>
            <p>
                Pair plots are used to visualize relationships between all numeric variables in a dataset. Here's an example of creating a pair plot:
            </p>
            <pre>
                import seaborn as sns
                iris = sns.load_dataset('iris')
                sns.pairplot(iris)
                plt.title('Pair Plot Example')
                plt.show()
            </pre>

            <h2>4. Violin Plot</h2>
            <p>
                Violin plots are a combination of box plots and density plots, making them useful for understanding distributions. Here's an example:
            </p>
            <pre>
                sns.violinplot(x='species', y='sepal_length', data=iris)
                plt.title('Violin Plot Example')
                plt.show()
            </pre>

            <h2>5. Customizing Seaborn Plots</h2>
            <p>
                Seaborn allows you to customize the appearance of your plots, such as adding titles, changing colors, and modifying the style. Here's how you can customize a plot:
            </p>
            <pre>
                sns.set(style="whitegrid")
                sns.boxplot(x='species', y='sepal_length', data=iris, palette="Set2")
                plt.title('Customized Box Plot')
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