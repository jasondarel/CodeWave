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
                <li class="active"><a href="/lessons/fdwr/fdwr01">Chapter 1: Understanding React components and JSX</a></li>
                <li><a href="/lessons/fdwr/fdwr02">Chapter 2: Managing state and props in React</a></li>
                <li><a href="/lessons/fdwr/fdwr03">Chapter 3: Using React hooks (useState, useEffect, etc.)</a></li>
                <li><a href="/lessons/fdwr/fdwr04">Chapter 4: React Router for building multi-page applications</a></li>
                <li><a href="/lessons/fdwr/fdwr05">Chapter 5: Optimizing React apps for performance</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Understanding React Components and JSX</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn the basics of React components</li>
                <li>Understand JSX and how it integrates with JavaScript</li>
                <li>Learn how to write functional components</li>
                <li>Understand props and how they are passed between components</li>
            </ul>

            <h2>1. Introduction to React Components</h2>
            <p>
                React is built around components. A component is a reusable, self-contained unit of code that is responsible for rendering a specific part of the user interface. Components can be functional or class-based, but today, functional components are the preferred approach.
            </p>

            <h2>2. JSX Syntax</h2>
            <p>
                JSX (JavaScript XML) is a syntax extension that allows us to write HTML elements within JavaScript. This allows us to describe the UI in a more declarative manner.
            </p>
            <pre><code>
const MyComponent = () => {
    return <h1>Hello, React!</h1>;
};
            </code></pre>

            <p>
                In this example, the JSX syntax <code>&lt;h1&gt;Hello, React!&lt;/h1&gt;</code> is transformed into a JavaScript function that returns a React element.
            </p>

            <h2>3. Functional Components</h2>
            <p>
                Functional components are the simplest way to define components in React. They are just JavaScript functions that return JSX. The function can also accept props, which allow data to be passed to the component.
            </p>
            <pre><code>
const Greeting = (props) => {
    return <h1>Hello, {props.name}!</h1>;
};
            </code></pre>

            <p>
                In this example, the <code>Greeting</code> component accepts a <code>name</code> prop and displays a greeting message.
            </p>

            <h2>4. Props and Passing Data</h2>
            <p>
                Props (short for "properties") are the way data is passed from parent components to child components in React. They allow components to be dynamic and reusable.
            </p>
            <pre><code>
const App = () => {
    return <Greeting name="John" />;
};
            </code></pre>

            <p>
                In this example, the <code>App</code> component passes the <code>name</code> prop to the <code>Greeting</code> component, which renders the message "Hello, John!".
            </p>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we covered the fundamentals of React components, JSX, and props. These are the building blocks for building interactive and dynamic user interfaces with React.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>