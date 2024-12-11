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
                <li><a href="/lessons/jfwd/jfwd01">Chapter 1: Introduction to the DOM (Document Object Model)</a></li>
                <li><a href="/lessons/jfwd/jfwd02">Chapter 2: Working with JavaScript events and event listeners</a></li>
                <li><a href="/lessons/jfwd/jfwd03">Chapter 3: Manipulating HTML elements and CSS styles dynamically</a></li>
                <li class="active"><a href="/lessons/jfwd/jfwd04">Chapter 4: Asynchronous JavaScript: Working with AJAX</a></li>
                <li><a href="/lessons/jfwd/jfwd05">Chapter 5: Integrating JavaScript with third-party libraries and APIs</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Asynchronous JavaScript: Working with AJAX</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the concept of asynchronous JavaScript</li>
                <li>Learn how to make asynchronous HTTP requests using AJAX</li>
                <li>Handle responses and update the DOM without reloading the page</li>
            </ul>

            <h2>1. Introduction to Asynchronous JavaScript</h2>
            <p>
                JavaScript traditionally executes synchronously, meaning one operation must finish before the next can begin. However, in web development, it's often necessary to execute operations asynchronously, such as making API requests. Asynchronous JavaScript allows you to perform operations without blocking the rest of your code.
            </p>

            <h2>2. What is AJAX?</h2>
            <p>
                AJAX (Asynchronous JavaScript and XML) is a technique used to make asynchronous HTTP requests to the server and update parts of a webpage without refreshing the entire page. It enables the creation of dynamic and interactive web applications.
            </p>

            <h2>3. Making an AJAX Request</h2>
            <p>
                To make an AJAX request, you can use the `XMLHttpRequest` object or the more modern `fetch` API. Here’s an example of how to use `fetch` to get data from a server.
            </p>
            <pre><code>
fetch('https://jsonplaceholder.typicode.com/posts')
  .then(response => response.json())
  .then(data => console.log(data))
  .catch(error => console.log('Error:', error));
            </code></pre>

            <h2>4. Handling AJAX Responses</h2>
            <p>
                Once the request is successful, the server's response is returned as a promise. You can use `.then()` to handle the response and `.catch()` to handle any errors.
            </p>
            <pre><code>
fetch('https://jsonplaceholder.typicode.com/posts')
  .then(response => response.json())
  .then(data => {
    const output = document.getElementById('output');
    output.innerHTML = JSON.stringify(data, null, 2);
  })
  .catch(error => console.log('Error:', error));
            </code></pre>

            <h2>5. Updating the DOM Dynamically</h2>
            <p>
                One of the key benefits of AJAX is the ability to update the DOM without reloading the entire page. This allows you to create seamless user experiences.
            </p>
            <pre><code>
fetch('https://jsonplaceholder.typicode.com/posts')
  .then(response => response.json())
  .then(data => {
    const output = document.getElementById('output');
    output.innerHTML = '';
    data.forEach(post => {
      const div = document.createElement('div');
      div.innerHTML = `<h3>${post.title}</h3><p>${post.body}</p>`;
      output.appendChild(div);
    });
  })
  .catch(error => console.log('Error:', error));
            </code></pre>

            <h2>6. Conclusion</h2>
            <p>
                In this chapter, we learned about asynchronous JavaScript and how AJAX allows us to make asynchronous HTTP requests. We also explored how to update the DOM dynamically without reloading the page.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>