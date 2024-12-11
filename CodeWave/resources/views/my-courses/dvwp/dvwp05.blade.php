<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 5</title>
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
                <li><a href="/lessons/dvwp/dvwp04">Chapter 4: Interactive Data Visualizations with Plotly</a></li>
                <li class="active"><a href="/lessons/dvwp/dvwp05">Chapter 5: Using Visualization for Data Analysis and Reporting</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Using Visualization for Data Analysis and Reporting</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the role of visualization in data analysis</li>
                <li>Learn how to use visualization to identify trends and insights</li>
                <li>Create effective visualizations for reporting purposes</li>
                <li>Integrate visualizations into data analysis projects and reports</li>
            </ul>

            <h2>1. Role of Visualization in Data Analysis</h2>
            <p>
                Visualization is crucial in data analysis because it allows you to present complex data in an understandable form. By using different types of charts and graphs, you can identify trends, outliers, and relationships within the data.
            </p>

            <h2>2. Identifying Trends and Insights</h2>
            <p>
                Visualizing data helps in uncovering patterns, correlations, and trends that might not be immediately obvious in raw data. For example, line charts and bar charts can reveal trends over time or compare different categories.
            </p>
            <pre>
                import plotly.express as px
                df = px.data.gapminder()
                fig = px.line(df, x="year", y="gdpPercap", color="continent", title="GDP per Capita Over Time")
                fig.show()
            </pre>

            <h2>3. Effective Visualizations for Reporting</h2>
            <p>
                When presenting data to stakeholders or decision-makers, it's important to focus on clear and meaningful visualizations. Choose the right chart type based on the story you want to tell with the data, and avoid clutter or unnecessary details.
            </p>

            <h2>4. Integrating Visualizations into Reports</h2>
            <p>
                Visualizations are often included in reports to support conclusions and recommendations. Ensure that your visualizations are clean, annotated, and well-integrated with your findings.
            </p>
            <pre>
                fig.update_layout(
                    title="Data Analysis Report",
                    xaxis_title="Year",
                    yaxis_title="GDP per Capita",
                    template="plotly_white"
                )
                fig.show()
            </pre>

            <h2>5. Using Dashboards for Interactive Reporting</h2>
            <p>
                Dashboards are a powerful way to present interactive visualizations and provide real-time data insights. With tools like Plotly Dash, you can create web-based dashboards that allow users to interact with the data and view updates in real time.
            </p>
            <pre>
                import dash
                import dash_core_components as dcc
                import dash_html_components as html

                app = dash.Dash(__name__)

                app.layout = html.Div([
                    dcc.Graph(figure=fig)
                ])

                if __name__ == "__main__":
                    app.run_server(debug=True)
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>