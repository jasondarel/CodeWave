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
                <li><a href="/lessons/fdwnae/fdwnae01">Chapter 1: Setting up a Node.js server with Express</a></li>
                <li class="active"><a href="/lessons/fdwnae/fdwnae02">Chapter 2: Building RESTful APIs with Express</a></li>
                <li><a href="/lessons/fdwnae/fdwnae03">Chapter 3: Handling user authentication and authorization</a></li>
                <li><a href="/lessons/fdwnae/fdwnae04">Chapter 4: Working with MongoDB and other databases</a></li>
                <li><a href="/lessons/fdwnae/fdwnae05">Chapter 5: Integrating frontend with backend using React or any other JS framework</a></li>
                <li><a href="/lessons/fdwnae/fdwnae06">Chapter 6: Deploying full-stack applications to production</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Building RESTful APIs with Express</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the principles of RESTful architecture</li>
                <li>Learn how to create a simple REST API using Express</li>
                <li>Learn about HTTP methods (GET, POST, PUT, DELETE)</li>
                <li>Implement CRUD operations in your API</li>
            </ul>

            <h2>1. Introduction to RESTful APIs</h2>
            <p>
                REST (Representational State Transfer) is an architectural style for designing networked applications. It uses a stateless, client-server communication model where clients request data and servers respond with that data in a format like JSON or XML.
            </p>

            <h2>2. Setting Up Routes for a REST API</h2>
            <p>
                In this section, we will set up routes to handle HTTP requests in our Express application. We will build a simple CRUD API for managing resources such as books or users.
            </p>
            <pre><code>
const express = require('express');
const app = express();
const port = 3000;

app.use(express.json()); // For parsing application/json

// Sample data for demonstration
let books = [
    { id: 1, title: 'Node.js Basics', author: 'John Doe' },
    { id: 2, title: 'Express for Beginners', author: 'Jane Smith' }
];

// GET request to fetch all books
app.get('/books', (req, res) => {
    res.json(books);
});

// GET request to fetch a book by ID
app.get('/books/:id', (req, res) => {
    const book = books.find(b => b.id === parseInt(req.params.id));
    if (!book) return res.status(404).send('Book not found');
    res.json(book);
});

// POST request to create a new book
app.post('/books', (req, res) => {
    const newBook = {
        id: books.length + 1,
        title: req.body.title,
        author: req.body.author
    };
    books.push(newBook);
    res.status(201).json(newBook);
});

// PUT request to update a book
app.put('/books/:id', (req, res) => {
    const book = books.find(b => b.id === parseInt(req.params.id));
    if (!book) return res.status(404).send('Book not found');
    book.title = req.body.title;
    book.author = req.body.author;
    res.json(book);
});

// DELETE request to remove a book
app.delete('/books/:id', (req, res) => {
    const bookIndex = books.findIndex(b => b.id === parseInt(req.params.id));
    if (bookIndex === -1) return res.status(404).send('Book not found');
    books.splice(bookIndex, 1);
    res.status(204).send();
});

app.listen(port, () => {
    console.log(`Server running at http://localhost:${port}`);
});
            </code></pre>

            <h2>3. Explanation of the Routes</h2>
            <p>
                In this example, we have defined five routes to handle GET, POST, PUT, and DELETE requests. The `/books` endpoint handles GET and POST requests, while the `/books/:id` endpoint handles GET, PUT, and DELETE for a specific book.
            </p>

            <h2>4. Conclusion</h2>
            <p>
                In this chapter, we learned how to build a simple RESTful API with Express. We explored how to handle different HTTP methods (GET, POST, PUT, DELETE) and create routes for CRUD operations.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>