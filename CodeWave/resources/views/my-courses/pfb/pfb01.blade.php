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
                <li class="active"><a href="/lessons/pfb/pfb01">Chapter 1: Introduction to Python and setting up your environment</a></li>
                <li><a href="/lessons/pfb/pfb02">Chapter 2: Understanding variables, data types, and operators</a></li>
                <li><a href="/lessons/pfb/pfb03">Chapter 3: Working with loops and conditionals</a></li>
                <li><a href="/lessons/pfb/pfb04">Chapter 4: Defining and using functions</a></li>
                <li><a href="/lessons/pfb/pfb05">Chapter 5: Creating and managing Python modules</a></li>
                <li><a href="/lessons/pfb/pfb06">Chapter 6: Building a final project</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Introduction to Python and setting up your environment</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Install Python on various operating systems (Windows, macOS, Linux)</li>
                <li>Set up and configure a Python Integrated Development Environment (IDE) such as VS Code, PyCharm, or Jupyter Notebook</li>
                <li>Install and manage Python packages using pip</li>
            </ul>

            <h2>1. Introduction</h2>
            <p>
                In this chapter, we will explore the basics of Python programming and walk through the process of setting up a Python development environment. Whether you're using Windows, macOS, or Linux, you'll learn how to install Python, set up an Integrated Development Environment (IDE), and manage Python packages.
            </p>

            <h2>2. Installing Python on Windows</h2>
            <p>
                1. Go to the official Python website. <br>
                2. Download the latest version of Python for Windows.<br>
                3. Run the installer and make sure to check the box that says "Add Python to PATH" before clicking Install Now.<br>
                4. After installation, open the Command Prompt and type <code>python --version</code> to verify the installation.
            </p>

            <h2>3. Installing Python on macOS</h2>
            <p>
                1. Python usually comes pre-installed on macOS. To check if it's already installed, open the Terminal and type <code>python3 --version</code>.<br>
                2. If you need to install or update Python, visit the Python download page and download the macOS installer.<br>
                3. Follow the instructions to install Python.<br>
                4. After installation, verify by running <code>python3 --version</code> in the Terminal.
            </p>

            <h2>4. Installing Python on Linux</h2>
            <p>
                1. Most Linux distributions come with Python pre-installed. To check if Python is installed, type <code>python3 --version</code> in the Terminal. <br>
                2. If Python is not installed, you can install it using the package manager:<br>
            <ul>
                <li>For Ubuntu/Debian: <code>sudo apt-get install python3</code></li>
                <li>For Fedora: <code>sudo dnf install python3</code></li>
                <li>For Arch Linux: <code>sudo pacman -S python</code></li>
            </ul>
            </p>

            <h2>5. Setting Up and Configuring a Python IDE</h2>
            <h3>VS Code</h3>
            <p>
                1. Download Visual Studio Code from the <a href="https://code.visualstudio.com/">official website</a>.<br>
                2. Install the application and launch it.<br>
                3. Install the Python extension in VS Code.<br>
                4. After installation, open the Command Palette (Ctrl+Shift+P or Cmd+Shift+P) and select "Python: Select Interpreter" to choose your installed Python version.
            </p>

            <h3>PyCharm</h3>
            <p>
                1. Download PyCharm from <a href="https://www.jetbrains.com/pycharm/">JetBrains</a>.<br>
                2. Install and launch PyCharm.<br>
                3. During the first run, select the Python interpreter installed earlier.
            </p>

            <h3>Jupyter Notebook</h3>
            <p>
                1. Install Jupyter by running the command: <code>pip install notebook</code>.<br>
                2. Launch Jupyter with the command: <code>jupyter notebook</code>.
            </p>

            <h2>6. Installing and Managing Python Packages Using pip</h2>
            <p>
                1. Install a package using the command: <code>pip install <package-name></code>.<br>
                2. To list installed packages, use: <code>pip list</code>.<br>
                3. Upgrade a package: <code>pip install --upgrade <package-name></code>.<br>
                4. Uninstall a package: <code>pip uninstall <package-name></code>.
            </p>

            <h2>7. Using a Virtual Environment</h2>
            <p>
                A virtual environment helps manage dependencies for different Python projects. To set it up, run:
            <ul>
                <li>Create a virtual environment: <code>python3 -m venv myenv</code></li>
                <li>Activate it: <code>source myenv/bin/activate</code> (macOS/Linux) or <code>myenv\Scripts\activate</code> (Windows)</li>
                <li>Install packages within the virtual environment using pip</li>
            </ul>
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
         
        </div>
    </div>
    @endsection
</body>

</html>