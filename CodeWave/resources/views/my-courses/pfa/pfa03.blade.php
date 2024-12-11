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
                <li><a href="/lessons/pfa/pfa01">Chapter 1: Automating File and Folder Management with Python</a></li>
                <li><a href="/lessons/pfa/pfa02">Chapter 2: Web Scraping using BeautifulSoup and Selenium</a></li>
                <li class="active"><a href="/lessons/pfa/pfa03">Chapter 3: Automating Emails and Other Web Tasks</a></li>
                <li><a href="/lessons/pfa/pfa04">Chapter 4: Working with APIs for Data Retrieval and Automation</a></li>
                <li><a href="/lessons/pfa/pfa05">Chapter 5: Scheduling and Running Automated Tasks with Python</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Automating Emails and Other Web Tasks</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to automate sending emails using Python</li>
                <li>Understand how to interact with web services for task automation</li>
                <li>Use libraries such as smtplib and requests for automation</li>
                <li>Automate email responses and notifications</li>
            </ul>

            <h2>1. Automating Emails with smtplib</h2>
            <p>
                One of the common automation tasks is sending emails programmatically. Python provides the smtplib library to send emails. Below is an example of sending a simple email using Gmail's SMTP server:
            </p>
            <pre>
import smtplib
from email.mime.text import MIMEText

# Set up the SMTP server and login to your email account
smtp_server = 'smtp.gmail.com'
smtp_port = 587
email_address = 'your-email@gmail.com'
password = 'your-email-password'

# Create the email content
subject = 'Test Email'
body = 'Hello, this is an automated email from Python!'
msg = MIMEText(body)
msg['Subject'] = subject
msg['From'] = email_address
msg['To'] = 'recipient-email@example.com'

# Send the email
with smtplib.SMTP(smtp_server, smtp_port) as server:
    server.starttls()
    server.login(email_address, password)
    server.sendmail(email_address, 'recipient-email@example.com', msg.as_string())

print('Email sent successfully!')
            </pre>

            <h2>2. Automating Web Tasks with Requests</h2>
            <p>
                Python's requests library allows you to interact with websites and web services to automate tasks like form submissions, data retrieval, etc. Here's how you can submit a form using a POST request:
            </p>
            <pre>
import requests

# The URL of the form submission
url = 'https://example.com/form-submit'

# The form data to be submitted
form_data = {
    'name': 'John Doe',
    'email': 'john.doe@example.com'
}

# Submit the form using a POST request
response = requests.post(url, data=form_data)

# Check the response
if response.status_code == 200:
    print('Form submitted successfully!')
else:
    print('Failed to submit the form.')
            </pre>

            <h2>3. Automating Web Services with APIs</h2>
            <p>
                Many websites provide APIs (Application Programming Interfaces) to automate tasks such as retrieving data, sending information, etc. In this section, we will learn how to interact with a web service's API using Python.
            </p>
            <pre>
import requests

# Example of accessing a public API
url = 'https://api.example.com/data'
response = requests.get(url)

# Process the JSON response
if response.status_code == 200:
    data = response.json()
    print(data)
else:
    print('Failed to retrieve data from the API.')
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>