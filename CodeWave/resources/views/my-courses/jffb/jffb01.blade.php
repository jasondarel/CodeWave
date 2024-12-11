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
                <li class="active"><a href="/lessons/jffb/jffb01">Chapter 1: Understanding Java Syntax and Data Types</a></li>
                <li><a href="/lessons/jffb/jffb02">Chapter 2: Writing Basic Java Programs and Functions</a></li>
                <li><a href="/lessons/jffb/jffb03">Chapter 3: Control Flow and Decision-Making in Java</a></li>
                <li><a href="/lessons/jffb/jffb04">Chapter 4: Introduction to Object-Oriented Programming Concepts</a></li>
                <li><a href="/lessons/jffb/jffb05">Chapter 5: Working with Arrays, Lists, and Other Data Structures in Java</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Understanding Java Syntax and Data Types</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the basic structure of a Java program</li>
                <li>Learn about Java primitive data types</li>
                <li>Understand type casting and variable initialization</li>
            </ul>

            <h2>1. Introduction</h2>
            <p>
                In this chapter, you will learn about the syntax of Java and how to declare variables with different data types. Java is a statically-typed language, meaning every variable must be declared with a specific type before it can be used. We'll start by looking at the basic building blocks of a Java program.
            </p>

            <h2>2. Basic Structure of a Java Program</h2>
            <p>
                A simple Java program consists of a class definition and a main method. Here's an example of a basic Java program:
            </p>
            <pre>
                public class HelloWorld {
                    public static void main(String[] args) {
                        System.out.println("Hello, World!");
                    }
                }
            </pre>
            <p>
                In this program:
            <ul>
                <li><code>public class HelloWorld</code> defines a class called <code>HelloWorld</code>.</li>
                <li><code>public static void main(String[] args)</code> is the main method where the program starts executing.</li>
                <li><code>System.out.println("Hello, World!");</code> prints "Hello, World!" to the console.</li>
            </ul>
            </p>

            <h2>3. Java Primitive Data Types</h2>
            <p>
                Java has eight primitive data types:
            <ul>
                <li><strong>byte</strong>: 8-bit integer value.</li>
                <li><strong>short</strong>: 16-bit integer value.</li>
                <li><strong>int</strong>: 32-bit integer value.</li>
                <li><strong>long</strong>: 64-bit integer value.</li>
                <li><strong>float</strong>: 32-bit floating-point number.</li>
                <li><strong>double</strong>: 64-bit floating-point number.</li>
                <li><strong>char</strong>: 16-bit Unicode character.</li>
                <li><strong>boolean</strong>: Represents either <code>true</code> or <code>false</code>.</li>
            </ul>
            Example:
            </p>
            <pre>
                int age = 25;
                double price = 19.99;
                boolean isJavaFun = true;
            </pre>

            <h2>4. Type Casting in Java</h2>
            <p>
                Type casting allows you to convert one data type into another. There are two types of type casting in Java:
            <ul>
                <li><strong>Implicit casting</strong> (also called widening): This occurs automatically when you assign a smaller data type to a larger data type.</li>
                <li><strong>Explicit casting</strong> (also called narrowing): This occurs when you explicitly convert a larger data type to a smaller data type.</li>
            </ul>
            Example:
            </p>
            <pre>
                double num = 10.5;
                int numInt = (int) num; // Explicit casting
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>