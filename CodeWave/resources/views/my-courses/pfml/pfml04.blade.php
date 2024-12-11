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
                <li><a href="/lessons/pfml/pfml01">Chapter 1: Introduction to Machine Learning and Its Applications</a></li>
                <li><a href="/lessons/pfml/pfml02">Chapter 2: Understanding Supervised and Unsupervised Learning Algorithms</a></li>
                <li><a href="/lessons/pfml/pfml03">Chapter 3: Working with Scikit-Learn for Model Building and Evaluation</a></li>
                <li class="active"><a href="/lessons/pfml/pfml04">Chapter 4: Introduction to Neural Networks with TensorFlow</a></li>
                <li><a href="/lessons/pfml/pfml05">Chapter 5: Building and Deploying Machine Learning Models</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Introduction to Neural Networks with TensorFlow</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the basics of neural networks</li>
                <li>Learn how to use TensorFlow for building neural networks</li>
                <li>Explore the process of training and evaluating neural network models</li>
            </ul>

            <h2>1. Introduction to Neural Networks</h2>
            <p>
                A neural network is a machine learning model inspired by the human brain. It consists of layers of interconnected nodes, or "neurons", each representing a computation. These neurons are organized into an input layer, one or more hidden layers, and an output layer.
            </p>
            <p>
                Neural networks are commonly used for tasks such as image recognition, speech recognition, and natural language processing. The power of neural networks lies in their ability to learn complex patterns in data, making them suitable for a wide range of machine learning tasks.
            </p>

            <h2>2. Getting Started with TensorFlow</h2>
            <p>
                TensorFlow is an open-source library developed by Google for machine learning and deep learning. It provides a comprehensive ecosystem for building and deploying machine learning models, including neural networks.
            </p>
            <p>
                To get started with TensorFlow, you first need to install it:
            </p>
            <pre><code>
pip install tensorflow
            </code></pre>
            <p>
                Once TensorFlow is installed, you can start building neural networks. Here’s an example of how to define a simple neural network using TensorFlow's Keras API:
            </p>
            <pre><code>
import tensorflow as tf
from tensorflow.keras.models import Sequential
from tensorflow.keras.layers import Dense

# Define the model
model = Sequential()

# Add layers to the model
model.add(Dense(128, activation='relu', input_shape=(784,)))
model.add(Dense(64, activation='relu'))
model.add(Dense(10, activation='softmax'))

# Compile the model
model.compile(optimizer='adam', loss='sparse_categorical_crossentropy', metrics=['accuracy'])
            </code></pre>

            <h2>3. Training the Neural Network</h2>
            <p>
                After defining the neural network, the next step is to train it using data. Training a neural network involves providing input data and corresponding target outputs, so the model can learn to make predictions.
            </p>
            <p>
                Here’s an example of how to train the model using training data:
            </p>
            <pre><code>
# Load the dataset (e.g., MNIST dataset)
from tensorflow.keras.datasets import mnist
(X_train, y_train), (X_test, y_test) = mnist.load_data()

# Preprocess the data
X_train = X_train.reshape(-1, 784).astype('float32') / 255.0
X_test = X_test.reshape(-1, 784).astype('float32') / 255.0

# Train the model
model.fit(X_train, y_train, epochs=5, batch_size=32)
            </code></pre>

            <h2>4. Evaluating the Model</h2>
            <p>
                After training the model, it's important to evaluate its performance on a separate test dataset. TensorFlow provides an easy way to do this using the `evaluate` method:
            </p>
            <pre><code>
# Evaluate the model on the test data
test_loss, test_acc = model.evaluate(X_test, y_test)
print('Test accuracy:', test_acc)
            </code></pre>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we learned how to build and train neural networks using TensorFlow. Neural networks are a powerful tool for solving complex problems, and TensorFlow provides an easy-to-use framework for working with them. In the next chapter, we will explore how to deploy machine learning models.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>