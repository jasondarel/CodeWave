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
                <li><a href="/lessons/wdwd/wdwd01">Chapter 1: Setting Up a Django Project and Understanding Its Structure</a></li>
                <li><a href="/lessons/wdwd/wdwd02">Chapter 2: Designing and Managing Databases with Django Models</a></li>
                <li><a href="/lessons/wdwd/wdwd03">Chapter 3: Creating Dynamic Views Using Django Views and Templates</a></li>
                <li class="active"><a href="/lessons/wdwd/wdwd04">Chapter 4: Implementing User Authentication and Authorization</a></li>
                <li><a href="/lessons/wdwd/wdwd05">Chapter 5: Deploying Django Applications to Production Servers</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Implementing User Authentication and Authorization</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the importance of user authentication and authorization</li>
                <li>Learn how to implement user login and registration in Django</li>
                <li>Learn how to manage user roles and permissions</li>
                <li>Secure sensitive data using Django's built-in features</li>
            </ul>

            <h2>1. Introduction to Authentication and Authorization</h2>
            <p>
                Authentication is the process of verifying the identity of a user, while authorization determines what actions a user can perform once authenticated. In Django, these tasks are handled with the built-in authentication system.
            </p>

            <h2>2. Setting Up User Authentication</h2>
            <p>
                Django comes with built-in views and forms for handling user authentication. The following example demonstrates how to create a login view:
            </p>
            <pre><code>
from django.contrib.auth import authenticate, login
from django.shortcuts import render, redirect

def login_view(request):
    if request.method == "POST":
        username = request.POST['username']
        password = request.POST['password']
        user = authenticate(request, username=username, password=password)
        if user is not None:
            login(request, user)
            return redirect('home')
        else:
            return render(request, 'login.html', {'error': 'Invalid credentials'})
    return render(request, 'login.html')
            </code></pre>

            <h2>3. User Registration</h2>
            <p>
                To register new users, you can create a registration view that collects user details and saves them to the database. Here’s an example:
            </p>
            <pre><code>
from django.contrib.auth.forms import UserCreationForm
from django.shortcuts import render, redirect

def register(request):
    if request.method == "POST":
        form = UserCreationForm(request.POST)
        if form.is_valid():
            form.save()
            return redirect('login')
    else:
        form = UserCreationForm()
    return render(request, 'register.html', {'form': form})
            </code></pre>

            <h2>4. Managing User Permissions</h2>
            <p>
                Django allows you to manage user permissions through the <code>Permission</code> model and the <code>User</code> model's <code>groups</code> and <code>user_permissions</code> fields. For example, you can assign users to different groups and grant specific permissions to each group.
            </p>

            <h2>5. Using Decorators for Authorization</h2>
            <p>
                You can restrict access to views based on user authentication or permissions using decorators like <code>login_required</code> or <code>permission_required</code>.
            </p>
            <pre><code>
from django.contrib.auth.decorators import login_required

@login_required
def secret_view(request):
    return render(request, 'secret.html')
            </code></pre>

            <h2>6. Securing User Data</h2>
            <p>
                Django provides several security features, including password hashing, session management, and protection against CSRF attacks. These features ensure that sensitive data is securely handled.
            </p>

            <h2>7. Conclusion</h2>
            <p>
                In this chapter, we explored how to implement user authentication and authorization in Django. We also learned how to secure user data and manage user permissions. In the next chapter, we will focus on deploying Django applications to production servers.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>