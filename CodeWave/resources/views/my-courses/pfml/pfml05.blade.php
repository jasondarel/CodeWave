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
                <li><a href="/lessons/pfml/pfml01">Chapter 1: Introduction to Machine Learning and Its Applications</a></li>
                <li><a href="/lessons/pfml/pfml02">Chapter 2: Understanding Supervised and Unsupervised Learning Algorithms</a></li>
                <li><a href="/lessons/pfml/pfml03">Chapter 3: Working with Scikit-Learn for Model Building and Evaluation</a></li>
                <li><a href="/lessons/pfml/pfml04">Chapter 4: Introduction to Neural Networks with TensorFlow</a></li>
                <li class="active"><a href="/lessons/pfml/pfml05">Chapter 5: Building and Deploying Machine Learning Models</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Building and Deploying Machine Learning Models</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the process of building a machine learning model for deployment</li>
                <li>Learn how to save and load machine learning models</li>
                <li>Explore deployment strategies for machine learning models</li>
            </ul>

            <h2>1. Overview of Model Deployment</h2>
            <p>
                Deploying a machine learning model means making it available for real-time or batch predictions. Once a model is trained and evaluated, the next step is to deploy it so it can be used in production environments to make predictions on new data.
            </p>
            <p>
                There are various strategies for deploying machine learning models, ranging from simple script-based deployments to using cloud services or containerized applications.
            </p>

            <h2>2. Saving and Loading Machine Learning Models</h2>
            <p>
                To deploy a model, it must first be saved after training. In Python, the most common way to save a model is by using the <code>joblib</code> or <code>pickle</code> libraries. For TensorFlow models, the <code>model.save()</code> method is typically used.
            </p>
            <pre><code>
import joblib

# Save a trained model
joblib.dump(model, 'model.pkl')

# Load the model for prediction
loaded_model = joblib.load('model.pkl')
            </code></pre>

            <h2>3. Deploying Models to Production</h2>
            <p>
                After saving the model, the next step is to deploy it in a production environment. Some of the common deployment strategies include:
            </p>
            <ul>
                <li><strong>Web API Deployment:</strong> You can expose your model as a RESTful API using a framework like Flask or FastAPI. The model can then accept input data, make predictions, and return the results to users.</li>
                <li><strong>Cloud-based Deployment:</strong> Many cloud services (like AWS, GCP, and Azure) offer platforms for deploying machine learning models. These platforms offer managed environments for model serving and scaling.</li>
                <li><strong>Containerized Deployment:</strong> Containerization using Docker is a popular approach for deploying models. The model and its dependencies are packaged together into a container, making it easier to move and scale across different environments.</li>
            </ul>

            <h2>4. Example: Deploying a Model with Flask</h2>
            <p>
                Here's a simple example of how to deploy a trained model as a web service using Flask:
            </p>
            <pre><code>
from flask import Flask, request, jsonify
import joblib

app = Flask(__name__)

# Load the trained model
model = joblib.load('model.pkl')

@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json()  # Get data from the POST request
    prediction = model.predict([data['input']])  # Make prediction
    return jsonify({'prediction': prediction.tolist()})

if __name__ == '__main__':
    app.run(debug=True)
            </code></pre>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we covered the process of building and deploying machine learning models. Once you have trained a model, saving it and deploying it to production allows it to make predictions in real-time. You can deploy models as APIs, in the cloud, or within containers depending on your needs.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>