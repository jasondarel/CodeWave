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
                <li><a href="/lessons/pfc/pfc01">Chapter 1: Introduction to Python for Security Tasks</a></li>
                <li><a href="/lessons/pfc/pfc02">Chapter 2: Network Scanning and Reconnaissance with Python</a></li>
                <li><a href="/lessons/pfc/pfc03">Chapter 3: Automating Penetration Testing Tasks</a></li>
                <li class="active"><a href="/lessons/pfc/pfc04">Chapter 4: Creating Security Tools and Scripts</a></li>
                <li><a href="/lessons/pfc/pfc05">Chapter 5: Building Python-Based Exploits and Payloads</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Creating Security Tools and Scripts</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to create custom security tools using Python</li>
                <li>Understand the importance of automation in security tasks</li>
                <li>Write scripts for scanning, password cracking, and other tasks</li>
                <li>Develop security tools for practical penetration testing scenarios</li>
            </ul>

            <h2>1. Introduction to Security Tools</h2>
            <p>
                Security tools are essential in helping cybersecurity professionals perform penetration testing, vulnerability assessments, and incident response tasks. Python is a popular language for building these tools due to its simplicity and power. In this chapter, we will explore how to create security tools such as port scanners, password crackers, and vulnerability scanners.
            </p>

            <h2>2. Writing a Port Scanner</h2>
            <p>
                A port scanner is one of the most fundamental tools in cybersecurity. It helps to identify open ports on a target system, which is crucial in determining potential entry points. In this section, we will build a simple port scanner in Python using the <code>socket</code> library.
            </p>
            <pre>
import socket

def scan_port(target_ip, port):
    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    socket.setdefaulttimeout(1)
    result = s.connect_ex((target_ip, port))
    if result == 0:
        print(f"Port {port} is open")
    else:
        print(f"Port {port} is closed")

def scan_ports(target_ip, port_range):
    for port in port_range:
        scan_port(target_ip, port)

# Example usage: Scan ports 20 to 80 on target system
scan_ports("192.168.1.1", range(20, 81))
            </pre>

            <h2>3. Building a Password Cracker</h2>
            <p>
                Password cracking is an essential task in penetration testing. A password cracker attempts to break weak passwords through brute-force or dictionary-based methods. We will build a basic password cracker in Python that uses a dictionary of common passwords to attempt to break a login system.
            </p>
            <pre>
import requests

def password_crack(target_url, username, wordlist):
    for password in wordlist:
        data = {'username': username, 'password': password}
        response = requests.post(target_url, data=data)
        if "Login successful" in response.text:
            print(f"Password found: {password}")
            break
    else:
        print("Password not found in wordlist")

# Example usage: Crack the password of a system
target_url = "http://example.com/login"
username = "admin"
wordlist = ["password123", "admin123", "123456"]
password_crack(target_url, username, wordlist)
            </pre>

            <h2>4. Developing Vulnerability Scanners</h2>
            <p>
                Vulnerability scanners are tools that help identify known security flaws in systems and applications. By automating the process, we can scan for vulnerabilities like open ports, outdated software versions, and misconfigurations. We'll develop a simple vulnerability scanner that can check for common security issues.
            </p>
            <pre>
import nmap

def scan_for_vulnerabilities(target_ip):
    nm = nmap.PortScanner()
    nm.scan(target_ip, '1-65535')  # Scan all ports
    for host in nm.all_hosts():
        if nm[host].state() == 'up':
            print(f"Host {host} is live")
            for port in nm[host].all_tcp():
                if nm[host]['tcp'][port]['state'] == 'open':
                    print(f"Open port: {port} - Service: {nm[host]['tcp'][port]['name']}")
                    
# Example usage: Scan for vulnerabilities on target
scan_for_vulnerabilities("192.168.1.1")
            </pre>

            <h2>5. Automating Security Task Workflows</h2>
            <p>
                One of the key advantages of building custom security tools is the ability to automate workflows. By creating scripts that can perform multiple tasks sequentially, you can speed up penetration testing, vulnerability scanning, and even incident response tasks. We'll integrate the tools we've built so far into a larger, automated security workflow.
            </p>
            <pre>
def automated_security_workflow(target_ip, target_url, username, wordlist):
    # Port scanning
    scan_ports(target_ip, range(20, 81))
    
    # Password cracking
    password_crack(target_url, username, wordlist)
    
    # Vulnerability scanning
    scan_for_vulnerabilities(target_ip)

# Example usage: Run an automated security workflow
automated_security_workflow("192.168.1.1", "http://example.com/login", "admin", ["password123", "admin123"])
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>