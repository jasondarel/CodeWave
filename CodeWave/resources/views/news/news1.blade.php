<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artificial Intelligence in Software Development</title>
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

        .article-header {
            width: 100%;
            height: 400px;
            background-image: url('https://plus.unsplash.com/premium_photo-1683121710572-7723bd2e235d?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
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
        <div class="article-title">Artificial Intelligence in Software Development</div>
    </div>

    <div class="article-content">
        <div class="article-meta">
            <span>By Pham Hanni</span> |
            <span>December 1, 2024
            </span>
        </div>

        <div class="article-body">
            <p>
                Artificial Intelligence (AI) is transforming the software development landscape. With advancements in machine learning, natural language processing, and deep learning, AI is helping developers build smarter applications, automate tasks, and optimize processes like never before.
            </p>
            <p>
                In the past, software development was a manual process involving repetitive coding tasks. Today, AI tools can automatically generate code, detect bugs, and assist in testing, reducing the workload for developers and speeding up development cycles. AI is also enabling the creation of self-learning systems that can improve over time without human intervention.
            </p>
            <p>
                One of the most exciting aspects of AI in development is its ability to predict user behavior and enhance user experiences. With AI-powered analytics, developers can gain insights into user interactions and preferences, leading to more personalized software and better decision-making.
            </p>
            <p>
                As AI continues to evolve, it is poised to shape the future of software development in ways we can only begin to imagine. The integration of AI into development workflows will streamline the process, enhance productivity, and ultimately lead to the creation of more intelligent and adaptable software solutions.
            </p>
        </div>
    </div>
    @endsection
</body>

</html>