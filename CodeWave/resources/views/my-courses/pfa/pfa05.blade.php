<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 5</title>
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
                <li><a href="/lessons/pfa/pfa04">Chapter 4: Working with APIs for Data Retrieval and Automation</a></li>
                <li class="active"><a href="/lessons/pfa/pfa05">Chapter 5: Scheduling and Running Automated Tasks with Python</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Scheduling and Running Automated Tasks with Python</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to schedule Python scripts and tasks to run automatically</li>
                <li>Use libraries like <code>schedule</code> and <code>APScheduler</code> to automate tasks</li>
                <li>Understand how to set up recurring tasks and background jobs</li>
                <li>Learn how to handle errors and exceptions in automated tasks</li>
            </ul>

            <h2>1. Introduction to Task Scheduling</h2>
            <p>
                Task scheduling allows you to automate repetitive tasks in Python. It involves running Python scripts at predefined times or intervals. This chapter will focus on how to use libraries to automate Python scripts, set up recurring tasks, and manage background jobs.
            </p>

            <h2>2. Using the Schedule Library</h2>
            <p>
                The <code>schedule</code> library is a simple and intuitive way to schedule tasks in Python. It allows you to set up tasks that run at regular intervals (e.g., every minute, hour, or day).
            </p>
            <pre>
import schedule
import time

# Define the task
def job():
    print("Task executed")

# Schedule the task
schedule.every(10).seconds.do(job)

while True:
    schedule.run_pending()
    time.sleep(1)
            </pre>
            <p>
                This example schedules a task to run every 10 seconds. The <code>while</code> loop checks for pending tasks and runs them at the specified interval.
            </p>

            <h2>3. Using APScheduler for Advanced Scheduling</h2>
            <p>
                For more complex scheduling needs, you can use the <code>APScheduler</code> library. It supports more advanced scheduling features, such as cron-like job scheduling and persistent job stores.
            </p>
            <pre>
from apscheduler.schedulers.blocking import BlockingScheduler

# Create a scheduler instance
scheduler = BlockingScheduler()

# Define the task
def job():
    print("Advanced task executed")

# Schedule the task to run every 5 seconds
scheduler.add_job(job, 'interval', seconds=5)

# Start the scheduler
scheduler.start()
            </pre>

            <h2>4. Running Background Tasks</h2>
            <p>
                Sometimes, you may want to run a task in the background, so it doesn't block your main application. You can use libraries like <code>threading</code> or <code>multiprocessing</code> to run tasks in the background while the main application continues to run.
            </p>
            <pre>
import threading

# Define the task
def job():
    print("Background task executed")

# Run the task in the background
thread = threading.Thread(target=job)
thread.start()
            </pre>

            <h2>5. Error Handling in Automated Tasks</h2>
            <p>
                When automating tasks, it's essential to handle errors gracefully. You can use Python's built-in <code>try</code> and <code>except</code> blocks to catch and handle exceptions in your automated tasks.
            </p>
            <pre>
def job():
    try:
        # Simulate task that might raise an error
        result = 10 / 0
    except ZeroDivisionError as e:
        print(f"Error: {e}")
    else:
        print("Task executed successfully")

job()
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>