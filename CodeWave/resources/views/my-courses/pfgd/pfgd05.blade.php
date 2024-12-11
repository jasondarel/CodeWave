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
                <li><a href="/lessons/pfgd/pfgd01">Chapter 1: Introduction to Game Development with Python</a></li>
                <li><a href="/lessons/pfgd/pfgd02">Chapter 2: Setting Up the Pygame Library and Game Loop</a></li>
                <li><a href="/lessons/pfgd/pfgd03">Chapter 3: Creating 2D Game Graphics and Animations</a></li>
                <li><a href="/lessons/pfgd/pfgd04">Chapter 4: Implementing Game Logic, Physics, and Collision Detection</a></li>
                <li class="active"><a href="/lessons/pfgd/pfgd05">Chapter 5: Building a Final Game Project</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Building a Final Game Project</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Integrate all concepts learned in previous chapters</li>
                <li>Build a complete 2D game project from start to finish</li>
                <li>Implement advanced features like scoring, levels, and menus</li>
                <li>Test and debug your game for better performance</li>
            </ul>

            <h2>1. Overview of the Final Game Project</h2>
            <p>
                In this chapter, you will apply everything you've learned in the course to create a complete game. You will build a 2D game from scratch, which includes creating game objects, adding game mechanics, handling user inputs, and implementing features like scoring and menus.
            </p>

            <h2>2. Game Design and Planning</h2>
            <p>
                Before diving into the code, it's important to plan your game. Define the game type (e.g., platformer, puzzle, or shooter), the key mechanics, and the game's objectives. This planning stage will help guide your development and ensure that your game is enjoyable and functional.
            </p>
            <p>
                For this example, let's plan a simple platformer game where the player controls a character that jumps over obstacles and collects items for points.
            </p>

            <h2>3. Setting Up Game Assets</h2>
            <p>
                To create the game, you'll need assets like images, sounds, and music. You can create your own assets or find free resources online. For a simple platformer, you would need:
            </p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Background images</li>
                <li>Player character sprite</li>
                <li>Enemy sprites</li>
                <li>Collectible items (coins, power-ups)</li>
                <li>Sound effects (jump, collision, item collection)</li>
            </ul>

            <h2>4. Building the Game Logic</h2>
            <p>
                Once you've planned the design and gathered the assets, you can start coding the game's logic. For this platformer example, the player can move left or right, jump over obstacles, and collect coins.
            </p>
            <pre>
                # Basic game loop for a platformer
                player_x = 100
                player_y = 400
                velocity_y = 0
                gravity = 0.5

                # Check for player movement
                keys = pygame.key.get_pressed()
                if keys[pygame.K_LEFT]:
                    player_x -= 5
                if keys[pygame.K_RIGHT]:
                    player_x += 5

                # Simulate gravity and jump
                velocity_y += gravity
                player_y += velocity_y

                if player_y >= 400:
                    player_y = 400
                    velocity_y = 0

                # Collision detection for obstacles and coins
                if player_rect.colliderect(coin_rect):
                    score += 1
            </pre>

            <h2>5. Adding Scoring and Game Over</h2>
            <p>
                To keep track of the player's progress, add a scoring system. Increase the score whenever the player collects an item or defeats an enemy. Also, implement a game over condition if the player runs out of lives or falls into a trap.
            </p>
            <pre>
                # Scoring system example
                score = 0

                if player_rect.colliderect(coin_rect):
                    score += 10

                # Display score on the screen
                score_text = font.render(f"Score: {score}", True, (255, 255, 255))
                screen.blit(score_text, (10, 10))
            </pre>

            <h2>6. Implementing Menus and Levels</h2>
            <p>
                A game menu allows players to start a new game, continue, or adjust settings. You can also add different levels to your game to increase the challenge. When the player completes a level, they should move on to the next one.
            </p>
            <pre>
                # Example of a simple start menu
                def show_menu():
                    menu_font = pygame.font.SysFont('Arial', 48)
                    title_text = menu_font.render('Platformer Game', True, (255, 255, 255))
                    start_text = menu_font.render('Press Space to Start', True, (255, 255, 255))
                    screen.blit(title_text, (200, 100))
                    screen.blit(start_text, (200, 200))

                show_menu()
            </pre>

            <h2>7. Testing and Debugging</h2>
            <p>
                Once the game is built, it's important to test it thoroughly. Playtest your game to find any bugs or performance issues. You can also ask others to play your game and provide feedback.
            </p>

            <h2>8. Conclusion</h2>
            <p>
                Congratulations! You've now built a complete game project using Python and Pygame. You’ve learned how to design, implement, and polish your game. As you continue practicing, you can add even more features like multiplayer support, AI enemies, or advanced physics. The sky's the limit!
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>