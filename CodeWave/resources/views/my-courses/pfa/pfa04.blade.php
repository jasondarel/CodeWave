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
                <li><a href="/lessons/pfa/pfa01">Chapter 1: Automating File and Folder Management with Python</a></li>
                <li><a href="/lessons/pfa/pfa02">Chapter 2: Web Scraping using BeautifulSoup and Selenium</a></li>
                <li><a href="/lessons/pfa/pfa03">Chapter 3: Automating Emails and Other Web Tasks</a></li>
                <li class="active"><a href="/lessons/pfa/pfa04">Chapter 4: Working with APIs for Data Retrieval and Automation</a></li>
                <li><a href="/lessons/pfa/pfa05">Chapter 5: Scheduling and Running Automated Tasks with Python</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Working with APIs for Data Retrieval and Automation</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand what APIs are and how they work</li>
                <li>Learn how to use Python to interact with APIs</li>
                <li>Automate data retrieval from APIs for processing or analysis</li>
                <li>Use Python libraries like requests and json to interact with APIs</li>
            </ul>

            <h2>1. What are APIs?</h2>
            <p>
                API stands for Application Programming Interface, and it allows different software systems to communicate with each other. APIs expose data and functionality that other applications can use. In Python, we can interact with APIs to automate tasks such as retrieving data, making requests, or sending information to a server.
            </p>

            <h2>2. Interacting with APIs using Python</h2>
            <p>
                The most commonly used Python library for working with APIs is <code>requests</code>. This library allows you to send HTTP requests to APIs and handle the responses.
            </p>
            <pre>
import requests

# Define the API URL
url = 'https://api.example.com/data'

# Send a GET request to the API
response = requests.get(url)

# Check if the request was successful
if response.status_code == 200:
    # Parse the JSON response
    data = response.json()
    print(data)
else:
    print('Failed to retrieve data from API')
            </pre>

            <h2>3. Using API Data for Automation</h2>
            <p>
                Once you have retrieved data from an API, you can use it for various automation tasks. For example, you can schedule automated reports, track system usage, or update databases with real-time data. Below is an example of using API data to create a dynamic report.
            </p>
            <pre>
import requests

# Example of retrieving stock data from an API
stock_api_url = 'https://api.example.com/stock'
stock_data = requests.get(stock_api_url).json()

# Use the retrieved data to create a report
def create_report(data):
    report = f"Stock Report\n"
    for stock in data['stocks']:
        report += f"Stock Name: {stock['name']} - Price: {stock['price']}\n"
    return report

# Print the report
print(create_report(stock_data))
            </pre>

            <h2>4. Authenticating with APIs</h2>
            <p>
                Many APIs require authentication, such as using an API key or OAuth tokens. Below is an example of authenticating with an API using an API key in the header.
            </p>
            <pre>
import requests

# Define the API URL and your API key
api_url = 'https://api.example.com/data'
api_key = 'your-api-key'

# Set up the headers with the API key
headers = {'Authorization': f'Bearer {api_key}'}

# Send a GET request with the headers
response = requests.get(api_url, headers=headers)

# Check the response status
if response.status_code == 200:
    print(response.json())
else:
    print('Failed to authenticate and retrieve data')
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>