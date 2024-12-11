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
                <li><a href="/lessons/jfwd/jfwd01">Chapter 1: Introduction to the DOM (Document Object Model)</a></li>
                <li><a href="/lessons/jfwd/jfwd02">Chapter 2: Working with JavaScript events and event listeners</a></li>
                <li><a href="/lessons/jfwd/jfwd03">Chapter 3: Manipulating HTML elements and CSS styles dynamically</a></li>
                <li><a href="/lessons/jfwd/jfwd04">Chapter 4: Asynchronous JavaScript: Working with AJAX</a></li>
                <li class="active"><a href="/lessons/jfwd/jfwd05">Chapter 5: Integrating JavaScript with third-party libraries and APIs</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Integrating JavaScript with third-party libraries and APIs</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to integrate JavaScript with third-party libraries</li>
                <li>Understand how to use public APIs in your web applications</li>
                <li>Explore examples of using third-party libraries and APIs with JavaScript</li>
            </ul>

            <h2>1. Introduction to Third-party Libraries</h2>
            <p>
                Third-party libraries are pre-written JavaScript code that you can integrate into your project to save time and effort. They provide additional functionality such as animations, HTTP requests, form validation, and more. Popular examples include jQuery, Lodash, and Moment.js.
            </p>

            <h2>2. Using a Third-party Library: jQuery</h2>
            <p>
                jQuery is one of the most widely used JavaScript libraries. It simplifies common JavaScript tasks, such as DOM manipulation, event handling, and AJAX requests. To use jQuery in your project, you can either download it or link to it from a CDN.
            </p>
            <pre><code>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            </code></pre>
            <p>
                Once included, you can use jQuery to manipulate the DOM and handle events.
            </p>
            <pre><code>
$(document).ready(function() {
    $('#myButton').click(function() {
        alert('Button clicked!');
    });
});
            </code></pre>

            <h2>3. Using a Third-party API: OpenWeather API</h2>
            <p>
                APIs (Application Programming Interfaces) allow you to interact with external data sources. In this example, we'll use the OpenWeather API to fetch weather data for a specific city.
            </p>
            <pre><code>
fetch('https://api.openweathermap.org/data/2.5/weather?q=London&appid=your_api_key')
  .then(response => response.json())
  .then(data => {
    const weather = data.weather[0].description;
    document.getElementById('weather').innerHTML = 'Weather: ' + weather;
  })
  .catch(error => console.log('Error:', error));
            </code></pre>
            <p>
                In this example, the `fetch` method is used to get weather data from the OpenWeather API. The response is then parsed as JSON, and we extract and display the weather description.
            </p>

            <h2>4. Handling API Authentication</h2>
            <p>
                Many APIs require authentication, typically through API keys or OAuth. For example, with the OpenWeather API, you must sign up for an API key and include it in your requests.
            </p>
            <pre><code>
const apiKey = 'your_api_key';
fetch(`https://api.openweathermap.org/data/2.5/weather?q=London&appid=${apiKey}`)
  .then(response => response.json())
  .then(data => console.log(data))
  .catch(error => console.log('Error:', error));
            </code></pre>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we explored how to integrate third-party libraries like jQuery into your JavaScript projects and how to interact with APIs, such as the OpenWeather API, to fetch and display external data.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>