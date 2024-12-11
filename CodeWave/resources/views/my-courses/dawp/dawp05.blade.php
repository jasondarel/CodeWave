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
                <li><a href="/lessons/dawp/dawp01">Chapter 1: Data Manipulation with Pandas and NumPy</a></li>
                <li><a href="/lessons/dawp/dawp02">Chapter 2: Data Cleaning and Preprocessing Techniques</a></li>
                <li><a href="/lessons/dawp/dawp03">Chapter 3: Statistical Analysis and Hypothesis Testing</a></li>
                <li><a href="/lessons/dawp/dawp04">Chapter 4: Data Visualization using Matplotlib and Seaborn</a></li>
                <li class="active"><a href="/lessons/dawp/dawp05">Chapter 5: Building Data Analysis Projects and Reports</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Building Data Analysis Projects and Reports</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand how to structure a data analysis project</li>
                <li>Learn best practices for writing clear and reproducible reports</li>
                <li>Learn to document and present your findings effectively</li>
                <li>Explore tools for sharing and publishing data analysis projects</li>
            </ul>

            <h2>1. Structuring Your Data Analysis Project</h2>
            <p>
                A well-structured data analysis project is essential for ensuring clarity and reproducibility. Generally, it consists of the following components:
            <ul>
                <li>Introduction and Problem Statement</li>
                <li>Data Collection and Cleaning</li>
                <li>Data Exploration and Analysis</li>
                <li>Results and Insights</li>
                <li>Conclusion and Recommendations</li>
            </ul>
            This structure helps both the analyst and the reader understand the problem and the methodology.
            </p>

            <h2>2. Writing Reproducible Reports</h2>
            <p>
                Reproducibility is a cornerstone of good data analysis. Using Jupyter notebooks is an excellent way to document your process and present your analysis. By including code, visualizations, and explanations, you ensure that others can reproduce your work.
            </p>
            <pre>
                # Sample Jupyter code
                import pandas as pd
                df = pd.read_csv("data.csv")
                df.head()
            </pre>

            <h2>3. Documenting and Presenting Your Findings</h2>
            <p>
                Once your analysis is complete, it's important to present your findings in a clear and concise manner. Consider using visualizations to emphasize key insights. Tools like Matplotlib, Seaborn, and Plotly can help you create visually appealing graphs to communicate your results.
            </p>
            <pre>
                import seaborn as sns
                sns.barplot(x='Category', y='Values', data=data)
                plt.title("Category Wise Values")
                plt.show()
            </pre>

            <h2>4. Sharing Your Project</h2>
            <p>
                Sharing your project with others is a key part of data analysis. Platforms like GitHub allow you to host your Jupyter notebooks and make them publicly available. Alternatively, you can export your notebooks to HTML or PDF for easier sharing.
            </p>
            <pre>
                # Save the Jupyter notebook as an HTML file
                from IPython.core.display import display, HTML
                display(HTML("notebook.html"))
            </pre>

            <h2>5. Best Practices for Reporting</h2>
            <p>
                To ensure that your reports are clear and professional, keep the following best practices in mind:
            <ul>
                <li>Use clear and concise language</li>
                <li>Ensure your visualizations are easy to interpret</li>
                <li>Provide context and explanations for your findings</li>
                <li>Make your work accessible to a wider audience</li>
            </ul>
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>