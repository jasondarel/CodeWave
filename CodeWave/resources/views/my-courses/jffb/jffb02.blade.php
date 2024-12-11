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
                <li><a href="/lessons/jffb/jffb01">Chapter 1: Understanding Java Syntax and Data Types</a></li>
                <li class="active"><a href="/lessons/jffb/jffb02">Chapter 2: Writing Basic Java Programs and Functions</a></li>
                <li><a href="/lessons/jffb/jffb03">Chapter 3: Control Flow and Decision-Making in Java</a></li>
                <li><a href="/lessons/jffb/jffb04">Chapter 4: Introduction to Object-Oriented Programming Concepts</a></li>
                <li><a href="/lessons/jffb/jffb05">Chapter 5: Working with Arrays, Lists, and Other Data Structures in Java</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Writing Basic Java Programs and Functions</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Write a basic Java program with a main method</li>
                <li>Understand the structure of a Java program</li>
                <li>Create and call simple functions in Java</li>
                <li>Work with basic data types in Java (int, double, String, etc.)</li>
            </ul>

            <h2>1. Introduction</h2>
            <p>
                In this chapter, we'll cover the basics of writing simple Java programs. You'll learn how to set up your first Java program, understand the structure of a Java application, and work with basic Java syntax. This is the foundation for building more complex Java applications in the future.
            </p>

            <h2>2. Basic Structure of a Java Program</h2>
            <p>
                Every Java program starts with a <code>public class</code> declaration, followed by the <code>main</code> method, which is the entry point of the program.
                Here's a basic Java program:
            </p>
            <pre><code>public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello, world!");
    }
}</code></pre>
            <p>
                This program consists of a class <code>HelloWorld</code>, which contains the <code>main</code> method. The <code>main</code> method is where the program execution begins. Inside the <code>main</code> method, we use the <code>System.out.println()</code> method to print the text "Hello, world!" to the console.
            </p>

            <h2>3. Writing Functions in Java</h2>
            <p>
                Functions (also called methods in Java) allow us to reuse code and organize our program into manageable blocks. Here's how you can define and call a simple function:
            </p>
            <pre><code>public class MathOperations {
    public static void main(String[] args) {
        int result = add(5, 10);
        System.out.println("The sum is: " + result);
    }

    public static int add(int a, int b) {
        return a + b;
    }
}</code></pre>
            <p>
                In this program, we define a function <code>add</code> that takes two integers as arguments and returns their sum. In the <code>main</code> method, we call this function and store the result in the <code>result</code> variable.
            </p>

            <h2>4. Understanding Data Types</h2>
            <p>
                Java has several built-in data types, such as <code>int</code>, <code>double</code>, <code>char</code>, and <code>String</code>. Here's how you can declare variables using these data types:
            </p>
            <pre><code>public class DataTypes {
    public static void main(String[] args) {
        int number = 5;
        double price = 9.99;
        char grade = 'A';
        String message = "Hello, Java!";
        
        System.out.println("Number: " + number);
        System.out.println("Price: " + price);
        System.out.println("Grade: " + grade);
        System.out.println("Message: " + message);
    }
}</code></pre>
            <p>
                In this example, we declare variables of different data types and print them to the console.
            </p>

            <h2>5. Summary</h2>
            <p>
                In this chapter, you've learned how to create basic Java programs, understand the structure of a Java application, define and call simple functions, and work with basic data types. This knowledge will serve as the foundation for building more advanced programs in future chapters.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
           
        </div>
    </div>
    @endsection
</body>

</html>