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
                <li><a href="/lessons/jfwd/jfwd01">Chapter 1: Introduction to the DOM (Document Object Model)</a></li>
                <li><a href="/lessons/jfwd/jfwd02">Chapter 2: Working with JavaScript events and event listeners</a></li>
                <li class="active"><a href="/lessons/jfwd/jfwd03">Chapter 3: Manipulating HTML elements and CSS styles dynamically</a></li>
                <li><a href="/lessons/jfwd/jfwd04">Chapter 4: Asynchronous JavaScript: Working with AJAX</a></li>
                <li><a href="/lessons/jfwd/jfwd05">Chapter 5: Integrating JavaScript with third-party libraries and APIs</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Manipulating HTML elements and CSS styles dynamically</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to select HTML elements using JavaScript</li>
                <li>Understand how to manipulate element content and attributes</li>
                <li>Learn how to modify element styles dynamically</li>
            </ul>

            <h2>1. Selecting HTML Elements</h2>
            <p>
                To manipulate HTML elements with JavaScript, you first need to select them. This can be done using methods like `getElementById`, `querySelector`, or `querySelectorAll`.
            </p>
            <pre><code>
// Select by ID
const element = document.getElementById('myElement');

// Select by class name
const elements = document.getElementsByClassName('myClass');

// Select by tag name
const paragraphs = document.getElementsByTagName('p');

// Select by CSS selector
const div = document.querySelector('div');
            </code></pre>

            <h2>2. Changing Content and Attributes</h2>
            <p>
                You can change the content of an element using `innerHTML` or `textContent`. You can also modify the attributes of an element using `setAttribute`.
            </p>
            <pre><code>
// Changing content
document.getElementById('myElement').innerHTML = 'New content';

// Changing an attribute
const img = document.querySelector('img');
img.setAttribute('src', 'new-image.jpg');
            </code></pre>

            <h2>3. Modifying Element Styles</h2>
            <p>
                JavaScript allows you to modify the styles of HTML elements using the `style` property. You can change individual style properties like `color`, `font-size`, and `background-color`.
            </p>
            <pre><code>
document.getElementById('myElement').style.color = 'red';
document.getElementById('myElement').style.fontSize = '20px';
            </code></pre>

            <h2>4. Adding and Removing Elements</h2>
            <p>
                You can add new elements to the DOM using methods like `appendChild`, `insertBefore`, or `createElement`. You can also remove elements using `removeChild` or `remove`.
            </p>
            <pre><code>
// Adding a new element
const newDiv = document.createElement('div');
newDiv.textContent = 'Hello, new element!';
document.body.appendChild(newDiv);

// Removing an element
const oldElement = document.getElementById('oldElement');
oldElement.remove();
            </code></pre>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we learned how to dynamically manipulate HTML elements and their styles using JavaScript. By selecting elements and modifying their content, attributes, and styles, we can make web pages more interactive and dynamic.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>