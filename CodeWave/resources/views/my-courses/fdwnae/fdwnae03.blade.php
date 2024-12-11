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
                <li><a href="/lessons/fdwnae/fdwnae01">Chapter 1: Setting up a Node.js server with Express</a></li>
                <li><a href="/lessons/fdwnae/fdwnae02">Chapter 2: Building RESTful APIs with Express</a></li>
                <li class="active"><a href="/lessons/fdwnae/fdwnae03">Chapter 3: Handling user authentication and authorization</a></li>
                <li><a href="/lessons/fdwnae/fdwnae04">Chapter 4: Working with MongoDB and other databases</a></li>
                <li><a href="/lessons/fdwnae/fdwnae05">Chapter 5: Integrating frontend with backend using React or any other JS framework</a></li>
                <li><a href="/lessons/fdwnae/fdwnae06">Chapter 6: Deploying full-stack applications to production</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Handling user authentication and authorization</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to handle user authentication and authorization</li>
                <li>Understand the role of JWT (JSON Web Tokens) for authentication</li>
                <li>Learn how to create login and registration routes</li>
                <li>Secure API routes using JWTs</li>
            </ul>

            <h2>1. Introduction to Authentication and Authorization</h2>
            <p>
                Authentication is the process of verifying the identity of a user, while authorization ensures that the user has permission to access specific resources or perform certain actions. In this chapter, we will focus on using JWT (JSON Web Tokens) for handling both authentication and authorization in an Express app.
            </p>

            <h2>2. Using JWT for Authentication</h2>
            <p>
                JSON Web Tokens (JWT) are a popular method for transmitting information securely between the client and server. In the context of authentication, JWT is used to verify a user's identity after they log in.
            </p>

            <h2>3. Setting Up JWT Authentication in Express</h2>
            <p>
                To get started with JWT authentication in your Express app, you need to install the `jsonwebtoken` package:
            </p>
            <pre><code>
npm install jsonwebtoken
            </code></pre>

            <p>
                Here’s an example of how to implement login functionality and generate a JWT token:
            </p>
            <pre><code>
const jwt = require('jsonwebtoken');
const express = require('express');
const app = express();
const port = 3000;

app.use(express.json());

// Sample users for demo purposes
const users = [
    { id: 1, username: 'user1', password: 'password1' },
    { id: 2, username: 'user2', password: 'password2' }
];

// Login route to authenticate user and issue a JWT token
app.post('/login', (req, res) => {
    const { username, password } = req.body;
    const user = users.find(u => u.username === username && u.password === password);

    if (!user) return res.status(400).send('Invalid credentials');

    const token = jwt.sign({ id: user.id, username: user.username }, 'secret_key', { expiresIn: '1h' });
    res.json({ token });
});

// A protected route
app.get('/protected', (req, res) => {
    const token = req.headers['authorization'];
    if (!token) return res.status(401).send('Access denied');

    jwt.verify(token, 'secret_key', (err, decoded) => {
        if (err) return res.status(403).send('Invalid token');
        res.send('Protected content available');
    });
});

app.listen(port, () => {
    console.log(`Server running at http://localhost:${port}`);
});
            </code></pre>

            <h2>4. Securing API Routes with Middleware</h2>
            <p>
                The `/protected` route is an example of a secured endpoint. It checks the presence and validity of the JWT token before allowing access. This is done using middleware that verifies the token before processing the request.
            </p>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we explored how to handle user authentication and authorization using JWT. By securing routes with JWT, we ensure that only authenticated users can access certain parts of the application.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>