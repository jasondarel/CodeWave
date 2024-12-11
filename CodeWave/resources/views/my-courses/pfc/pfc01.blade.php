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
                <li class="active"><a href="/lessons/pfc/pfc01">Chapter 1: Introduction to Python for Security Tasks</a></li>
                <li><a href="/lessons/pfc/pfc02">Chapter 2: Network Scanning and Reconnaissance with Python</a></li>
                <li><a href="/lessons/pfc/pfc03">Chapter 3: Automating Penetration Testing Tasks</a></li>
                <li><a href="/lessons/pfc/pfc04">Chapter 4: Creating Security Tools and Scripts</a></li>
                <li><a href="/lessons/pfc/pfc05">Chapter 5: Building Python-Based Exploits and Payloads</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Introduction to Python for Security Tasks</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the basics of Python for security tasks</li>
                <li>Learn how Python can be used for automation and scripting in cybersecurity</li>
                <li>Get familiar with libraries and tools used for security tasks</li>
                <li>Start writing your first security-related Python scripts</li>
            </ul>

            <h2>1. Overview of Python for Cybersecurity</h2>
            <p>
                Python is one of the most popular programming languages in the field of cybersecurity due to its simplicity and power. It is used extensively for writing security scripts, automating tasks, performing reconnaissance, and more. In this chapter, we will explore the basics of Python for security tasks.
            </p>

            <h2>2. Why Python for Security?</h2>
            <p>
                Python is chosen for security tasks because of its versatility and the availability of numerous libraries tailored for security analysis and penetration testing. Some common reasons why Python is preferred are:
            </p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Simplicity: Python is easy to learn and use, even for beginners.</li>
                <li>Extensive Libraries: There are many pre-built libraries for cybersecurity, such as <code>scapy</code> for network tasks, <code>requests</code> for web tasks, and <code>pycrypto</code> for cryptographic functions.</li>
                <li>Automation: Python is perfect for automating repetitive security tasks.</li>
                <li>Cross-Platform: Python can be run on various operating systems, making it useful in diverse environments.</li>
            </ul>

            <h2>3. Setting Up Python for Security Tasks</h2>
            <p>
                Before diving into security tasks, you need to ensure Python is properly set up. You will also need to install libraries commonly used in the field of cybersecurity. The first step is to install Python and some key libraries.
            </p>
            <pre>
# Install necessary libraries for cybersecurity
pip install scapy requests beautifulsoup4
            </pre>

            <h2>4. Your First Security Script</h2>
            <p>
                Let's start by writing a simple script that sends an HTTP request to a target URL to check if the website is live. This is a basic reconnaissance task.
            </p>
            <pre>
import requests

# Send a request to a website
def check_website(url):
    try:
        response = requests.get(url)
        if response.status_code == 200:
            print(f"{url} is live")
        else:
            print(f"{url} returned a status code: {response.status_code}")
    except requests.exceptions.RequestException as e:
        print(f"Error: {e}")

# Test the function
check_website("http://example.com")
            </pre>
            <p>
                This script checks whether a given website is up and running by sending an HTTP GET request. You can extend this functionality to other security tasks, such as scanning multiple websites or performing more advanced penetration testing activities.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>