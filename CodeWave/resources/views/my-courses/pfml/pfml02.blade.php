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
                <li><a href="/lessons/pfml/pfml01">Chapter 1: Introduction to Machine Learning and Its Applications</a></li>
                <li class="active"><a href="/lessons/pfml/pfml02">Chapter 2: Understanding Supervised and Unsupervised Learning Algorithms</a></li>
                <li><a href="/lessons/pfml/pfml03">Chapter 3: Working with Scikit-Learn for Model Building and Evaluation</a></li>
                <li><a href="/lessons/pfml/pfml04">Chapter 4: Introduction to Neural Networks with TensorFlow</a></li>
                <li><a href="/lessons/pfml/pfml05">Chapter 5: Building and Deploying Machine Learning Models</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Understanding Supervised and Unsupervised Learning Algorithms</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the difference between supervised and unsupervised learning</li>
                <li>Learn about common supervised learning algorithms</li>
                <li>Learn about common unsupervised learning algorithms</li>
                <li>Explore real-world examples of both types of learning</li>
            </ul>

            <h2>1. Supervised Learning</h2>
            <p>
                Supervised learning is a type of machine learning where the model is trained on labeled data. The goal is for the model to learn the relationship between the input (features) and output (target), so it can make accurate predictions on new, unseen data.
            </p>
            <p>
                Supervised learning is commonly used for tasks like classification and regression. For example, in a classification task, the model might predict whether an email is spam or not based on labeled examples, while in a regression task, it might predict the price of a house based on its features (size, location, etc.).
            </p>

            <h2>2. Common Supervised Learning Algorithms</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><strong>Linear Regression:</strong> A simple algorithm used for regression tasks where the relationship between the input and output is assumed to be linear.</li>
                <li><strong>Logistic Regression:</strong> A classification algorithm used to predict binary outcomes (e.g., spam or not spam).</li>
                <li><strong>Decision Trees:</strong> A tree-like structure that splits data into subsets based on features to make predictions.</li>
                <li><strong>Support Vector Machines (SVM):</strong> A powerful classification algorithm that finds the optimal hyperplane to separate different classes in the feature space.</li>
                <li><strong>K-Nearest Neighbors (KNN):</strong> A simple classification algorithm that predicts the class of a data point based on the majority class of its neighbors.</li>
            </ul>

            <h2>3. Unsupervised Learning</h2>
            <p>
                Unsupervised learning, unlike supervised learning, involves training a model on data that has no labels or predefined output. The goal is to find patterns or structure in the data without explicit guidance. Unsupervised learning is typically used for clustering and dimensionality reduction tasks.
            </p>
            <p>
                For example, in clustering, the model might group customers into segments based on purchasing behavior, and in dimensionality reduction, it might reduce the number of features in the data while retaining important information.
            </p>

            <h2>4. Common Unsupervised Learning Algorithms</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><strong>K-Means Clustering:</strong> A popular algorithm used to group data points into a predefined number of clusters based on their similarities.</li>
                <li><strong>Hierarchical Clustering:</strong> A method of clustering that builds a tree-like structure of nested clusters based on the similarity between data points.</li>
                <li><strong>Principal Component Analysis (PCA):</strong> A technique for reducing the dimensionality of the data while preserving as much variance as possible.</li>
                <li><strong>Autoencoders:</strong> A type of neural network used for unsupervised learning tasks like feature extraction and dimensionality reduction.</li>
            </ul>

            <h2>5. Supervised vs Unsupervised Learning</h2>
            <p>
                The main difference between supervised and unsupervised learning is the presence of labeled data. In supervised learning, the model learns from labeled data with known outputs, while in unsupervised learning, the model discovers patterns in data without labels.
            </p>
            <p>
                While supervised learning is typically used for prediction tasks (classification or regression), unsupervised learning is often used for discovering hidden structures or patterns in data, like clustering or dimensionality reduction.
            </p>

            <h2>6. Conclusion</h2>
            <p>
                In this chapter, we learned the fundamental differences between supervised and unsupervised learning algorithms. Understanding these algorithms is essential for building machine learning models that can solve real-world problems, whether it's predicting outcomes or finding hidden patterns in data.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>