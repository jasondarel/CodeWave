<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 1</title>
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
                <li class="active"><a href="/lessons/pfgd/pfgd01">Chapter 1: Introduction to Game Development with Python</a></li>
                <li><a href="/lessons/pfgd/pfgd02">Chapter 2: Setting Up the Pygame Library and Game Loop</a></li>
                <li><a href="/lessons/pfgd/pfgd03">Chapter 3: Creating 2D Game Graphics and Animations</a></li>
                <li><a href="/lessons/pfgd/pfgd04">Chapter 4: Implementing Game Logic, Physics, and Collision Detection</a></li>
                <li><a href="/lessons/pfgd/pfgd05">Chapter 5: Building a Final Game Project</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Introduction to Game Development with Python</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the fundamentals of game development</li>
                <li>Learn about the tools and libraries used for game development with Python</li>
                <li>Recognize the essential components of a game</li>
                <li>Set up your first game project</li>
            </ul>

            <h2>1. Introduction to Game Development</h2>
            <p>
                Game development is the process of designing, creating, and programming interactive games. Python, with its simplicity and wide range of libraries, is a popular language for creating both simple and complex games. In this course, we will focus on the core aspects of game development using Python and the Pygame library.
            </p>

            <h2>2. Python and Pygame: Tools for Game Development</h2>
            <p>
                Python is a high-level programming language that is easy to learn and use, making it an excellent choice for game development. Pygame is a Python library that provides functionality for creating games, including graphics, sound, and input handling. Together, Python and Pygame offer a powerful platform for game development.
            </p>

            <h2>3. Key Components of a Game</h2>
            <p>
                A typical game consists of several key components:
            <ul>
                <li><strong>Game Loop:</strong> The main part of a game, continuously running and processing events such as user input and rendering the game world.</li>
                <li><strong>Graphics:</strong> The visual elements that make up the game world, including backgrounds, characters, and animations.</li>
                <li><strong>Sound:</strong> The audio effects and background music that enhance the gaming experience.</li>
                <li><strong>Physics:</strong> The mechanics that simulate the movement and interaction of objects within the game world.</li>
                <li><strong>User Input:</strong> Capturing input from the user, such as keyboard, mouse, or touch input.</li>
                <li><strong>Game Logic:</strong> The rules and behavior that govern the game's actions, interactions, and events.</li>
            </ul>
            </p>

            <h2>4. Setting Up Your First Game Project</h2>
            <p>
                The first step in game development is setting up your development environment. In this section, we will guide you through the process of installing Python, the Pygame library, and setting up your first basic game project.
            </p>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we have introduced the basics of game development with Python. We covered the tools, libraries, and essential components of a game, providing the foundation for more advanced topics in game development. In the next chapter, we will dive into setting up the Pygame library and implementing the game loop, the heart of every game.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>