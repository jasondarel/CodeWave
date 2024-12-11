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
                <li><a href="/lessons/pfgd/pfgd01">Chapter 1: Introduction to Game Development with Python</a></li>
                <li><a href="/lessons/pfgd/pfgd02">Chapter 2: Setting Up the Pygame Library and Game Loop</a></li>
                <li><a href="/lessons/pfgd/pfgd03">Chapter 3: Creating 2D Game Graphics and Animations</a></li>
                <li class="active"><a href="/lessons/pfgd/pfgd04">Chapter 4: Implementing Game Logic, Physics, and Collision Detection</a></li>
                <li><a href="/lessons/pfgd/pfgd05">Chapter 5: Building a Final Game Project</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Implementing Game Logic, Physics, and Collision Detection</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the basics of game logic and game loops</li>
                <li>Learn how to implement simple physics for movement and gravity</li>
                <li>Implement collision detection between objects in the game</li>
                <li>Explore handling user input for character control</li>
            </ul>

            <h2>1. Understanding Game Loops and Game Logic</h2>
            <p>
                The game loop is the heart of any game, repeatedly updating the game state and drawing it to the screen. It allows for continuous interaction and renders the game environment.
            </p>
            <p>
                A typical game loop runs as follows:
            </p>
            <pre>
                import pygame

                # Initialize Pygame
                pygame.init()

                # Set up the game screen
                screen = pygame.display.set_mode((800, 600))

                # Game loop
                running = True
                while running:
                    # Handle events
                    for event in pygame.event.get():
                        if event.type == pygame.QUIT:
                            running = False

                    # Update game state (move objects, handle input, etc.)
                    # Draw everything to the screen
                    screen.fill((0, 0, 0))  # Clear the screen
                    pygame.display.flip()

                    # Set the frame rate
                    pygame.time.Clock().tick(60)

                pygame.quit()
            </pre>
            <p>
                This basic loop clears the screen, handles events, and updates the display at a fixed frame rate.
            </p>

            <h2>2. Implementing Simple Physics</h2>
            <p>
                To add realism to your game, you can implement basic physics, such as gravity and movement. For example, you could simulate gravity by continuously applying a downward force to objects.
            </p>
            <pre>
                # Example of simple gravity
                gravity = 0.5
                velocity = 0
                y_position = 100  # Initial position

                while running:
                    velocity += gravity  # Apply gravity
                    y_position += velocity  # Update position

                    if y_position >= 500:  # Simulate ground collision
                        y_position = 500
                        velocity = 0

                    # Draw the object (e.g., a rectangle)
                    pygame.draw.rect(screen, (255, 0, 0), (100, y_position, 50, 50))

                    pygame.display.flip()
            </pre>
            <p>
                In this example, an object falls and eventually hits the ground, with gravity affecting its speed.
            </p>

            <h2>3. Collision Detection</h2>
            <p>
                Collision detection is essential for determining when objects in your game interact with each other. Pygame provides a built-in method called <code>colliderect()</code> to check if two objects overlap.
            </p>
            <pre>
                # Example of collision detection
                player_rect = pygame.Rect(100, 100, 50, 50)
                enemy_rect = pygame.Rect(200, 200, 50, 50)

                if player_rect.colliderect(enemy_rect):
                    print("Collision detected!")
            </pre>
            <p>
                This checks if the player's rectangle collides with the enemy's rectangle and triggers a response if they do.
            </p>

            <h2>4. Handling User Input</h2>
            <p>
                User input is crucial in controlling characters and interacting with the game. You can handle keyboard inputs to move the player character, for example:
            </p>
            <pre>
                # Handling arrow key inputs for player movement
                player_x = 100
                player_y = 100

                keys = pygame.key.get_pressed()
                if keys[pygame.K_LEFT]:
                    player_x -= 5
                if keys[pygame.K_RIGHT]:
                    player_x += 5
                if keys[pygame.K_UP]:
                    player_y -= 5
                if keys[pygame.K_DOWN]:
                    player_y += 5

                # Draw player
                pygame.draw.rect(screen, (0, 255, 0), (player_x, player_y, 50, 50))
            </pre>
            <p>
                This code allows the player to move the character using the arrow keys.
            </p>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we explored how to implement game logic, physics, and collision detection. We also discussed how to handle user input for controlling characters. The next chapter will focus on building a final game project to apply everything we've learned so far.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>