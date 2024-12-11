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
                <li><a href="/lessons/fdwnae/fdwnae01">Chapter 1: Setting up a Node.js server with Express</a></li>
                <li><a href="/lessons/fdwnae/fdwnae02">Chapter 2: Building RESTful APIs with Express</a></li>
                <li><a href="/lessons/fdwnae/fdwnae03">Chapter 3: Handling user authentication and authorization</a></li>
                <li><a href="/lessons/fdwnae/fdwnae04">Chapter 4: Working with MongoDB and other databases</a></li>
                <li class="active"><a href="/lessons/fdwnae/fdwnae05">Chapter 5: Integrating frontend with backend using React or any other JS framework</a></li>
                <li><a href="/lessons/fdwnae/fdwnae06">Chapter 6: Deploying full-stack applications to production</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Integrating frontend with backend using React or any other JS framework</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand how to connect a React (or other JS framework) frontend to a Node.js/Express backend</li>
                <li>Learn to make API calls from the frontend</li>
                <li>Handle data and state management in the frontend</li>
                <li>Display dynamic content from the backend in the frontend</li>
            </ul>

            <h2>1. Introduction to Frontend-Backend Integration</h2>
            <p>
                In modern web development, it's common to use a separate frontend and backend. The backend (Node.js/Express) handles the business logic, while the frontend (React or another JS framework) provides the user interface. These two parts communicate through APIs, typically using REST or GraphQL.
            </p>

            <h2>2. Setting Up React</h2>
            <p>
                To get started with React, we need to create a new React app. If you haven't installed Node.js yet, make sure to do so first.
            </p>
            <pre><code>
npx create-react-app frontend
cd frontend
npm start
            </code></pre>

            <p>
                This command will create a new directory called `frontend` with all the necessary files and dependencies for your React application.
            </p>

            <h2>3. Fetching Data from the Backend</h2>
            <p>
                In your React components, you can use the `fetch` API or libraries like `axios` to make requests to your backend API.
            </p>
            <pre><code>
import React, { useEffect, useState } from 'react';

const App = () => {
    const [data, setData] = useState([]);

    useEffect(() => {
        fetch('http://localhost:3000/api/data')
            .then(response => response.json())
            .then(data => setData(data))
            .catch(error => console.log(error));
    }, []);

    return (
        <div>
            <h1>Data from Backend</h1>
            <ul>
                {data.map(item => (
                    <li key={item.id}>{item.name}</li>
                ))}
            </ul>
        </div>
    );
};

export default App;
            </code></pre>

            <p>
                In this example, we use the `useEffect` hook to fetch data from the backend when the component mounts. The `fetch` function makes a GET request to the backend, and the data is stored in the `data` state.
            </p>

            <h2>4. Handling POST Requests from the Frontend</h2>
            <p>
                You can also send data from the frontend to the backend using POST requests. Here is an example of how to send data to the server:
            </p>
            <pre><code>
const submitData = (newData) => {
    fetch('http://localhost:3000/api/data', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(newData),
    })
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.log(error));
};
            </code></pre>

            <h2>5. Backend API for POST Request</h2>
            <p>
                In the backend, you can handle this POST request by using Express. Here's an example route to handle the incoming data:
            </p>
            <pre><code>
app.post('/api/data', (req, res) => {
    const newData = req.body;
    // Process the data (e.g., save to database)
    res.json({ message: 'Data received', data: newData });
});
            </code></pre>

            <h2>6. State Management in React</h2>
            <p>
                React uses state to store data that can change over time and trigger re-renders when the state changes. In more complex applications, you might want to use a state management library like Redux or Context API.
            </p>

            <h2>7. Conclusion</h2>
            <p>
                In this chapter, we covered the process of integrating a React frontend with an Express backend. We learned how to make API requests from the frontend, handle data, and display dynamic content. Understanding how to connect frontend and backend is essential for building full-stack applications.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>