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
                <li><a href="/lessons/wdwd/wdwd01">Chapter 1: Setting Up a Django Project and Understanding Its Structure</a></li>
                <li><a href="/lessons/wdwd/wdwd02">Chapter 2: Designing and Managing Databases with Django Models</a></li>
                <li><a href="/lessons/wdwd/wdwd03">Chapter 3: Creating Dynamic Views Using Django Views and Templates</a></li>
                <li><a href="/lessons/wdwd/wdwd04">Chapter 4: Implementing User Authentication and Authorization</a></li>
                <li class="active"><a href="/lessons/wdwd/wdwd05">Chapter 5: Deploying Django Applications to Production Servers</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Deploying Django Applications to Production Servers</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to deploy a Django application to production</li>
                <li>Understand the process of configuring a production-ready server</li>
                <li>Learn how to use web servers like Nginx and Apache with Django</li>
                <li>Deploy your Django app using a cloud service like Heroku or AWS</li>
            </ul>

            <h2>1. Preparing for Deployment</h2>
            <p>
                Before deploying your Django application to production, there are a few key steps to ensure your project is ready. These include configuring your settings, setting up a production database, and making sure your application can handle production traffic.
            </p>

            <h2>2. Configuring the Settings</h2>
            <p>
                In your Django project, make sure you have the correct settings for production. This involves updating your <code>settings.py</code> file to reflect production configurations, such as setting <code>DEBUG</code> to <code>False</code>, configuring your <code>ALLOWED_HOSTS</code>, and using a secure <code>SECRET_KEY</code>.
            </p>

            <h2>3. Using Web Servers</h2>
            <p>
                To serve your Django application in production, you'll need a web server. Common web servers used with Django include:
            </p>
            <ul>
                <li><strong>Gunicorn:</strong> A Python WSGI HTTP server commonly used with Django.</li>
                <li><strong>Nginx:</strong> A popular reverse proxy server used to forward requests to Gunicorn.</li>
                <li><strong>Apache:</strong> Another web server that can serve Django applications when configured with mod_wsgi.</li>
            </ul>

            <h2>4. Deploying to Heroku</h2>
            <p>
                Heroku is a platform-as-a-service (PaaS) that makes deploying web applications easy. To deploy your Django app to Heroku, follow these steps:
            </p>
            <ul>
                <li>Create a Heroku account and install the Heroku CLI.</li>
                <li>Initialize a Git repository in your Django project.</li>
                <li>Create a <code>Procfile</code> to specify how your app should run.</li>
                <li>Push your project to Heroku using Git.</li>
            </ul>
            <p>
                Once deployed, you can scale your application and access it through a URL provided by Heroku.
            </p>

            <h2>5. Deploying to AWS EC2</h2>
            <p>
                AWS EC2 provides scalable cloud computing resources that can host your Django app. To deploy on AWS EC2:
            </p>
            <ul>
                <li>Create an EC2 instance and set up a Linux environment.</li>
                <li>Install the required dependencies (Python, Django, Gunicorn, Nginx, etc.).</li>
                <li>Transfer your Django project files to the server.</li>
                <li>Configure Nginx to serve your app and set up SSL certificates for security.</li>
            </ul>

            <h2>6. Securing Your Application</h2>
            <p>
                Security is a major concern when deploying web applications. Ensure you follow security best practices:
            </p>
            <ul>
                <li>Use HTTPS by setting up SSL/TLS certificates.</li>
                <li>Configure a firewall and limit access to certain ports.</li>
                <li>Regularly update your dependencies to patch security vulnerabilities.</li>
            </ul>

            <h2>7. Conclusion</h2>
            <p>
                In this chapter, we learned how to deploy a Django application to production, using platforms like Heroku and AWS, and configuring web servers such as Gunicorn and Nginx. In the next chapter, we will review the entire course and cover additional topics in Django.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>