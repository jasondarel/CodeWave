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
                <li><a href="/lessons/dawp/dawp01">Chapter 1: Data Manipulation with Pandas and NumPy</a></li>
                <li class="active"><a href="/lessons/dawp/dawp02">Chapter 2: Data Cleaning and Preprocessing Techniques</a></li>
                <li><a href="/lessons/dawp/dawp03">Chapter 3: Statistical Analysis and Hypothesis Testing</a></li>
                <li><a href="/lessons/dawp/dawp04">Chapter 4: Data Visualization using Matplotlib and Seaborn</a></li>
                <li><a href="/lessons/dawp/dawp05">Chapter 5: Building Data Analysis Projects and Reports</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Data Cleaning and Preprocessing Techniques</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn the importance of data cleaning and preprocessing in data analysis</li>
                <li>Understand common techniques for handling missing values</li>
                <li>Explore how to handle categorical data and outliers</li>
                <li>Learn to normalize and scale data for machine learning models</li>
            </ul>

            <h2>1. Importance of Data Cleaning</h2>
            <p>
                Raw data often comes with errors or inconsistencies that can affect the analysis. Data cleaning is essential to remove or correct such issues, ensuring that your results are accurate and reliable.
            </p>

            <h2>2. Handling Missing Data</h2>
            <p>
                Missing data is a common issue. You can handle it by filling in missing values, dropping rows or columns with missing data, or using techniques like interpolation or imputation.
            </p>
            <pre>
                import pandas as pd

                # Creating a DataFrame with missing values
                data = {'Name': ['Alice', 'Bob', 'Charlie'],
                        'Age': [24, None, 22],
                        'City': ['New York', 'Los Angeles', 'Chicago']}
                df = pd.DataFrame(data)

                # Filling missing values with the mean of the column
                df['Age'].fillna(df['Age'].mean(), inplace=True)
                print(df)
            </pre>

            <h2>3. Handling Categorical Data</h2>
            <p>
                Categorical data needs to be converted into numerical values for machine learning models. You can use techniques such as one-hot encoding or label encoding to achieve this.
            </p>
            <pre>
                # One-hot encoding
                df = pd.get_dummies(df, columns=['City'])
                print(df)
            </pre>

            <h2>4. Detecting and Handling Outliers</h2>
            <p>
                Outliers can distort the analysis and lead to inaccurate conclusions. Identifying and handling outliers involves using statistical techniques such as Z-scores or IQR (Interquartile Range).
            </p>
            <pre>
                # Identifying outliers using Z-score
                from scipy import stats

                z_scores = stats.zscore(df['Age'])
                print(z_scores)
            </pre>

            <h2>5. Data Normalization and Scaling</h2>
            <p>
                Normalization and scaling are techniques used to standardize data to a common scale, particularly when dealing with different units or ranges in your dataset. This is important for machine learning algorithms.
            </p>
            <pre>
                from sklearn.preprocessing import StandardScaler

                scaler = StandardScaler()
                df['Age_scaled'] = scaler.fit_transform(df[['Age']])
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