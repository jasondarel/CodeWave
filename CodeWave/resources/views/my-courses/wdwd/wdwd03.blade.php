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
                <li><a href="/lessons/wdwd/wdwd01">Chapter 1: Setting Up a Django Project and Understanding Its Structure</a></li>
                <li><a href="/lessons/wdwd/wdwd02">Chapter 2: Designing and Managing Databases with Django Models</a></li>
                <li class="active"><a href="/lessons/wdwd/wdwd03">Chapter 3: Creating Dynamic Views Using Django Views and Templates</a></li>
                <li><a href="/lessons/wdwd/wdwd04">Chapter 4: Implementing User Authentication and Authorization</a></li>
                <li><a href="/lessons/wdwd/wdwd05">Chapter 5: Deploying Django Applications to Production Servers</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Creating Dynamic Views Using Django Views and Templates</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to create views in Django</li>
                <li>Understand how to use Django templates for rendering HTML</li>
                <li>Learn about template inheritance for reusability</li>
                <li>Learn how to pass data from views to templates</li>
            </ul>

            <h2>1. Introduction to Django Views</h2>
            <p>
                In Django, a view is a Python function that receives a web request and returns a web response. The response can contain HTML content, redirection, or even a 404 error. A view function is responsible for processing user requests and returning an appropriate response.
            </p>

            <h2>2. Creating Views</h2>
            <p>
                To create a view in Django, you define a function in the <code>views.py</code> file. Here's an example:
            </p>
            <pre><code>
from django.http import HttpResponse
from django.shortcuts import render

def hello(request):
    return HttpResponse("Hello, World!")
            </code></pre>
            <p>
                In this example, the <code>hello</code> function is a view that returns a simple "Hello, World!" message as an HTTP response.
            </p>

            <h2>3. Using Templates</h2>
            <p>
                Django provides a templating engine to generate dynamic HTML content. Templates are used to separate the HTML structure from the Python code, making your code cleaner and more maintainable.
            </p>
            <p>
                To use templates, you need to create an HTML file and render it within your view using the <code>render</code> function. Here's an example:
            </p>
            <pre><code>
def greeting(request):
    return render(request, 'greeting.html', {'name': 'John'})
            </code></pre>
            <p>
                In this example, the <code>render</code> function takes the request, the template file <code>greeting.html</code>, and a context dictionary with data to pass to the template.
            </p>

            <h2>4. Template Inheritance</h2>
            <p>
                Template inheritance allows you to create a base template that defines the common structure of your pages (like headers, footers, and navigation). Then, you can create child templates that extend the base template and override certain blocks.
            </p>
            <pre><code>
{% extends 'base.html' %}

{% block content %}
<h1>Welcome, name!</h1>
{% endblock %}
            </code></pre>

            <h2>5. Passing Data to Templates</h2>
            <p>
                You can pass data from your views to templates using a context dictionary. In the above example, the <code>name</code> variable is passed to the template, where it is displayed in the HTML.
            </p>

            <h2>6. Conclusion</h2>
            <p>
                In this chapter, we covered how to create views in Django, use templates for dynamic content, and apply template inheritance for reusability. In the next chapter, we will explore implementing user authentication and authorization.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>