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
                <li><a href="/lessons/nfbd/nfbd01">Chapter 1: Getting started with Node.js and its core modules</a></li>
                <li><a href="/lessons/nfbd/nfbd02">Chapter 2: Working with Express.js for building RESTful APIs</a></li>
                <li><a href="/lessons/nfbd/nfbd03">Chapter 3: Connecting to databases (MongoDB, MySQL, etc.)</a></li>
                <li><a href="/lessons/nfbd/nfbd04">Chapter 4: Understanding asynchronous programming with callbacks, promises, and async/await</a></li>
                <li class="active"><a href="/lessons/nfbd/nfbd05">Chapter 5: Building secure and scalable backend applications</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Building Secure and Scalable Backend Applications</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to implement security best practices in Node.js applications</li>
                <li>Understand how to build scalable applications using proper architecture and design patterns</li>
                <li>Explore tools and techniques to improve performance and reliability in Node.js applications</li>
            </ul>

            <h2>1. Security Best Practices</h2>
            <p>
                When building backend applications, security should be a top priority. Below are some common security best practices for Node.js applications:
            </p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><strong>Use environment variables</strong>: Never hardcode sensitive data like API keys, database credentials, or tokens in your code. Use environment variables or configuration files to securely store sensitive data.</li>
                <li><strong>Sanitize user input</strong>: Always validate and sanitize user input to prevent injection attacks like SQL injection or Cross-Site Scripting (XSS).</li>
                <li><strong>Use HTTPS</strong>: Ensure that your application communicates over HTTPS (secure HTTP) to prevent man-in-the-middle attacks and data interception.</li>
                <li><strong>Hash passwords</strong>: Never store plaintext passwords. Use a strong hashing algorithm like bcrypt to hash passwords before storing them in the database.</li>
            </ul>

            <h2>2. Scaling Node.js Applications</h2>
            <p>
                As your application grows, you may need to scale it to handle increased traffic and user load. Below are some strategies for scaling a Node.js application:
            </p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><strong>Load balancing</strong>: Use load balancers to distribute incoming traffic across multiple instances of your application. This ensures that no single server becomes overwhelmed.</li>
                <li><strong>Clustering</strong>: Node.js is single-threaded by default, but you can take advantage of multiple CPU cores by using clustering. This allows your application to handle more concurrent requests.</li>
                <li><strong>Microservices architecture</strong>: Break your application into smaller, independent services that can be developed, deployed, and scaled individually. This improves scalability and maintainability.</li>
            </ul>

            <h2>3. Performance Optimization</h2>
            <p>
                In addition to scaling, improving the performance of your Node.js application is crucial for providing a seamless user experience. Some techniques to optimize performance include:
            </p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><strong>Use caching</strong>: Cache frequently accessed data in memory to reduce the load on your database and improve response times. Tools like Redis can be used for caching.</li>
                <li><strong>Optimize database queries</strong>: Make sure your database queries are efficient by using proper indexes and avoiding unnecessary joins. You can also paginate large datasets to reduce load time.</li>
                <li><strong>Profiling and monitoring</strong>: Use tools like Node.js's built-in profiler, or third-party solutions like New Relic, to monitor your application's performance and identify bottlenecks.</li>
            </ul>

            <h2>4. Error Handling and Logging</h2>
            <p>
                Proper error handling and logging are essential for building reliable backend applications. Here's how you can approach it:
            </p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><strong>Handle errors gracefully</strong>: Always catch errors in asynchronous code (e.g., using `try/catch` with async/await) and provide meaningful error messages.</li>
                <li><strong>Use centralized logging</strong>: Use logging libraries like Winston or Morgan to log errors, requests, and other critical events. Centralized logging helps in debugging and monitoring your application in production.</li>
            </ul>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we covered key concepts for building secure, scalable, and performant backend applications using Node.js. By following best practices for security, scalability, and performance, you'll be able to build robust applications that can handle increased traffic and offer a smooth user experience.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>