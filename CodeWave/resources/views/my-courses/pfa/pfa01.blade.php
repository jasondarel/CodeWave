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
                <li class="active"><a href="/lessons/pfa/pfa01">Chapter 1: Automating File and Folder Management with Python</a></li>
                <li><a href="/lessons/pfa/pfa02">Chapter 2: Web Scraping using BeautifulSoup and Selenium</a></li>
                <li><a href="/lessons/pfa/pfa03">Chapter 3: Automating Emails and Other Web Tasks</a></li>
                <li><a href="/lessons/pfa/pfa04">Chapter 4: Working with APIs for Data Retrieval and Automation</a></li>
                <li><a href="/lessons/pfa/pfa05">Chapter 5: Scheduling and Running Automated Tasks with Python</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Automating File and Folder Management with Python</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to use Python's OS module for file and folder management</li>
                <li>Understand how to automate repetitive tasks related to file handling</li>
                <li>Manipulate files and directories with Python scripts</li>
            </ul>

            <h2>1. Introduction to the OS Module</h2>
            <p>
                Python's <code>os</code> module is a powerful tool that allows interaction with the operating system. It enables you to automate file and folder management tasks such as creating, deleting, and moving files and directories.
            </p>

            <h2>2. Automating File Creation</h2>
            <p>
                You can automate the creation of files with Python. Here's an example that creates a new text file:
            </p>
            <pre>
import os

# Create a new file
with open('new_file.txt', 'w') as f:
    f.write("Hello, world!")
            </pre>

            <h2>3. Automating Folder Creation</h2>
            <p>
                You can also automate the creation of folders (directories) using the <code>os.mkdir()</code> method:
            </p>
            <pre>
import os

# Create a new directory
os.mkdir('new_folder')
            </pre>

            <h2>4. Deleting Files and Folders</h2>
            <p>
                You can delete files and directories with the <code>os.remove()</code> and <code>os.rmdir()</code> methods, respectively:
            </p>
            <pre>
import os

# Delete a file
os.remove('new_file.txt')

# Delete a folder
os.rmdir('new_folder')
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>