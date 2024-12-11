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
                <li><a href="/lessons/pfml/pfml01">Chapter 1: Introduction to Machine Learning and Its Applications</a></li>
                <li><a href="/lessons/pfml/pfml02">Chapter 2: Understanding Supervised and Unsupervised Learning Algorithms</a></li>
                <li class="active"><a href="/lessons/pfml/pfml03">Chapter 3: Working with Scikit-Learn for Model Building and Evaluation</a></li>
                <li><a href="/lessons/pfml/pfml04">Chapter 4: Introduction to Neural Networks with TensorFlow</a></li>
                <li><a href="/lessons/pfml/pfml05">Chapter 5: Building and Deploying Machine Learning Models</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Working with Scikit-Learn for Model Building and Evaluation</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to use Scikit-Learn to build machine learning models</li>
                <li>Understand the process of model evaluation and selection</li>
                <li>Explore techniques for improving model performance</li>
            </ul>

            <h2>1. Introduction to Scikit-Learn</h2>
            <p>
                Scikit-Learn is one of the most popular libraries in Python for building machine learning models. It provides simple and efficient tools for data mining and data analysis. Scikit-Learn is built on top of other Python libraries, including NumPy, SciPy, and matplotlib.
            </p>
            <p>
                In this chapter, we'll explore how to use Scikit-Learn to build machine learning models. The process typically involves the following steps:
            </p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Preprocessing the data</li>
                <li>Splitting the data into training and testing sets</li>
                <li>Training the model on the training data</li>
                <li>Evaluating the model's performance</li>
                <li>Tuning the model's hyperparameters</li>
            </ul>

            <h2>2. Building a Model with Scikit-Learn</h2>
            <p>
                To build a model with Scikit-Learn, you'll first need to select an algorithm. For classification tasks, common algorithms include logistic regression, decision trees, and support vector machines (SVM). For regression tasks, algorithms like linear regression and decision trees can be used.
            </p>
            <p>
                After choosing an algorithm, you can use Scikit-Learn's built-in methods to train the model using your training data. Here's an example using a simple classifier (e.g., Logistic Regression):
            </p>
            <pre><code>
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression
from sklearn.datasets import load_iris

# Load dataset
data = load_iris()
X = data.data
y = data.target

# Split dataset into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3)

# Train the model
model = LogisticRegression(max_iter=200)
model.fit(X_train, y_train)
            </code></pre>

            <h2>3. Model Evaluation</h2>
            <p>
                Once the model is trained, it's important to evaluate its performance. Scikit-Learn provides several metrics to assess the model's accuracy, such as:
            </p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><strong>Accuracy:</strong> The proportion of correct predictions made by the model.</li>
                <li><strong>Confusion Matrix:</strong> A matrix that shows the number of correct and incorrect predictions for each class.</li>
                <li><strong>Precision, Recall, and F1-Score:</strong> Metrics that help evaluate how well the model performs on imbalanced datasets.</li>
            </ul>
            <p>
                Here's how to evaluate the logistic regression model using accuracy:
            </p>
            <pre><code>
from sklearn.metrics import accuracy_score

# Make predictions on the test set
y_pred = model.predict(X_test)

# Evaluate the model's accuracy
accuracy = accuracy_score(y_test, y_pred)
print("Accuracy:", accuracy)
            </code></pre>

            <h2>4. Hyperparameter Tuning</h2>
            <p>
                Hyperparameter tuning is the process of finding the optimal settings for the model's hyperparameters. Scikit-Learn provides several methods for hyperparameter tuning, including:
            </p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><strong>GridSearchCV:</strong> An exhaustive search over a specified parameter grid to find the best combination of hyperparameters.</li>
                <li><strong>RandomizedSearchCV:</strong> A randomized search over hyperparameters, which can be more efficient than grid search.</li>
            </ul>
            <p>
                Here's an example of hyperparameter tuning using GridSearchCV for a support vector machine (SVM):
            </p>
            <pre><code>
from sklearn.svm import SVC
from sklearn.model_selection import GridSearchCV

# Define the parameter grid
param_grid = {'C': [0.1, 1, 10], 'kernel': ['linear', 'rbf']}

# Instantiate the model
svm = SVC()

# Perform grid search
grid_search = GridSearchCV(svm, param_grid, cv=5)
grid_search.fit(X_train, y_train)

# Get the best hyperparameters
print("Best parameters:", grid_search.best_params_)
            </code></pre>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we learned how to build, evaluate, and tune machine learning models using Scikit-Learn. By following these steps, you can develop and refine models that can make accurate predictions on a wide variety of tasks.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>