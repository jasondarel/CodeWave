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
                <li><a href="/lessons/jfmd/jfmd01">Chapter 1: Introduction to Android and Mobile App Development</a></li>
                <li class="active"><a href="/lessons/jfmd/jfmd02">Chapter 2: Setting up Android Studio and Creating Your First App</a></li>
                <li><a href="/lessons/jfmd/jfmd03">Chapter 3: Designing User Interfaces with XML and Java</a></li>
                <li><a href="/lessons/jfmd/jfmd04">Chapter 4: Handling User Input and Storing App Data</a></li>
                <li><a href="/lessons/jfmd/jfmd05">Chapter 5: Publishing Your Android App on the Google Play Store</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Setting up Android Studio and Creating Your First App</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Set up Android Studio on your machine</li>
                <li>Create a new Android project</li>
                <li>Run your first Android app on an emulator or device</li>
            </ul>

            <h2>1. Setting Up Android Studio</h2>
            <p>
                Android Studio is the official IDE for Android development. To get started, follow these steps to set it up on your machine:
            </p>
            <ul>
                <li>Download Android Studio from the official website: <a href="https://developer.android.com/studio" target="_blank">https://developer.android.com/studio</a></li>
                <li>Run the installer and follow the on-screen instructions for your operating system.</li>
                <li>Once installed, launch Android Studio and let it configure the necessary SDK and tools for your development environment.</li>
            </ul>
            <p>
                You may need to install additional components, such as Android SDK, to ensure everything is set up correctly.
            </p>

            <h2>2. Creating Your First Android App</h2>
            <p>
                Now that Android Studio is installed, let's create your first Android project. Follow these steps:
            </p>
            <ol>
                <li>Open Android Studio and click on "Start a new Android Studio project".</li>
                <li>Select a project template, such as "Empty Activity" (this gives you a simple screen to work with).</li>
                <li>Give your project a name, such as "MyFirstApp", and choose where to save it.</li>
                <li>Make sure the language is set to Java (or Kotlin if you prefer). Choose a minimum API level based on the devices you want to target.</li>
                <li>Click "Finish" to create the project.</li>
            </ol>
            <p>
                Android Studio will now create the project and open it for you to start working on.
            </p>

            <h2>3. Understanding the Project Structure</h2>
            <p>
                Your new project contains several important folders and files:
            </p>
            <ul>
                <li><strong>app/src/main/java/:</strong> Contains the Java code for your app. The main activity is located here, which controls the behavior of your app.</li>
                <li><strong>app/src/main/res/:</strong> Contains resources like images, layouts (in XML), and strings used in your app.</li>
                <li><strong>AndroidManifest.xml:</strong> Defines the structure of your app, including activities, permissions, and other settings.</li>
            </ul>

            <h2>4. Running Your First App</h2>
            <p>
                Now that you’ve created the project, let’s run your first app on an emulator or a physical Android device:
            </p>
            <ul>
                <li>To run on an emulator, click on the "Run" button (the green triangle) in Android Studio.</li>
                <li>If you haven't set up an emulator yet, Android Studio will prompt you to create one. Follow the on-screen instructions to select a device and download the system image.</li>
                <li>If you have a physical device, enable "Developer Options" and "USB Debugging" on the device, then connect it to your computer via USB.</li>
                <li>Select your emulator or device from the dropdown and click "Run".</li>
            </ul>
            <p>
                Your app should launch on the selected device, displaying the default "Hello World!" message on the screen.
            </p>

            <h2>5. Making Your First Change</h2>
            <p>
                To see how changes are made in your Android app, follow these steps:
            </p>
            <ol>
                <li>Open the "res/layout/activity_main.xml" file. This file controls the layout of your app’s main screen.</li>
                <li>Change the TextView text to something different, like "Welcome to Android!"</li>
                <li>Click "Run" again to see the updated text on your app’s screen.</li>
            </ol>
            <p>
                Congratulations! You've just edited your first Android app.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>