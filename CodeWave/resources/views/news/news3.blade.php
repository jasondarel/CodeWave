<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction to Quantum Computing</title>
    <style>
        body,
        h1,
        p {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f4;
            color: #333;
        }

        .article-body p {
            text-align: justify;
        }


        .article-header {
            width: 100%;
            height: 400px;
            background-image: url('https://www.ncsa.illinois.edu/wp-content/uploads/2024/08/Quantum-computing.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .article-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .article-title {
            color: white;
            font-size: 48px;
            font-weight: bold;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
            text-align: center;
            z-index: 2;
        }

        .article-content {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .article-meta {
            font-size: 14px;
            color: #777;
            text-align: right;
            margin-bottom: 20px;
        }

        .article-content p {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
            margin-bottom: 20px;
        }

        .back-link {
            font-size: 24px;
            color: #007BFF;
            text-decoration: none;
            margin-top: -20px;
        }

        .back-link:hover {
            color: #0056b3;
        }

        @media (max-width: 768px) {
            .article-title {
                font-size: 36px;
            }

            .article-content {
                padding: 15px;
                margin: 15px;
            }
        }
    </style>
</head>

<body>
    @extends('layout')

    @section('content')
    <a href="/dashboard" class="back-link">
        &#8592;
    </a>
    <div class="article-header">
        <div class="article-title">Introduction to Quantum Computing</div>
    </div>

    <div class="article-content">
        <div class="article-meta">
            <span>By Park Minju</span> |
            <span>November 28, 2024</span>
        </div>

        <div class="article-body">
            <p>
                Quantum computing is an emerging field that promises to revolutionize computing by solving problems that classical computers cannot efficiently tackle. At its core, quantum computing leverages the principles of quantum mechanics to process information in fundamentally new ways. This technology has the potential to impact a wide range of industries, from cryptography to artificial intelligence and beyond.
            </p>
            <p>
                Unlike classical computers, which use bits to represent data as either 0 or 1, quantum computers use quantum bits, or qubits. Qubits can exist in multiple states simultaneously, thanks to quantum superposition, allowing quantum computers to perform complex calculations at an unprecedented speed.
            </p>
            <p>
                Another key concept in quantum computing is entanglement. When qubits become entangled, the state of one qubit is directly linked to the state of another, regardless of the distance between them. This unique property enables quantum computers to solve problems in parallel, exponentially increasing their computational power.
            </p>
            <p>
                While quantum computing is still in its early stages, researchers are making significant progress in developing quantum algorithms and building quantum processors. In the near future, quantum computing could transform industries by solving problems that are currently intractable for classical computers, such as simulating molecular structures for drug development or optimizing complex supply chains.
            </p>
        </div>
    </div>
    @endsection
</body>

</html>