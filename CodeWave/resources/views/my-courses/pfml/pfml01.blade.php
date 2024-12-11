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
                <li class="active"><a href="/lessons/pfml/pfml01">Chapter 1: Introduction to Machine Learning and Its Applications</a></li>
                <li><a href="/lessons/pfml/pfml02">Chapter 2: Understanding Supervised and Unsupervised Learning Algorithms</a></li>
                <li><a href="/lessons/pfml/pfml03">Chapter 3: Working with Scikit-Learn for Model Building and Evaluation</a></li>
                <li><a href="/lessons/pfml/pfml04">Chapter 4: Introduction to Neural Networks with TensorFlow</a></li>
                <li><a href="/lessons/pfml/pfml05">Chapter 5: Building and Deploying Machine Learning Models</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Introduction to Machine Learning and Its Applications</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the fundamentals of machine learning</li>
                <li>Learn about the different types of machine learning</li>
                <li>Explore various applications of machine learning in real-world scenarios</li>
            </ul>

            <h2>1. What is Machine Learning?</h2>
            <p>
                Machine learning is a field of artificial intelligence that allows computers to learn from data and make decisions without being explicitly programmed. The idea is to use algorithms to analyze data, identify patterns, and make predictions or decisions based on that data.
            </p>
            <p>
                Machine learning is used in a variety of applications, from self-driving cars to recommendation systems, medical diagnoses, fraud detection, and more.
            </p>

            <h2>2. Types of Machine Learning</h2>
            <p>
                There are three main types of machine learning:
            </p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><strong>Supervised Learning:</strong> The model is trained on labeled data, where the output is already known. It is used for classification and regression tasks.</li>
                <li><strong>Unsupervised Learning:</strong> The model is trained on unlabeled data and must find patterns or groupings within the data. It is used for clustering and association tasks.</li>
                <li><strong>Reinforcement Learning:</strong> The model learns through trial and error, receiving rewards or penalties based on actions taken. This type of learning is commonly used in robotics and gaming.</li>
            </ul>

            <h2>3. Applications of Machine Learning</h2>
            <p>
                Machine learning has a wide range of applications in various industries, including:
            </p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><strong>Healthcare:</strong> Machine learning algorithms are used for medical diagnosis, drug discovery, and personalized treatment plans.</li>
                <li><strong>Finance:</strong> Algorithms are used for fraud detection, stock market prediction, and credit scoring.</li>
                <li><strong>Retail:</strong> Machine learning helps retailers personalize recommendations, manage inventory, and predict demand.</li>
                <li><strong>Transportation:</strong> Autonomous vehicles and route optimization are driven by machine learning models.</li>
            </ul>

            <h2>4. Key Concepts in Machine Learning</h2>
            <p>
                Some key concepts to understand in machine learning include:
            </p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><strong>Features:</strong> The input variables that the model uses to make predictions.</li>
                <li><strong>Target:</strong> The output or value the model aims to predict.</li>
                <li><strong>Model:</strong> A mathematical representation of a real-world process, learned from data.</li>
                <li><strong>Training:</strong> The process of feeding data into the model to help it learn the patterns.</li>
                <li><strong>Evaluation:</strong> The process of testing the model's performance on new, unseen data.</li>
            </ul>

            <h2>5. Tools for Machine Learning</h2>
            <p>
                In this course, we'll be using Python and several libraries that are commonly used for machine learning tasks. These include:
            </p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><strong>Scikit-Learn:</strong> A powerful library for building machine learning models and performing data analysis.</li>
                <li><strong>TensorFlow:</strong> An open-source library for building and training neural networks.</li>
                <li><strong>Keras:</strong> A high-level neural network API, written in Python and capable of running on top of TensorFlow.</li>
            </ul>

            <h2>6. Conclusion</h2>
            <p>
                Machine learning is a rapidly growing field with a wide range of applications across industries. In this course, you'll learn how to build and evaluate machine learning models using Python, and apply these techniques to solve real-world problems.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>