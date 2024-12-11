<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python for Beginners</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .course-header {
            width: 100%;
            height: 400px;
            background-image: url('https://i.pinimg.com/originals/c2/6a/58/c26a58af112f4cad08629893409f32c5.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .course-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .course-title {
            color: white;
            font-size: 48px;
            font-weight: bold;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
            text-align: center;
            z-index: 2;
        }

        .back-link {
            font-size: 24px;
            color: #007BFF;
            text-decoration: none;
            margin-top: 10px;
            margin-left: 20px;
            display: inline-block;
        }

        .back-link:hover {
            color: #0056b3;
        }

        .course-content {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .course-section {
            margin-bottom: 20px;
        }

        .course-section h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .course-section p {
            font-size: 18px;
            color: #555;
        }

        .cta-button {
            display: block;
            text-align: center;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .cta-button:hover {
            background-color: #0056b3;
        }

        .styled-list {
            list-style: none;
            padding-left: 0;
        }

        .styled-list li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 18px;
            color: #555;
        }

        .styled-list li::before {
            content: "\f058";
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            font-size: 20px;
            color: #007BFF;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    @extends('layout')

    @section('content')
    <a href="javascript:history.back()" class="back-link">
        &#8592;
    </a>
    <div class="course-header">
        <div class="course-title">Data Analysis with Python</div>
    </div>

    <div class="course-content">
        <div class="course-section">
            <h2><strong>Course Overview</strong></h2>
            <p>
                This course provides an introduction to data analysis using Python. You will learn how to clean and analyze datasets, perform statistical analysis, and visualize results with tools such as Pandas, NumPy, and Matplotlib. By the end of the course, you'll be able to work confidently with data and generate insights.
            </p>
        </div>

        <div class="course-section mt-20">
            <h2><i class="fas fa-list-ul"></i> <strong>What You'll Learn</strong></h2>
            <ul class="styled-list">
                <li>Data manipulation with Pandas and NumPy</li>
                <li>Data cleaning and preprocessing techniques</li>
                <li>Statistical analysis and hypothesis testing</li>
                <li>Data visualization using Matplotlib and Seaborn</li>
                <li>Building data analysis projects and reports</li>
            </ul>
        </div>




        <a href="/enroll/2" class="cta-button mt-20">Enroll Now</a>
    </div>

    @endsection
</body>

</html>