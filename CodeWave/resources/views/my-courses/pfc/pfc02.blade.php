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
                <li><a href="/lessons/pfc/pfc01">Chapter 1: Introduction to Python for Security Tasks</a></li>
                <li class="active"><a href="/lessons/pfc/pfc02">Chapter 2: Network Scanning and Reconnaissance with Python</a></li>
                <li><a href="/lessons/pfc/pfc03">Chapter 3: Automating Penetration Testing Tasks</a></li>
                <li><a href="/lessons/pfc/pfc04">Chapter 4: Creating Security Tools and Scripts</a></li>
                <li><a href="/lessons/pfc/pfc05">Chapter 5: Building Python-Based Exploits and Payloads</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Network Scanning and Reconnaissance with Python</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to scan networks and find devices using Python</li>
                <li>Understand the basics of network reconnaissance</li>
                <li>Use Python libraries like <code>scapy</code> for network scanning</li>
                <li>Learn to handle network-related security tasks in a script</li>
            </ul>

            <h2>1. Introduction to Network Scanning</h2>
            <p>
                Network scanning is an essential part of security analysis and penetration testing. It involves discovering hosts, services, and vulnerabilities within a network. In this chapter, we will use Python, particularly the <code>scapy</code> library, to perform network reconnaissance and scanning tasks.
            </p>

            <h2>2. Setting Up Scapy for Network Scanning</h2>
            <p>
                To start network scanning, we first need to install <code>scapy</code>. It is a powerful Python library used for network packet manipulation and scanning.
            </p>
            <pre>
# Install Scapy
pip install scapy
            </pre>

            <h2>3. Discovering Hosts on a Network</h2>
            <p>
                A basic network scan often involves discovering active hosts within a network. This is typically done by sending ICMP "ping" requests to a range of IP addresses.
            </p>
            <pre>
from scapy.all import ARP, Ether, srp

def discover_hosts(target_ip):
    # Create ARP request packet to get the MAC address of the target
    arp_request = ARP(pdst=target_ip)
    broadcast = Ether(dst="ff:ff:ff:ff:ff:ff")
    arp_request_broadcast = broadcast/arp_request
    
    # Send packet on the network and capture the response
    answered_list = srp(arp_request_broadcast, timeout=1, verbose=False)[0]
    
    # Display the discovered hosts
    for element in answered_list:
        print(f"IP: {element[1].psrc}  MAC: {element[1].hwsrc}")

# Example usage: Discover hosts in the 192.168.1.0/24 network
discover_hosts("192.168.1.0/24")
            </pre>
            <p>
                The above code sends an ARP request to each IP in the specified range and prints the IP and MAC address of each discovered device. This allows you to map out devices on a local network.
            </p>

            <h2>4. Scanning Open Ports on a Host</h2>
            <p>
                Port scanning is another critical task in network reconnaissance. It helps identify open ports on a specific host that may be vulnerable to attacks.
            </p>
            <pre>
from scapy.all import IP, TCP, sr1

def scan_ports(target_ip):
    open_ports = []
    for port in range(20, 1025):
        pkt = IP(dst=target_ip)/TCP(dport=port, flags="S")
        response = sr1(pkt, timeout=1, verbose=False)
        
        if response is None:
            continue
        elif response.haslayer(TCP) and response.getlayer(TCP).flags == 18:
            open_ports.append(port)
    return open_ports

# Example usage: Scan ports of a specific host
target_ip = "192.168.1.10"
open_ports = scan_ports(target_ip)
print(f"Open ports on {target_ip}: {open_ports}")
            </pre>
            <p>
                This code uses Scapy to send SYN packets to the target IP on various ports and identifies open ports based on the response. Open ports are printed as part of the output.
            </p>

            <h2>5. Advanced Scanning Techniques</h2>
            <p>
                More advanced techniques can be implemented by combining various Scapy functions for detailed reconnaissance. You can scan for open ports, fingerprint services, or map the network topology to identify potential attack vectors.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>