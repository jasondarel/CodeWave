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
                <li><a href="/lessons/pfgd/pfgd01">Chapter 1: Introduction to Game Development with Python</a></li>
                <li class="active"><a href="/lessons/pfgd/pfgd02">Chapter 2: Setting Up the Pygame Library and Game Loop</a></li>
                <li><a href="/lessons/pfgd/pfgd03">Chapter 3: Creating 2D Game Graphics and Animations</a></li>
                <li><a href="/lessons/pfgd/pfgd04">Chapter 4: Implementing Game Logic, Physics, and Collision Detection</a></li>
                <li><a href="/lessons/pfgd/pfgd05">Chapter 5: Building a Final Game Project</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Setting Up the Pygame Library and Game Loop</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the installation process of Pygame</li>
                <li>Set up the basic structure for a game project</li>
                <li>Implement a simple game loop</li>
                <li>Handle basic events like user input</li>
            </ul>

            <h2>1. Installing Pygame</h2>
            <p>
                Pygame is an open-source library designed for writing video games in Python. It provides modules for handling images, sounds, and other essential components of games. To get started with Pygame, you first need to install it on your system.
            </p>
            <p>
                To install Pygame, run the following command in your terminal or command prompt:
                <code>pip install pygame</code>
            </p>

            <h2>2. Basic Structure of a Game</h2>
            <p>
                Before diving into the game loop, it's important to understand the basic structure of a game project. A simple game written in Python typically consists of:
            <ul>
                <li><strong>Main file:</strong> This is where the game logic and Pygame functionality are implemented.</li>
                <li><strong>Assets:</strong> Images, sounds, and other media files used in the game.</li>
                <li><strong>Game loop:</strong> The central piece of every game that runs continuously and handles events like user input, screen updates, and game state changes.</li>
            </ul>
            </p>

            <h2>3. The Game Loop</h2>
            <p>
                The game loop is the heart of any game. It repeatedly runs the same set of instructions that make the game interactive. The general structure of a game loop looks like this:
            </p>
            <pre>
                while game_running:
                    process_events()
                    update_game_state()
                    draw_screen()
                    refresh_display()
            </pre>
            <p>
                The game loop performs the following tasks in each iteration:
            <ul>
                <li><strong>Process events:</strong> Handle user input and other events like quitting the game or collisions.</li>
                <li><strong>Update game state:</strong> Update the positions of game objects, check for collisions, and modify the game world.</li>
                <li><strong>Draw the screen:</strong> Redraw the game scene, including all characters, obstacles, and other visual elements.</li>
                <li><strong>Refresh display:</strong> Update the screen to reflect the changes made during the loop iteration.</li>
            </ul>
            </p>

            <h2>4. Example: Simple Game Loop</h2>
            <p>
                Here is an example of a simple game loop implemented with Pygame:
            </p>
            <pre>
                import pygame
                pygame.init()

                # Set up the screen
                screen = pygame.display.set_mode((800, 600))
                pygame.display.set_caption("My First Game")

                # Game loop
                game_running = True
                while game_running:
                    for event in pygame.event.get():
                        if event.type == pygame.QUIT:
                            game_running = False

                    # Game logic here
                    screen.fill((0, 0, 0))  # Fill the screen with black
                    pygame.display.flip()    # Update the screen

                pygame.quit()
            </pre>

            <h2>5. Handling Events</h2>
            <p>
                In the example above, the game loop listens for events like closing the game window. Events are triggered by user actions, such as key presses, mouse movements, or clicks.
            <ul>
                <li><strong>pygame.QUIT:</strong> This event occurs when the user closes the game window.</li>
                <li><strong>pygame.KEYDOWN:</strong> Triggered when a key is pressed.</li>
                <li><strong>pygame.KEYUP:</strong> Triggered when a key is released.</li>
            </ul>
            </p>

            <h2>6. Conclusion</h2>
            <p>
                In this chapter, we've learned how to install Pygame, set up the basic structure of a game, and create a simple game loop. The next chapter will explore how to create 2D game graphics and animations using Pygame.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>