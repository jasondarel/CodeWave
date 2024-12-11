<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 6</title>
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
                <li><a href="/lessons/fdwnae/fdwnae05">Chapter 5: Integrating frontend with backend using React or any other JS framework</a></li>
                <li class="active"><a href="/lessons/fdwnae/fdwnae06">Chapter 6: Deploying full-stack applications to production</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 6: Deploying full-stack applications to production</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the steps involved in deploying a full-stack application to production</li>
                <li>Learn to deploy the backend (Node.js/Express) to a cloud platform</li>
                <li>Learn to deploy the frontend (React) to a static site hosting service</li>
                <li>Configure environment variables and database connections for production</li>
            </ul>

            <h2>1. Introduction to Deployment</h2>
            <p>
                Deploying your application means making it available to users on the web. This chapter will guide you through deploying both the frontend and backend of your full-stack application.
            </p>

            <h2>2. Deploying the Backend (Node.js/Express)</h2>
            <p>
                The backend of your full-stack application can be deployed to cloud services like Heroku, AWS, or DigitalOcean. Here, we'll use Heroku for its simplicity.
            </p>

            <p>Follow these steps to deploy the backend to Heroku:</p>
            <ol>
                <li>Create a Heroku account if you don't have one: <a href="https://heroku.com">https://heroku.com</a></li>
                <li>Install the Heroku CLI on your system</li>
                <li>Log in to your Heroku account from the command line: <code>heroku login</code></li>
                <li>Create a new Heroku application: <code>heroku create</code></li>
                <li>Push your code to Heroku: <code>git push heroku main</code></li>
            </ol>

            <p>
                After deployment, you can access your backend API at a Heroku-provided URL (e.g., <code>https://your-app-name.herokuapp.com</code>).
            </p>

            <h2>3. Deploying the Frontend (React)</h2>
            <p>
                The frontend can be deployed to a service like Netlify, Vercel, or GitHub Pages. Here, we will use Netlify for its ease of use.
            </p>

            <p>Follow these steps to deploy your React app to Netlify:</p>
            <ol>
                <li>Create a Netlify account at <a href="https://www.netlify.com">https://www.netlify.com</a></li>
                <li>Connect your GitHub repository containing your React app</li>
                <li>Netlify will automatically build and deploy the app when you push changes to your GitHub repository</li>
            </ol>

            <p>
                After deployment, your React app will be accessible at a Netlify-provided URL (e.g., <code>https://your-app-name.netlify.app</code>).
            </p>

            <h2>4. Configuring Environment Variables for Production</h2>
            <p>
                In production, you need to keep sensitive data, such as API keys and database credentials, secure. Environment variables allow you to store this information securely and access it in your app.
            </p>

            <h3>For the Backend:</h3>
            <p>
                On Heroku, you can set environment variables using the Heroku dashboard or CLI. For example:
            </p>
            <pre><code>
heroku config:set DATABASE_URL=your-database-url
heroku config:set SECRET_KEY=your-secret-key
            </code></pre>

            <h3>For the Frontend:</h3>
            <p>
                For React, you can define environment variables in a `.env` file at the root of your project:
            </p>
            <pre><code>
REACT_APP_API_URL=https://your-api-url.com
            </code></pre>

            <h2>5. Final Steps: Testing and Monitoring</h2>
            <p>
                Once deployed, thoroughly test your application to ensure everything is working correctly in the production environment. You can also set up monitoring tools like Google Analytics, Sentry, or New Relic to track performance and errors.
            </p>

            <h2>6. Conclusion</h2>
            <p>
                In this chapter, we covered the deployment process for a full-stack application. We learned how to deploy the backend to Heroku, the frontend to Netlify, and how to configure environment variables. By deploying your app, you make it accessible to users worldwide.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Back to Course Overview</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>