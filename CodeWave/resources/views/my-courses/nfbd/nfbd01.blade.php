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
                <li class="active"><a href="/lessons/nfbd/nfbd01">Chapter 1: Getting started with Node.js and its core modules</a></li>
                <li><a href="/lessons/nfbd/nfbd02">Chapter 2: Working with Express.js for building RESTful APIs</a></li>
                <li><a href="/lessons/nfbd/nfbd03">Chapter 3: Connecting to databases (MongoDB, MySQL, etc.)</a></li>
                <li><a href="/lessons/nfbd/nfbd04">Chapter 4: Understanding asynchronous programming with callbacks, promises, and async/await</a></li>
                <li><a href="/lessons/nfbd/nfbd05">Chapter 5: Building secure and scalable backend applications</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Getting started with Node.js and its core modules</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the basics of Node.js</li>
                <li>Learn how to use core modules in Node.js</li>
                <li>Set up a simple Node.js application</li>
                <li>Explore built-in modules for filesystem, HTTP, and path manipulation</li>
            </ul>

            <h2>1. Introduction to Node.js</h2>
            <p>
                Node.js is a runtime environment that enables you to run JavaScript on the server side. It is built on Google Chrome’s V8 JavaScript engine and is designed to handle asynchronous operations efficiently. It is widely used for building scalable and high-performance web applications.
            </p>

            <h2>2. Installing Node.js</h2>
            <p>
                To start using Node.js, you need to download and install it from the official Node.js website. After installation, you can verify it by running the following commands in your terminal:
            </p>
            <pre><code>
node -v
npm -v
            </code></pre>
            <p>
                The `node -v` command shows the version of Node.js, and `npm -v` shows the version of npm (Node Package Manager) installed on your system.
            </p>

            <h2>3. Core Modules in Node.js</h2>
            <p>
                Node.js comes with several built-in modules that you can use without the need for additional installations. Some of the core modules are:
            <ul>
                <li><strong>http:</strong> Used for creating HTTP servers.</li>
                <li><strong>fs:</strong> Used for interacting with the file system.</li>
                <li><strong>path:</strong> Helps in handling and transforming file paths.</li>
                <li><strong>url:</strong> Provides utilities for URL resolution and parsing.</li>
            </ul>
            </p>

            <h2>4. Creating Your First Node.js Application</h2>
            <p>
                Let's create a simple "Hello, World!" application using the built-in `http` module. Create a new file called `app.js` and add the following code:
            </p>
            <pre><code>
const http = require('http');

const server = http.createServer((req, res) => {
    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/plain');
    res.end('Hello, World!');
});

server.listen(3000, '127.0.0.1', () => {
    console.log('Server running at http://127.0.0.1:3000/');
});
            </code></pre>
            <p>
                This creates a basic HTTP server that listens on port 3000 and sends a "Hello, World!" response.
            </p>

            <h2>5. Working with the File System Module</h2>
            <p>
                Node.js allows you to interact with the file system through the `fs` module. Below is an example of reading a file asynchronously:
            </p>
            <pre><code>
const fs = require('fs');

fs.readFile('example.txt', 'utf8', (err, data) => {
    if (err) throw err;
    console.log(data);
});
            </code></pre>
            <p>
                This will read the contents of `example.txt` and print them to the console.
            </p>

            <h2>6. Conclusion</h2>
            <p>
                In this chapter, we learned how to set up a simple Node.js application, use core modules like `http` and `fs`, and handle basic server and file system operations.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>