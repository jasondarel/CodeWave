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
                <li><a href="/lessons/dvwp/dvwp01">Chapter 1: Introduction to Data Visualization with Python</a></li>
                <li><a href="/lessons/dvwp/dvwp02">Chapter 2: Creating Static Plots with Matplotlib</a></li>
                <li><a href="/lessons/dvwp/dvwp03">Chapter 3: Building Advanced Visualizations using Seaborn</a></li>
                <li class="active"><a href="/lessons/dvwp/dvwp04">Chapter 4: Interactive Data Visualizations with Plotly</a></li>
                <li><a href="/lessons/dvwp/dvwp05">Chapter 5: Using Visualization for Data Analysis and Reporting</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Interactive Data Visualizations with Plotly</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the basics of interactive visualizations</li>
                <li>Learn how to create interactive plots using Plotly</li>
                <li>Explore interactive scatter plots, line charts, and bar charts</li>
                <li>Customize interactive visualizations with Plotly's tools</li>
            </ul>

            <h2>1. Introduction to Plotly</h2>
            <p>
                Plotly is a powerful library for creating interactive, web-based visualizations. Unlike static plots, interactive visualizations allow users to zoom, hover over points, and explore the data dynamically.
            </p>

            <h2>2. Creating a Basic Interactive Plot</h2>
            <p>
                Here's an example of how to create an interactive scatter plot using Plotly:
            </p>
            <pre>
                import plotly.express as px
                df = px.data.iris()
                fig = px.scatter(df, x='sepal_width', y='sepal_length', color='species', title='Iris Dataset Scatter Plot')
                fig.show()
            </pre>

            <h2>3. Interactive Line Chart</h2>
            <p>
                You can create an interactive line chart using Plotly, which allows for zooming and tooltips. Here's an example:
            </p>
            <pre>
                df = px.data.gapminder()
                fig = px.line(df, x="year", y="gdpPercap", color="continent", title="GDP per Capita Over Time")
                fig.show()
            </pre>

            <h2>4. Interactive Bar Chart</h2>
            <p>
                Bar charts can also be made interactive with Plotly. Here's an example:
            </p>
            <pre>
                df = px.data.tips()
                fig = px.bar(df, x="day", y="total_bill", color="sex", title="Total Bill by Day")
                fig.show()
            </pre>

            <h2>5. Customizing Plotly Plots</h2>
            <p>
                Plotly provides various customization options to enhance the look and feel of your plots, such as adjusting the layout, adding titles, and changing colors:
            </p>
            <pre>
                fig.update_layout(
                    title="Customized Plot",
                    xaxis_title="X Axis",
                    yaxis_title="Y Axis",
                    template="plotly_dark"
                )
                fig.show()
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>