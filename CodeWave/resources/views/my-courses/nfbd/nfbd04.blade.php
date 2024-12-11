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
                <li><a href="/lessons/nfbd/nfbd01">Chapter 1: Getting started with Node.js and its core modules</a></li>
                <li><a href="/lessons/nfbd/nfbd02">Chapter 2: Working with Express.js for building RESTful APIs</a></li>
                <li><a href="/lessons/nfbd/nfbd03">Chapter 3: Connecting to databases (MongoDB, MySQL, etc.)</a></li>
                <li class="active"><a href="/lessons/nfbd/nfbd04">Chapter 4: Understanding asynchronous programming with callbacks, promises, and async/await</a></li>
                <li><a href="/lessons/nfbd/nfbd05">Chapter 5: Building secure and scalable backend applications</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Understanding Asynchronous Programming with Callbacks, Promises, and Async/Await</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the concept of asynchronous programming in Node.js</li>
                <li>Learn about callbacks, promises, and async/await for handling asynchronous operations</li>
                <li>Explore best practices for working with asynchronous code in Node.js</li>
            </ul>

            <h2>1. Introduction to Asynchronous Programming</h2>
            <p>
                In Node.js, asynchronous programming is crucial because it allows the system to perform non-blocking operations, such as handling requests, reading files, or interacting with databases. This prevents the application from becoming unresponsive during these operations.
            </p>
            <p>
                There are three main approaches to handle asynchronous operations in Node.js: callbacks, promises, and async/await. In this chapter, we will explore each of these techniques.
            </p>

            <h2>2. Callbacks</h2>
            <p>
                A callback is a function that is passed as an argument to another function and is executed after the completion of an operation. For example, in Node.js, the `fs` module uses callbacks for file operations.
            </p>
            <pre><code>
const fs = require('fs');

// Using callback for reading a file asynchronously
fs.readFile('example.txt', 'utf8', (err, data) => {
  if (err) {
    console.error('Error reading file:', err);
    return;
  }
  console.log('File content:', data);
});
            </code></pre>
            <p>
                In this example, the callback function gets executed once the file is read, handling both success and error cases.
            </p>

            <h2>3. Promises</h2>
            <p>
                Promises represent a value that may be available now, or in the future, or never. A promise has three states: pending, resolved (fulfilled), or rejected.
            </p>
            <p>
                Here's an example of using a promise to handle asynchronous operations:
            </p>
            <pre><code>
const fs = require('fs').promises;

// Using promise for reading a file asynchronously
fs.readFile('example.txt', 'utf8')
  .then(data => console.log('File content:', data))
  .catch(err => console.error('Error reading file:', err));
            </code></pre>
            <p>
                In this example, the `.then()` method is called when the promise is resolved, and the `.catch()` method handles any errors.
            </p>

            <h2>4. Async/Await</h2>
            <p>
                Async/await is a syntactic sugar over promises. The `async` keyword is used to declare a function that will return a promise, and the `await` keyword pauses the execution of the function until the promise is resolved.
            </p>
            <pre><code>
const fs = require('fs').promises;

// Using async/await for reading a file asynchronously
async function readFile() {
  try {
    const data = await fs.readFile('example.txt', 'utf8');
    console.log('File content:', data);
  } catch (err) {
    console.error('Error reading file:', err);
  }
}

readFile();
            </code></pre>
            <p>
                The `async` function makes it easier to handle asynchronous code in a more synchronous-looking manner, improving readability.
            </p>

            <h2>5. Best Practices</h2>
            <p>
                - Always handle errors properly in asynchronous code. Use `.catch()` with promises or `try/catch` with async/await.
            </p>
            <p>
                - Avoid callback hell by using promises or async/await for cleaner, more maintainable code.
            </p>
            <p>
                - Use `Promise.all()` or `Promise.allSettled()` when working with multiple promises that can be executed in parallel.
            </p>

            <h2>6. Conclusion</h2>
            <p>
                In this chapter, we learned about the different ways to handle asynchronous programming in Node.js: callbacks, promises, and async/await. By mastering these techniques, you will be able to write more efficient and readable asynchronous code in your Node.js applications.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>