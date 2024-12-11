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
                <li><a href="/lessons/nfbd/nfbd01">Chapter 1: Getting started with Node.js and its core modules</a></li>
                <li class="active"><a href="/lessons/nfbd/nfbd02">Chapter 2: Working with Express.js for building RESTful APIs</a></li>
                <li><a href="/lessons/nfbd/nfbd03">Chapter 3: Connecting to databases (MongoDB, MySQL, etc.)</a></li>
                <li><a href="/lessons/nfbd/nfbd04">Chapter 4: Understanding asynchronous programming with callbacks, promises, and async/await</a></li>
                <li><a href="/lessons/nfbd/nfbd05">Chapter 5: Building secure and scalable backend applications</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Working with Express.js for building RESTful APIs</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand what Express.js is and how to use it to build web applications</li>
                <li>Learn how to set up a basic Express application</li>
                <li>Learn how to create RESTful APIs using Express.js</li>
                <li>Handle different HTTP methods (GET, POST, PUT, DELETE) with Express</li>
            </ul>

            <h2>1. Introduction to Express.js</h2>
            <p>
                Express.js is a lightweight web application framework for Node.js that simplifies the process of building web applications and APIs. It provides a robust set of features for web and mobile applications, such as routing, middleware support, and request/response handling.
            </p>

            <h2>2. Setting up Express.js</h2>
            <p>
                To start using Express.js, you first need to install it. If you haven't already installed Node.js and npm, please do so first. Once you have Node.js set up, create a new project directory and initialize it with `npm init`. Then, install Express using npm:
            </p>
            <pre><code>
npm install express
            </code></pre>

            <h2>3. Creating a Basic Express Server</h2>
            <p>
                Now that we have Express installed, let's create a basic Express server. Create a new file named `server.js` and add the following code:
            </p>
            <pre><code>
const express = require('express');
const app = express();
const port = 3000;

app.get('/', (req, res) => {
    res.send('Hello from Express!');
});

app.listen(port, () => {
    console.log(`Server running at http://localhost:${port}`);
});
            </code></pre>
            <p>
                This code creates a basic Express server that listens on port 3000 and responds with "Hello from Express!" when you access the root URL ("/").
            </p>

            <h2>4. Creating RESTful APIs</h2>
            <p>
                A RESTful API is a set of endpoints that allow you to interact with your server and perform CRUD (Create, Read, Update, Delete) operations. Express.js makes it easy to define these endpoints. Here's an example of a simple RESTful API that allows you to manage a list of items:
            </p>
            <pre><code>
const items = [];

app.get('/items', (req, res) => {
    res.json(items);
});

app.post('/items', (req, res) => {
    const newItem = req.body; // Assuming data is sent in the request body
    items.push(newItem);
    res.status(201).json(newItem);
});

app.put('/items/:id', (req, res) => {
    const id = req.params.id;
    const updatedItem = req.body;
    items[id] = updatedItem;
    res.json(updatedItem);
});

app.delete('/items/:id', (req, res) => {
    const id = req.params.id;
    items.splice(id, 1);
    res.status(204).send();
});
            </code></pre>
            <p>
                This example demonstrates a simple API for managing items, with endpoints for getting, adding, updating, and deleting items. Each endpoint corresponds to a different HTTP method:
            <ul>
                <li><strong>GET</strong> to retrieve data</li>
                <li><strong>POST</strong> to create new data</li>
                <li><strong>PUT</strong> to update existing data</li>
                <li><strong>DELETE</strong> to remove data</li>
            </ul>
            </p>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we learned how to set up a basic Express.js server, create RESTful API endpoints, and handle various HTTP methods. Express makes it easy to build APIs and web applications by providing a simple and powerful set of tools.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>