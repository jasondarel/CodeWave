<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 1</title>
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
                <li class="active"><a href="/lessons/jfmd/jfmd01">Chapter 1: Introduction to Android and Mobile App Development</a></li>
                <li><a href="/lessons/jfmd/jfmd02">Chapter 2: Setting up Android Studio and Creating Your First App</a></li>
                <li><a href="/lessons/jfmd/jfmd03">Chapter 3: Designing User Interfaces with XML and Java</a></li>
                <li><a href="/lessons/jfmd/jfmd04">Chapter 4: Handling User Input and Storing App Data</a></li>
                <li><a href="/lessons/jfmd/jfmd05">Chapter 5: Publishing Your Android App on the Google Play Store</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Introduction to Android and Mobile App Development</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand what Android is and the basics of mobile app development</li>
                <li>Learn about the Android ecosystem and its components</li>
                <li>Identify the tools and technologies used in Android development</li>
            </ul>

            <h2>1. What is Android?</h2>
            <p>
                Android is an open-source operating system primarily designed for mobile devices like smartphones and tablets. It is based on the Linux kernel and developed by Google. Android provides a rich application framework that allows developers to write managed code that can run on different devices.
            </p>

            <h2>2. The Android Ecosystem</h2>
            <p>
                The Android ecosystem includes several key components:
            </p>
            <ul>
                <li><strong>Android SDK:</strong> The software development kit that contains the necessary tools to develop Android apps, such as libraries, emulators, and build tools.</li>
                <li><strong>Android Studio:</strong> The official Integrated Development Environment (IDE) for Android app development. It provides code editing, debugging, performance tooling, and more.</li>
                <li><strong>Android OS:</strong> The operating system itself that runs on the device, providing the platform for your apps to execute.</li>
                <li><strong>Google Play Store:</strong> The marketplace where Android apps can be distributed and downloaded by users.</li>
            </ul>

            <h2>3. Overview of Mobile App Development</h2>
            <p>
                Mobile app development involves the creation of software applications for mobile devices. There are two main types of mobile apps:
            </p>
            <ul>
                <li><strong>Native Apps:</strong> Built specifically for a mobile operating system (iOS or Android) using platform-specific programming languages (Java/Kotlin for Android, Swift for iOS).</li>
                <li><strong>Cross-Platform Apps:</strong> Built to run on multiple platforms using a single codebase, typically using frameworks like React Native, Flutter, or Xamarin.</li>
            </ul>
            <p>
                In this course, you will focus on developing native Android applications using Java.
            </p>

            <h2>4. Tools and Technologies for Android Development</h2>
            <p>
                The primary tools and technologies you'll need for Android development include:
            </p>
            <ul>
                <li><strong>Java Programming Language:</strong> The core language used for Android development (although Kotlin is now becoming more popular).</li>
                <li><strong>Android Studio:</strong> The official IDE for Android development.</li>
                <li><strong>Gradle:</strong> A build automation tool used by Android Studio to compile and manage project dependencies.</li>
                <li><strong>Emulators and Physical Devices:</strong> Used to test and debug Android apps on virtual or actual devices.</li>
            </ul>

            <h2>5. Mobile App Development Process</h2>
            <p>
                The typical process of mobile app development involves several stages:
            </p>
            <ul>
                <li><strong>Planning and Design:</strong> Define the app's purpose, features, and user interface.</li>
                <li><strong>Development:</strong> Write the code for the app, create the UI, and implement functionality.</li>
                <li><strong>Testing:</strong> Test the app on various devices and emulators to ensure it works as expected.</li>
                <li><strong>Deployment:</strong> Publish the app to the Google Play Store (or other app stores) for users to download.</li>
            </ul>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>