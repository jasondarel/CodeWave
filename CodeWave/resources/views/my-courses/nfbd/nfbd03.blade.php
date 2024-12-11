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
                <li><a href="/lessons/nfbd/nfbd01">Chapter 1: Getting started with Node.js and its core modules</a></li>
                <li><a href="/lessons/nfbd/nfbd02">Chapter 2: Working with Express.js for building RESTful APIs</a></li>
                <li class="active"><a href="/lessons/nfbd/nfbd03">Chapter 3: Connecting to databases (MongoDB, MySQL, etc.)</a></li>
                <li><a href="/lessons/nfbd/nfbd04">Chapter 4: Understanding asynchronous programming with callbacks, promises, and async/await</a></li>
                <li><a href="/lessons/nfbd/nfbd05">Chapter 5: Building secure and scalable backend applications</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Connecting to databases (MongoDB, MySQL, etc.)</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand how to connect Node.js applications to databases like MongoDB and MySQL</li>
                <li>Learn to perform CRUD operations using databases</li>
                <li>Set up database configurations for different environments (development, production)</li>
                <li>Implementing models for interacting with databases in a Node.js application</li>
            </ul>

            <h2>1. Introduction to Database Connections in Node.js</h2>
            <p>
                Node.js can be connected to a wide range of databases, both SQL (like MySQL) and NoSQL (like MongoDB). In this chapter, we will cover how to establish connections with these databases and perform common operations such as Create, Read, Update, and Delete (CRUD).
            </p>

            <h2>2. Connecting to MongoDB</h2>
            <p>
                MongoDB is a popular NoSQL database that stores data in a JSON-like format. To connect a Node.js app to MongoDB, you can use the Mongoose library, which is an ODM (Object Data Modeling) tool for MongoDB and Node.js. First, install Mongoose by running:
            </p>
            <pre><code>
npm install mongoose
            </code></pre>
            <p>
                Now, let's connect to a MongoDB database:
            </p>
            <pre><code>
const mongoose = require('mongoose');

// Connect to MongoDB database
mongoose.connect('mongodb://localhost:27017/mydatabase', { useNewUrlParser: true, useUnifiedTopology: true })
  .then(() => console.log('Connected to MongoDB'))
  .catch(err => console.error('Connection error:', err));
            </code></pre>
            <p>
                Once connected, you can define models and perform CRUD operations using Mongoose.
            </p>

            <h2>3. Connecting to MySQL</h2>
            <p>
                MySQL is a widely-used relational database management system. To connect a Node.js app to MySQL, you can use the `mysql2` package, which provides a promise-based interface for MySQL. Install it using:
            </p>
            <pre><code>
npm install mysql2
            </code></pre>
            <p>
                Here's how to connect to a MySQL database:
            </p>
            <pre><code>
const mysql = require('mysql2');

// Create a connection to the MySQL database
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'password',
  database: 'mydatabase'
});

connection.connect(err => {
  if (err) {
    console.error('Error connecting to the database:', err);
    return;
  }
  console.log('Connected to MySQL database');
});
            </code></pre>
            <p>
                Once connected, you can perform queries and transactions with MySQL.
            </p>

            <h2>4. Performing CRUD Operations</h2>
            <p>
                After establishing a database connection, you can perform CRUD operations. For MongoDB, using Mongoose, a simple example of CRUD operations would look like this:
            </p>
            <pre><code>
// Define a simple schema for an item
const itemSchema = new mongoose.Schema({
  name: String,
  price: Number
});

const Item = mongoose.model('Item', itemSchema);

// Create a new item
const newItem = new Item({ name: 'Laptop', price: 999 });
newItem.save()
  .then(item => console.log('Item saved:', item))
  .catch(err => console.error('Error saving item:', err));

// Read all items
Item.find()
  .then(items => console.log('Items:', items))
  .catch(err => console.error('Error fetching items:', err));
            </code></pre>
            <p>
                Similarly, for MySQL, you would use SQL queries to interact with the database. For example:
            </p>
            <pre><code>
connection.query('SELECT * FROM items', (err, results) => {
  if (err) {
    console.error('Error fetching data:', err);
    return;
  }
  console.log('Items:', results);
});
            </code></pre>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we learned how to connect to MongoDB and MySQL databases using Mongoose and the `mysql2` library, respectively. We also covered performing basic CRUD operations, which are essential for interacting with databases in a Node.js backend application.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>