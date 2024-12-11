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
                <li><a href="/lessons/fdwnae/fdwnae01">Chapter 1: Setting up a Node.js server with Express</a></li>
                <li><a href="/lessons/fdwnae/fdwnae02">Chapter 2: Building RESTful APIs with Express</a></li>
                <li><a href="/lessons/fdwnae/fdwnae03">Chapter 3: Handling user authentication and authorization</a></li>
                <li class="active"><a href="/lessons/fdwnae/fdwnae04">Chapter 4: Working with MongoDB and other databases</a></li>
                <li><a href="/lessons/fdwnae/fdwnae05">Chapter 5: Integrating frontend with backend using React or any other JS framework</a></li>
                <li><a href="/lessons/fdwnae/fdwnae06">Chapter 6: Deploying full-stack applications to production</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Working with MongoDB and other databases</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the fundamentals of NoSQL databases, specifically MongoDB</li>
                <li>Learn how to interact with MongoDB using Node.js</li>
                <li>Understand how to perform CRUD operations with MongoDB</li>
                <li>Explore other types of databases and how they differ from MongoDB</li>
            </ul>

            <h2>1. Introduction to MongoDB</h2>
            <p>
                MongoDB is a popular NoSQL database that stores data in JSON-like documents, making it flexible and scalable. Unlike traditional SQL databases, MongoDB allows you to store data in collections, and each document can have a different structure.
            </p>

            <h2>2. Setting Up MongoDB with Node.js</h2>
            <p>
                To begin using MongoDB in your Node.js application, you first need to install the MongoDB Node.js driver. You can use the `mongodb` package or a more feature-rich ORM like Mongoose.
            </p>
            <pre><code>
npm install mongoose
            </code></pre>

            <p>
                Here is how to set up a basic connection to MongoDB using Mongoose:
            </p>
            <pre><code>
const mongoose = require('mongoose');

mongoose.connect('mongodb://localhost:27017/fdwnae_db', {
    useNewUrlParser: true,
    useUnifiedTopology: true
})
.then(() => console.log('MongoDB connected'))
.catch(err => console.log(err));
            </code></pre>

            <h2>3. Defining Models with Mongoose</h2>
            <p>
                Mongoose allows you to define schemas for your data. A schema is a blueprint for a MongoDB document, and Mongoose uses it to define the structure of your documents.
            </p>
            <pre><code>
const mongoose = require('mongoose');

const userSchema = new mongoose.Schema({
    username: String,
    email: String,
    password: String
});

const User = mongoose.model('User', userSchema);
            </code></pre>

            <h2>4. Performing CRUD Operations</h2>
            <p>
                Now that we have set up MongoDB and Mongoose, let's perform some CRUD (Create, Read, Update, Delete) operations.
            </p>

            <h3>4.1 Creating a User</h3>
            <pre><code>
const newUser = new User({
    username: 'john_doe',
    email: 'john@example.com',
    password: 'password123'
});

newUser.save()
    .then(user => console.log(user))
    .catch(err => console.log(err));
            </code></pre>

            <h3>4.2 Reading a User</h3>
            <pre><code>
User.findOne({ username: 'john_doe' })
    .then(user => console.log(user))
    .catch(err => console.log(err));
            </code></pre>

            <h3>4.3 Updating a User</h3>
            <pre><code>
User.updateOne({ username: 'john_doe' }, { $set: { password: 'newpassword123' } })
    .then(result => console.log(result))
    .catch(err => console.log(err));
            </code></pre>

            <h3>4.4 Deleting a User</h3>
            <pre><code>
User.deleteOne({ username: 'john_doe' })
    .then(result => console.log(result))
    .catch(err => console.log(err));
            </code></pre>

            <h2>5. Working with Other Databases</h2>
            <p>
                While MongoDB is a popular choice for NoSQL databases, other databases like PostgreSQL, MySQL, and SQLite offer relational data models and are better suited for certain types of applications. Each database has its own strengths and use cases.
            </p>
            <p>
                The choice of a database depends on the application needs. For example, MongoDB is ideal for applications that require scalability and flexible data models, while relational databases like PostgreSQL are suited for applications requiring strong data integrity and relationships between entities.
            </p>

            <h2>6. Conclusion</h2>
            <p>
                In this chapter, we explored MongoDB, how to interact with it using Mongoose, and how to perform CRUD operations. We also discussed the differences between MongoDB and relational databases, helping you decide when to use each type of database in your projects.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>