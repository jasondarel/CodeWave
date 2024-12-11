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
                <li><a href="/lessons/wdwd/wdwd01">Chapter 1: Setting Up a Django Project and Understanding Its Structure</a></li>
                <li class="active"><a href="/lessons/wdwd/wdwd02">Chapter 2: Designing and Managing Databases with Django Models</a></li>
                <li><a href="/lessons/wdwd/wdwd03">Chapter 3: Creating Dynamic Views Using Django Views and Templates</a></li>
                <li><a href="/lessons/wdwd/wdwd04">Chapter 4: Implementing User Authentication and Authorization</a></li>
                <li><a href="/lessons/wdwd/wdwd05">Chapter 5: Deploying Django Applications to Production Servers</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Designing and Managing Databases with Django Models</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand how Django models map to database tables</li>
                <li>Learn how to define models and fields in Django</li>
                <li>Understand the concept of migrations in Django</li>
                <li>Learn how to use Django ORM for querying the database</li>
            </ul>

            <h2>1. Introduction to Django Models</h2>
            <p>
                Django uses models to interact with the database. A model is a Python class that defines the fields and behaviors of the data you are storing. Django models are translated into database tables when you run migrations.
            </p>
            <p>
                In Django, each model is represented by a Python class that inherits from <code>django.db.models.Model</code>.
            </p>

            <h2>2. Defining Models</h2>
            <p>
                To define a model, you create a Python class and define the fields as class attributes. Here's an example of a model that defines a <code>Book</code> object with fields for the title, author, and publish date:
            </p>
            <pre><code>
from django.db import models

class Book(models.Model):
    title = models.CharField(max_length=100)
    author = models.CharField(max_length=100)
    publish_date = models.DateField()

    def __str__(self):
        return self.title
            </code></pre>

            <p>
                In this example, the <code>CharField</code> is used to store strings (like the book's title and author), and the <code>DateField</code> stores the date the book was published.
            </p>

            <h2>3. Running Migrations</h2>
            <p>
                After defining your models, you need to create and apply migrations. Migrations are how Django updates your database schema to match your models.
            </p>
            <p>
                To create a migration, run:
            </p>
            <pre><code>python manage.py makemigrations</code></pre>
            <p>
                To apply the migration to the database, run:
            </p>
            <pre><code>python manage.py migrate</code></pre>

            <h2>4. Django ORM (Object-Relational Mapping)</h2>
            <p>
                Django ORM allows you to interact with the database using Python objects. Here are some examples of how to use the ORM:
            </p>
            <h3>Creating a new object:</h3>
            <pre><code>
book = Book.objects.create(title="Django for Beginners", author="John Doe", publish_date="2023-01-01")
            </code></pre>

            <h3>Querying the database:</h3>
            <pre><code>
books = Book.objects.all()
book = Book.objects.get(id=1)
            </code></pre>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we covered how to define Django models, run migrations, and use the Django ORM to interact with the database. In the next chapter, we'll explore creating dynamic views using Django views and templates.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>