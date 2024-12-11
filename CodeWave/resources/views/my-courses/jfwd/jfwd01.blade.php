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
                <li class="active"><a href="/lessons/jfwd/jfwd01">Chapter 1: Introduction to the DOM (Document Object Model)</a></li>
                <li><a href="/lessons/jfwd/jfwd02">Chapter 2: Working with JavaScript events and event listeners</a></li>
                <li><a href="/lessons/jfwd/jfwd03">Chapter 3: Manipulating HTML elements and CSS styles dynamically</a></li>
                <li><a href="/lessons/jfwd/jfwd04">Chapter 4: Asynchronous JavaScript: Working with AJAX</a></li>
                <li><a href="/lessons/jfwd/jfwd05">Chapter 5: Integrating JavaScript with third-party libraries and APIs</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Introduction to the DOM (Document Object Model)</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the structure of the DOM</li>
                <li>Learn how JavaScript interacts with the DOM</li>
                <li>Learn basic DOM manipulation techniques</li>
            </ul>

            <h2>1. What is the DOM?</h2>
            <p>
                The Document Object Model (DOM) represents the structure of an HTML document as a tree of nodes. Each element, attribute, and piece of text in the document is represented as an object. JavaScript can interact with and modify this tree structure.
            </p>

            <h2>2. Accessing Elements in the DOM</h2>
            <p>
                JavaScript provides various methods to access elements in the DOM. Here are some of the commonly used methods:
            </p>
            <pre><code>
document.getElementById('elementId');
document.getElementsByClassName('className');
document.getElementsByTagName('tagName');
document.querySelector('selector');
document.querySelectorAll('selector');
            </code></pre>

            <h2>3. Manipulating the DOM</h2>
            <p>
                Once you've accessed an element in the DOM, you can manipulate it by changing its content, attributes, or styles. Here's an example:
            </p>
            <pre><code>
const element = document.getElementById('myElement');
element.innerHTML = 'New content for the element!';
element.style.color = 'blue';
            </code></pre>

            <h2>4. Modifying the DOM Tree</h2>
            <p>
                You can also add, remove, or modify elements in the DOM tree. Here's an example of creating a new element and appending it to an existing one:
            </p>
            <pre><code>
const newElement = document.createElement('p');
newElement.innerHTML = 'This is a new paragraph!';
document.body.appendChild(newElement);
            </code></pre>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we introduced the DOM and how JavaScript can interact with it. We covered how to access and manipulate elements, as well as how to modify the DOM tree.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>