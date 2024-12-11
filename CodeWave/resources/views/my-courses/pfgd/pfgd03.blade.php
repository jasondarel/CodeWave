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
                <li><a href="/lessons/pfgd/pfgd01">Chapter 1: Introduction to Game Development with Python</a></li>
                <li><a href="/lessons/pfgd/pfgd02">Chapter 2: Setting Up the Pygame Library and Game Loop</a></li>
                <li class="active"><a href="/lessons/pfgd/pfgd03">Chapter 3: Creating 2D Game Graphics and Animations</a></li>
                <li><a href="/lessons/pfgd/pfgd04">Chapter 4: Implementing Game Logic, Physics, and Collision Detection</a></li>
                <li><a href="/lessons/pfgd/pfgd05">Chapter 5: Building a Final Game Project</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Creating 2D Game Graphics and Animations</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand how to work with 2D graphics in Pygame</li>
                <li>Learn how to load images and display them on the screen</li>
                <li>Implement animations for moving characters and objects</li>
                <li>Work with transparency (alpha) in images</li>
            </ul>

            <h2>1. Understanding Pygame's Graphics System</h2>
            <p>
                Pygame provides several tools to work with 2D graphics, from drawing simple shapes to loading and displaying images. To get started, we need to understand how to create a surface and draw on it.
            </p>
            <p>
                The main element in Pygame is the <strong>Surface</strong>, which represents an image or drawing area. The screen itself is a surface where all your game's visuals are drawn.
            </p>

            <h2>2. Loading Images</h2>
            <p>
                You can load images into your game using the <code>pygame.image.load()</code> function. The images can then be blitted (drawn) onto the screen.
            </p>
            <pre>
                import pygame
                pygame.init()

                # Load an image
                player_image = pygame.image.load('player.png')

                # Create the screen
                screen = pygame.display.set_mode((800, 600))

                # Draw the image onto the screen
                screen.blit(player_image, (100, 100))

                # Update the display
                pygame.display.flip()
            </pre>
            <p>
                In this example, we load an image called 'player.png' and display it at position (100, 100) on the screen.
            </p>

            <h2>3. Working with Transparency</h2>
            <p>
                Images can also have transparent parts (e.g., PNG images with alpha transparency). You can work with these images by setting the transparent color or using the <code>convert_alpha()</code> function.
            </p>
            <pre>
                # Load the image with transparency
                player_image = pygame.image.load('player.png').convert_alpha()

                # Draw it on the screen
                screen.blit(player_image, (100, 100))
            </pre>
            <p>
                The <code>convert_alpha()</code> function ensures that any transparent parts of the image will be rendered correctly.
            </p>

            <h2>4. Implementing Animations</h2>
            <p>
                To create animations in a 2D game, you need to change the image displayed on the screen over time. You can do this by using a series of images (sprites) or modifying a single image.
            </p>
            <p>
                Here's an example of animating a character by cycling through a set of images:
            </p>
            <pre>
                # Load a set of images for the animation
                walk_images = [pygame.image.load('walk1.png'),
                               pygame.image.load('walk2.png'),
                               pygame.image.load('walk3.png')]

                # Animate by changing the image
                current_frame = 0
                while game_running:
                    screen.blit(walk_images[current_frame], (100, 100))
                    current_frame = (current_frame + 1) % len(walk_images)
                    pygame.display.flip()
                    pygame.time.delay(100)  # Delay for 100ms
            </pre>
            <p>
                In this example, we cycle through three images (representing walking frames) to create the illusion of movement.
            </p>

            <h2>5. Conclusion</h2>
            <p>
                In this chapter, we covered the basics of working with 2D game graphics, including loading and displaying images, working with transparency, and implementing animations. The next chapter will cover implementing game logic, physics, and collision detection in your games.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>