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
                <li><a href="/lessons/fdwr/fdwr01">Chapter 1: Understanding React components and JSX</a></li>
                <li class="active"><a href="/lessons/fdwr/fdwr02">Chapter 2: Managing state and props in React</a></li>
                <li><a href="/lessons/fdwr/fdwr03">Chapter 3: Using React hooks (useState, useEffect, etc.)</a></li>
                <li><a href="/lessons/fdwr/fdwr04">Chapter 4: React Router for building multi-page applications</a></li>
                <li><a href="/lessons/fdwr/fdwr05">Chapter 5: Optimizing React apps for performance</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Managing State and Props in React</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to use state in React components</li>
                <li>Understand the concept of props and how they work</li>
                <li>Learn how to manage state in both functional and class-based components</li>
                <li>Learn how to pass data between components using props</li>
            </ul>

            <h2>1. Introduction to State in React</h2>
            <p>
                State is a fundamental concept in React that allows components to create and manage their own data. A component's state is an object that holds its dynamic data, and React re-renders the component when its state changes.
            </p>

            <h2>2. Using State in Functional Components</h2>
            <p>
                In functional components, you can use the <code>useState</code> hook to manage state. The <code>useState</code> hook returns an array with two elements: the current state value and a function to update that state.
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
                In this example, the <code>count</code> variable holds the state, and the <code>setCount</code> function is used to update it.
            </p>

            <h2>3. Using Props to Pass Data</h2>
            <p>
                Props are used to pass data from a parent component to a child component. Props are read-only, meaning that child components cannot modify the props they receive.
            </p>
            <pre><code>
const Greeting = (props) => {
    return <h1>Hello, {props.name}!</h1>;
};

const App = () => {
    return <Greeting name="John" />;
};
            </code></pre>
            <p>
                In this example, the <code>App</code> component passes the <code>name</code> prop to the <code>Greeting</code> component, which renders "Hello, John!".
            </p>

            <h2>4. Managing State in Class-Based Components</h2>
            <p>
                In class-based components, state is initialized in the constructor and updated using the <code>this.setState</code> method.
            </p>
            <pre><code>
class Counter extends React.Component {
    constructor(props) {
        super(props);
        this.state = { count: 0 };
    }

    increment = () => {
        this.setState({ count: this.state.count + 1 });
    };

    render() {
        return (
            <div>
                <p>Count: {this.state.count}</p>
                <button onClick={this.increment}>Increase</button>
            </div>
        );
    }
}
            </code></pre>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we learned how to manage state in React using both functional and class-based components. We also explored how to pass data between components using props. In the next chapter, we will dive into using React hooks like <code>useState</code> and <code>useEffect</code>.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>