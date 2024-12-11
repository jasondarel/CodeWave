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
                <li><a href="/lessons/fdwr/fdwr01">Chapter 1: Understanding React components and JSX</a></li>
                <li><a href="/lessons/fdwr/fdwr02">Chapter 2: Managing state and props in React</a></li>
                <li><a href="/lessons/fdwr/fdwr03">Chapter 3: Using React hooks (useState, useEffect, etc.)</a></li>
                <li class="active"><a href="/lessons/fdwr/fdwr04">Chapter 4: React Router for building multi-page applications</a></li>
                <li><a href="/lessons/fdwr/fdwr05">Chapter 5: Optimizing React apps for performance</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: React Router for Building Multi-Page Applications</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the concept of client-side routing in React</li>
                <li>Learn how to install and set up React Router</li>
                <li>Learn how to define routes and link pages</li>
                <li>Implement navigation between different views in your app</li>
            </ul>

            <h2>1. Introduction to React Router</h2>
            <p>
                React Router is a popular library used for handling routing in React applications. It allows you to navigate between different views or pages within your app without reloading the page. This is essential for building single-page applications (SPAs).
            </p>

            <h2>2. Installing React Router</h2>
            <p>
                To use React Router in your project, you need to install the <code>react-router-dom</code> package:
            </p>
            <pre><code>
npm install react-router-dom
            </code></pre>
            <p>
                After installation, you can import the necessary components from <code>react-router-dom</code> in your React app.
            </p>

            <h2>3. Setting Up Routes</h2>
            <p>
                In React Router, you define routes using the <code>Route</code> component. Here's a basic example of how to set up routes in your app:
            </p>
            <pre><code>
import React from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';

const Home = () => <h2>Home Page</h2>;
const About = () => <h2>About Page</h2>;

const App = () => {
    return (
        <Router>
            <Switch>
                <Route exact path="/" component={Home} />
                <Route path="/about" component={About} />
            </Switch>
        </Router>
    );
};

export default App;
            </code></pre>
            <p>
                In this example, <code>BrowserRouter</code> is used to handle the routing, and the <code>Route</code> component is used to define the paths and their corresponding components. The <code>Switch</code> component ensures that only one route is rendered at a time.
            </p>

            <h2>4. Navigating Between Pages</h2>
            <p>
                To navigate between different pages, you can use the <code>Link</code> component, which is similar to an anchor tag but prevents the page from reloading:
            </p>
            <pre><code>
import { Link } from 'react-router-dom';

const Navigation = () => {
    return (
        <nav>
            <ul>
                <li><Link to="/">Home</Link></li>
                <li><Link to="/about">About</Link></li>
            </ul>
        </nav>
    );
};
            </code></pre>
            <p>
                The <code>to</code> prop in the <code>Link</code> component specifies the destination path.
            </p>

            <h2>5. Dynamic Routing</h2>
            <p>
                React Router also supports dynamic routing, where routes can include dynamic parameters. Here's an example:
            </p>
            <pre><code>
const UserProfile = ({ match }) => {
    return <h2>User Profile: {match.params.username}</h2>;
};

const App = () => {
    return (
        <Router>
            <Switch>
                <Route path="/user/:username" component={UserProfile} />
            </Switch>
        </Router>
    );
};
            </code></pre>
            <p>
                In this example, the route <code>/user/:username</code> includes a dynamic parameter that can be accessed using <code>match.params.username</code>.
            </p>

            <h2>6. Conclusion</h2>
            <p>
                In this chapter, we covered how to use React Router for handling routing in your React applications. We explored setting up routes, navigation, and dynamic routing. In the next chapter, we will discuss performance optimization techniques for React apps.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>