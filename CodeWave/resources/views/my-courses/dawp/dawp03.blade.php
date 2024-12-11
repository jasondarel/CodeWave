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
                <li><a href="/lessons/dawp/dawp01">Chapter 1: Data Manipulation with Pandas and NumPy</a></li>
                <li><a href="/lessons/dawp/dawp02">Chapter 2: Data Cleaning and Preprocessing Techniques</a></li>
                <li class="active"><a href="/lessons/dawp/dawp03">Chapter 3: Statistical Analysis and Hypothesis Testing</a></li>
                <li><a href="/lessons/dawp/dawp04">Chapter 4: Data Visualization using Matplotlib and Seaborn</a></li>
                <li><a href="/lessons/dawp/dawp05">Chapter 5: Building Data Analysis Projects and Reports</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Statistical Analysis and Hypothesis Testing</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the basics of statistical analysis</li>
                <li>Learn about hypothesis testing and its importance</li>
                <li>Explore common statistical tests in Python (e.g., t-test, chi-squared test)</li>
                <li>Learn how to interpret statistical results</li>
            </ul>

            <h2>1. Introduction to Statistical Analysis</h2>
            <p>
                Statistical analysis helps you summarize and make sense of data. It involves applying mathematical techniques to data in order to draw conclusions or make predictions.
            </p>

            <h2>2. Hypothesis Testing</h2>
            <p>
                Hypothesis testing is a method used to test if there is enough statistical evidence to support or reject a hypothesis. You start by stating a null hypothesis (H0) and an alternative hypothesis (H1), then perform a test to determine which hypothesis is more likely.
            </p>

            <h3>Types of Tests</h3>
            <p>
                Common statistical tests include:
            <ul>
                <li><strong>T-test</strong> – compares the means of two groups</li>
                <li><strong>Chi-Squared Test</strong> – tests relationships between categorical variables</li>
                <li><strong>ANOVA</strong> – compares the means of three or more groups</li>
            </ul>
            </p>

            <h2>3. Performing a t-test in Python</h2>
            <p>
                The t-test is used to compare the means of two groups. Here’s how you can perform a t-test in Python using the SciPy library:
            </p>
            <pre>
                from scipy import stats

                # Sample data
                group1 = [23, 21, 18, 30, 25]
                group2 = [28, 25, 30, 34, 32]

                # Perform t-test
                t_stat, p_value = stats.ttest_ind(group1, group2)
                print(f"T-statistic: {t_stat}, P-value: {p_value}")
            </pre>

            <h2>4. Chi-Squared Test</h2>
            <p>
                The Chi-Squared test is used to determine if there is a significant association between two categorical variables. Here's an example:
            </p>
            <pre>
                from scipy.stats import chi2_contingency

                # Contingency table
                data = [[10, 20], [20, 30]]

                # Perform Chi-squared test
                chi2, p, dof, expected = chi2_contingency(data)
                print(f"Chi-squared value: {chi2}, P-value: {p}")
            </pre>

            <h2>5. Interpreting Statistical Results</h2>
            <p>
                After performing a statistical test, the p-value tells you whether the result is statistically significant. Typically:
            <ul>
                <li>If p < 0.05, the result is considered statistically significant</li>
                <li>If p ≥ 0.05, there is no significant evidence to reject the null hypothesis</li>
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