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
                <li><a href="/lessons/pfa/pfa01">Chapter 1: Automating File and Folder Management with Python</a></li>
                <li class="active"><a href="/lessons/pfa/pfa02">Chapter 2: Web Scraping using BeautifulSoup and Selenium</a></li>
                <li><a href="/lessons/pfa/pfa03">Chapter 3: Automating Emails and Other Web Tasks</a></li>
                <li><a href="/lessons/pfa/pfa04">Chapter 4: Working with APIs for Data Retrieval and Automation</a></li>
                <li><a href="/lessons/pfa/pfa05">Chapter 5: Scheduling and Running Automated Tasks with Python</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Web Scraping using BeautifulSoup and Selenium</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the basics of web scraping in Python</li>
                <li>Learn how to use BeautifulSoup to parse HTML content</li>
                <li>Automate web browsing using Selenium</li>
                <li>Extract data from websites and process it</li>
            </ul>

            <h2>1. Introduction to Web Scraping</h2>
            <p>
                Web scraping is a technique used to extract data from websites. Python provides libraries like BeautifulSoup and Selenium to perform web scraping tasks. BeautifulSoup is used for parsing HTML and XML documents, while Selenium allows you to automate browser actions like clicking and scrolling.
            </p>

            <h2>2. Installing Required Libraries</h2>
            <p>
                First, you need to install the necessary libraries for web scraping:
            </p>
            <pre>
pip install beautifulsoup4 selenium
            </pre>

            <h2>3. Web Scraping with BeautifulSoup</h2>
            <p>
                BeautifulSoup makes it easy to parse HTML content and extract specific data. Here's an example of how to scrape the title of a webpage:
            </p>
            <pre>
from bs4 import BeautifulSoup
import requests

# Send an HTTP request to the website
url = 'https://example.com'
response = requests.get(url)

# Parse the HTML content
soup = BeautifulSoup(response.text, 'html.parser')

# Extract the title of the webpage
title = soup.title.string
print(title)
            </pre>

            <h2>4. Automating Browser with Selenium</h2>
            <p>
                Selenium can be used to interact with a webpage in real-time, simulating user actions like clicking buttons or scrolling. Below is an example of opening a website:
            </p>
            <pre>
from selenium import webdriver

# Set up the Selenium WebDriver (make sure you have the appropriate WebDriver installed)
driver = webdriver.Chrome()

# Open a website
driver.get('https://example.com')

# Get the title of the webpage
print(driver.title)

# Close the browser
driver.quit()
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>