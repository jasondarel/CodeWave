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
                <li><a href="/lessons/je/je01">Chapter 1: Understanding JavaScript syntax and data types</a></li>
                <li><a href="/lessons/je/je02">Chapter 2: Writing functions and using variables</a></li>
                <li><a href="/lessons/je/je03">Chapter 3: Control flow and loops in JavaScript</a></li>
                <li class="active"><a href="/lessons/je/je04">Chapter 4: Handling events and user interactions</a></li>
                <li><a href="/lessons/je/je05">Chapter 5: Working with arrays and objects in JavaScript</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Handling events and user interactions</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to handle user events in JavaScript</li>
                <li>Understand the difference between event types like `click`, `mouseover`, `keydown`, etc.</li>
                <li>Learn how to create event listeners</li>
                <li>Understand event bubbling and capturing</li>
            </ul>

            <h2>1. Introduction to Events</h2>
            <p>
                In JavaScript, events are actions that occur in the browser, such as when a user clicks a button, types in a field, or hovers over an element. JavaScript allows you to listen for these events and respond accordingly.
            </p>

            <h2>2. Types of Events</h2>
            <p>
                Some common types of events are:
            </p>
            <ul>
                <li><strong>click</strong>: Fired when an element is clicked.</li>
                <li><strong>mouseover</strong>: Fired when the mouse pointer enters an element.</li>
                <li><strong>keydown</strong>: Fired when a key is pressed down.</li>
                <li><strong>submit</strong>: Fired when a form is submitted.</li>
            </ul>

            <h2>3. Creating Event Listeners</h2>
            <p>
                To handle events, you need to create event listeners. An event listener is a function that is called whenever a specified event is triggered.
            </p>
            <pre>
                let button = document.getElementById('myButton');
                button.addEventListener('click', function() {
                    alert('Button clicked!');
                });
            </pre>

            <h2>4. Event Bubbling and Capturing</h2>
            <p>
                Event bubbling and capturing refer to the order in which events are propagated through the DOM.
            </p>

            <h3>Event Bubbling</h3>
            <p>
                With event bubbling, when an event is triggered on an element, it "bubbles up" to its parent elements, triggering the same event on all ancestors.
            </p>
            <pre>
                document.getElementById('parent').addEventListener('click', function() {
                    alert('Parent clicked!');
                });

                document.getElementById('child').addEventListener('click', function() {
                    alert('Child clicked!');
                });
            </pre>
            <p>
                In the above example, clicking on the child element will first trigger the child event, and then the parent event (because of event bubbling).
            </p>

            <h3>Event Capturing</h3>
            <p>
                Event capturing allows you to capture an event as it travels down from the root to the target element.
            </p>
            <pre>
                document.getElementById('parent').addEventListener('click', function() {
                    alert('Parent clicked!');
                }, true);
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>