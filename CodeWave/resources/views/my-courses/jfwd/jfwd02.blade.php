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
                <li><a href="/lessons/jfwd/jfwd01">Chapter 1: Introduction to the DOM (Document Object Model)</a></li>
                <li class="active"><a href="/lessons/jfwd/jfwd02">Chapter 2: Working with JavaScript events and event listeners</a></li>
                <li><a href="/lessons/jfwd/jfwd03">Chapter 3: Manipulating HTML elements and CSS styles dynamically</a></li>
                <li><a href="/lessons/jfwd/jfwd04">Chapter 4: Asynchronous JavaScript: Working with AJAX</a></li>
                <li><a href="/lessons/jfwd/jfwd05">Chapter 5: Integrating JavaScript with third-party libraries and APIs</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Working with JavaScript events and event listeners</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand how events work in JavaScript</li>
                <li>Learn about event listeners and how to attach them to elements</li>
                <li>Learn how to manage events using event delegation</li>
            </ul>

            <h2>1. What Are Events in JavaScript?</h2>
            <p>
                An event in JavaScript is an action that occurs as a result of the user interacting with the web page, such as clicking a button, typing in a text field, or pressing a key.
            </p>

            <h2>2. Event Listeners</h2>
            <p>
                Event listeners are used to listen for specific events and execute a function when those events occur. You can attach an event listener to an element using the `addEventListener` method.
            </p>
            <pre><code>
const button = document.getElementById('myButton');
button.addEventListener('click', () => {
    alert('Button clicked!');
});
            </code></pre>

            <h2>3. Common Event Types</h2>
            <p>Here are some common event types in JavaScript:</p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><strong>click</strong> - Triggered when an element is clicked</li>
                <li><strong>keydown</strong> - Triggered when a key is pressed</li>
                <li><strong>mouseover</strong> - Triggered when the mouse hovers over an element</li>
                <li><strong>submit</strong> - Triggered when a form is submitted</li>
                <li><strong>resize</strong> - Triggered when the window is resized</li>
            </ul>

            <h2>4. Event Delegation</h2>
            <p>
                Event delegation is a technique where you attach an event listener to a parent element instead of individual child elements. This is useful for dynamically added elements.
            </p>
            <pre><code>
document.querySelector('ul').addEventListener('click', function(event) {
    if (event.target.tagName === 'LI') {
        alert('List item clicked: ' + event.target.textContent);
    }
});
            </code></pre>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we explored how JavaScript handles events and how to use event listeners to respond to user actions. We also learned about event delegation and how to use it for better performance and flexibility.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>