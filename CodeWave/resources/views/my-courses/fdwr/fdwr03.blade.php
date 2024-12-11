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
                <li><a href="/lessons/fdwr/fdwr01">Chapter 1: Understanding React components and JSX</a></li>
                <li><a href="/lessons/fdwr/fdwr02">Chapter 2: Managing state and props in React</a></li>
                <li class="active"><a href="/lessons/fdwr/fdwr03">Chapter 3: Using React hooks (useState, useEffect, etc.)</a></li>
                <li><a href="/lessons/fdwr/fdwr04">Chapter 4: React Router for building multi-page applications</a></li>
                <li><a href="/lessons/fdwr/fdwr05">Chapter 5: Optimizing React apps for performance</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Using React Hooks (useState, useEffect, etc.)</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the purpose of React hooks</li>
                <li>Learn how to use the <code>useState</code> and <code>useEffect</code> hooks</li>
                <li>Explore other useful hooks like <code>useContext</code>, <code>useReducer</code>, etc.</li>
                <li>Learn how to handle side effects in React using <code>useEffect</code></li>
            </ul>

            <h2>1. Introduction to React Hooks</h2>
            <p>
                React hooks are functions that let you use state and other React features without writing a class component. They were introduced in React 16.8 to make functional components more powerful.
            </p>

            <h2>2. The <code>useState</code> Hook</h2>
            <p>
                The <code>useState</code> hook allows you to add state to functional components. It returns an array with the current state value and a function to update that value.
            </p>
            <pre><code>
import React, { useState } from 'react';

const Counter = () => {
    const [count, setCount] = useState(0);

    return (
        <div>
            <p>Count: {count}</p>
            <button onClick={() => setCount(count + 1)}>Increase</button>
        </div>
    );
};
            </code></pre>
            <p>
                In this example, the <code>useState</code> hook initializes the state variable <code>count</code> with a value of 0, and <code>setCount</code> is used to update the state when the button is clicked.
            </p>

            <h2>3. The <code>useEffect</code> Hook</h2>
            <p>
                The <code>useEffect</code> hook is used to perform side effects in your components, such as fetching data, subscribing to a service, or manually changing the DOM.
            </p>
            <pre><code>
import React, { useState, useEffect } from 'react';

const DataFetcher = () => {
    const [data, setData] = useState(null);

    useEffect(() => {
        fetch('https://api.example.com/data')
            .then((response) => response.json())
            .then((data) => setData(data));
    }, []); // Empty dependency array to run effect once when component mounts

    return (
        <div>
            <p>{data ? data : 'Loading data...'}</p>
        </div>
    );
};
            </code></pre>
            <p>
                Here, <code>useEffect</code> is used to fetch data from an API when the component mounts. The empty dependency array ensures that the effect only runs once.
            </p>

            <h2>4. Other Useful Hooks</h2>
            <p>
                React provides several other hooks that can be used for different purposes, such as:
            </p>
            <ul>
                <li><code>useContext</code> - Allows you to access the context in your component</li>
                <li><code>useReducer</code> - Helps manage more complex state logic</li>
                <li><code>useRef</code> - Provides a way to access and manipulate DOM elements</li>
            </ul>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we covered the basics of React hooks, including <code>useState</code> and <code>useEffect</code>. We also explored some other useful hooks that can help simplify state management and side effects. In the next chapter, we will dive into React Router for building multi-page applications.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>