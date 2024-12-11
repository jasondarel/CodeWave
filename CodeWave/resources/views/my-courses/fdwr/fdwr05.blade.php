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
            width: 250px;
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

        <div class="sidebar">
            <div class="chapter-list">
                <h3>CHAPTERS</h3>
                <ul>
                    <li><a href="/lessons/fdwr/fdwr01">Chapter 1: Understanding React components and JSX</a></li>
                    <li><a href="/lessons/fdwr/fdwr02">Chapter 2: Managing state and props in React</a></li>
                    <li><a href="/lessons/fdwr/fdwr03">Chapter 3: Using React hooks (useState, useEffect, etc.)</a></li>
                    <li><a href="/lessons/fdwr/fdwr04">Chapter 4: React Router for building multi-page applications</a></li>
                    <li class="active"><a href="/lessons/fdwr/fdwr05">Chapter 5: Optimizing React apps for performance</a></li>
                </ul>
            </div>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Optimizing React Apps for Performance</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand performance bottlenecks in React apps</li>
                <li>Learn about techniques for optimizing performance</li>
                <li>Implement performance improvements using React features</li>
            </ul>

            <h2>1. Introduction to Performance Optimization in React</h2>
            <p>
                React is efficient, but as apps grow in size and complexity, performance issues can arise. In this chapter, we will explore various techniques and best practices to optimize React applications for better performance.
            </p>

            <h2>2. Profiling Components with React Developer Tools</h2>
            <p>
                Before optimizing your React app, it’s important to identify performance bottlenecks. The React Developer Tools include a Profiler tab that allows you to monitor the performance of your components. It helps you see how long each component takes to render and identify components that may be causing performance issues.
            </p>
            <p>
                Install the React Developer Tools browser extension and open the Profiler tab in the developer tools to begin profiling your app's performance.
            </p>

            <h2>3. Optimizing Re-renders with PureComponent and React.memo</h2>
            <p>
                React components re-render whenever their state or props change. However, unnecessary re-renders can negatively impact performance. You can optimize re-renders by using <code>PureComponent</code> or <code>React.memo</code>.
            </p>
            <pre><code>
// Using PureComponent
class MyComponent extends React.PureComponent {
    render() {
        return <div>{this.props.name}</div>;
    }
}

// Using React.memo
const MyComponent = React.memo((props) => {
    return <div>{props.name}</div>;
});
            </code></pre>
            <p>
                Both <code>PureComponent</code> and <code>React.memo</code> perform shallow comparison of props and prevent unnecessary re-renders if props remain the same.
            </p>

            <h2>4. Code Splitting and Lazy Loading</h2>
            <p>
                Code splitting allows you to load only the necessary code for the page currently being viewed, reducing the initial load time. You can achieve code splitting using dynamic imports and React’s <code>Suspense</code> and <code>lazy</code> functions.
            </p>
            <pre><code>
import React, { lazy, Suspense } from 'react';

const MyComponent = lazy(() => import('./MyComponent'));

            </code></pre>
            <p>
                In this example, <code>MyComponent</code> is loaded lazily, meaning it will only be loaded when it's needed, thus improving the initial load time of your app.
            </p>

            <h2>5. Optimizing List Rendering</h2>
            <p>
                Rendering large lists in React can lead to performance issues. To optimize list rendering, use techniques like <code>shouldComponentUpdate</code>, <code>React.memo</code>, and the <code>key</code> prop.
            </p>
            <pre><code>
const ListItem = React.memo(({ item }) => {
    return <li>{item.name}</li>;
});

const List = ({ items }) => {
    return (
        <ul>
            {items.map((item) => (
                <ListItem key={item.id} item={item} />
            ))}
        </ul>
    );
};
            </code></pre>
            <p>
                By using <code>React.memo</code> on <code>ListItem</code>, the component will only re-render if its props change, improving the performance of large lists.
            </p>

            <h2>6. Conclusion</h2>
            <p>
                In this chapter, we covered techniques for optimizing React apps, including using React Developer Tools for profiling, preventing unnecessary re-renders, implementing code splitting and lazy loading, and optimizing list rendering. Applying these techniques will help improve the performance and efficiency of your React applications.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>