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
                <li class="active"><a href="/lessons/fdwnae/fdwnae01">Chapter 1: Setting up a Node.js server with Express</a></li>
                <li><a href="/lessons/fdwnae/fdwnae02">Chapter 2: Building RESTful APIs with Express</a></li>
                <li><a href="/lessons/fdwnae/fdwnae03">Chapter 3: Handling user authentication and authorization</a></li>
                <li><a href="/lessons/fdwnae/fdwnae04">Chapter 4: Working with MongoDB and other databases</a></li>
                <li><a href="/lessons/fdwnae/fdwnae05">Chapter 5: Integrating frontend with backend using React or any other JS framework</a></li>
                <li><a href="/lessons/fdwnae/fdwnae06">Chapter 6: Deploying full-stack applications to production</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Setting up a Node.js server with Express</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to set up a basic Node.js server</li>
                <li>Understand how Express simplifies server creation</li>
                <li>Learn to handle HTTP requests and responses</li>
                <li>Explore middleware and routing in Express</li>
            </ul>

            <h2>1. Introduction to Node.js and Express</h2>
            <p>
                Node.js is a JavaScript runtime that allows you to run JavaScript code on the server side. Express is a web framework built on top of Node.js, designed to simplify the process of creating web applications and APIs.
            </p>

            <h2>2. Installing Node.js and Express</h2>
            <p>
                To start using Node.js and Express, you first need to install Node.js. You can download the installer from the official website. Once Node.js is installed, you can install Express using npm (Node Package Manager).
            </p>
            <pre><code>
npm init -y
npm install express
            </code></pre>

            <h2>3. Setting Up Your First Express Server</h2>
            <p>
                Now that we have Express installed, let's create a basic server.
            </p>
            <pre><code>
const express = require('express');
const app = express();
const port = 3000;

app.get('/', (req, res) => {
    res.send('Hello, Node.js and Express!');
});

app.listen(port, () => {
    console.log(`Server running at http://localhost:${port}`);
});
            </code></pre>

            <p>
                In this example, the Express server listens on port 3000 and responds with "Hello, Node.js and Express!" when the root URL ("/") is accessed.
            </p>

            <h2>4. Handling HTTP Requests</h2>
            <p>
                Express allows you to handle various types of HTTP requests such as GET, POST, PUT, DELETE, and more. Here's an example of a POST request handler:
            </p>
            <pre><code>
app.post('/submit', (req, res) => {
    res.send('Form submitted!');
});
            </code></pre>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we learned how to set up a Node.js server using Express. We also explored the basics of handling HTTP requests and routing.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>