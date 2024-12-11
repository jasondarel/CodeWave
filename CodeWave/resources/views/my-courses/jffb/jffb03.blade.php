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
                <li><a href="/lessons/jffb/jffb01">Chapter 1: Understanding Java Syntax and Data Types</a></li>
                <li><a href="/lessons/jffb/jffb02">Chapter 2: Writing Basic Java Programs and Functions</a></li>
                <li class="active"><a href="/lessons/jffb/jffb03">Chapter 3: Control Flow and Decision-Making in Java</a></li>
                <li><a href="/lessons/jffb/jffb04">Chapter 4: Introduction to Object-Oriented Programming Concepts</a></li>
                <li><a href="/lessons/jffb/jffb05">Chapter 5: Working with Arrays, Lists, and Other Data Structures in Java</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Control Flow and Decision-Making in Java</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand how conditional statements work in Java</li>
                <li>Use if-else, switch-case statements for decision-making</li>
                <li>Work with logical operators (&&, ||, !)</li>
                <li>Implement loops (for, while, do-while) for repetitive tasks</li>
            </ul>

            <h2>1. Introduction</h2>
            <p>
                In this chapter, we will focus on how to control the flow of execution in a Java program. We will learn how to make decisions based on conditions using <code>if</code> statements, and how to repeat actions with loops.
            </p>

            <h2>2. Conditional Statements</h2>
            <p>
                Java provides several conditional statements that allow you to make decisions in your program. The most common are the <code>if</code>, <code>else</code>, and <code>else-if</code> statements. Here's an example:
            </p>
            <pre><code>public class DecisionMaking {
    public static void main(String[] args) {
        int age = 20;
        if (age >= 18) {
            System.out.println("You are an adult.");
        } else {
            System.out.println("You are a minor.");
        }
    }
}</code></pre>
            <p>
                In this example, the program checks if the <code>age</code> is greater than or equal to 18. If true, it prints "You are an adult."; otherwise, it prints "You are a minor."
            </p>

            <h2>3. Switch-Case Statements</h2>
            <p>
                The <code>switch</code> statement provides a cleaner alternative when comparing a single variable to many possible values. Here's how you can use it:
            </p>
            <pre><code>public class SwitchExample {
    public static void main(String[] args) {
        int day = 3;
        switch (day) {
            case 1:
                System.out.println("Monday");
                break;
            case 2:
                System.out.println("Tuesday");
                break;
            case 3:
                System.out.println("Wednesday");
                break;
            default:
                System.out.println("Invalid day");
        }
    }
}</code></pre>
            <p>
                The <code>switch</code> statement evaluates the value of <code>day</code> and executes the corresponding case. If no case matches, it defaults to the <code>default</code> block.
            </p>

            <h2>4. Logical Operators</h2>
            <p>
                Logical operators such as <code>&&</code> (AND), <code>||</code> (OR), and <code>!</code> (NOT) can be used to combine or negate conditions in Java:
            </p>
            <pre><code>public class LogicalOperators {
    public static void main(String[] args) {
        int age = 20;
        boolean hasPermission = true;
        
        if (age >= 18 && hasPermission) {
            System.out.println("You are allowed to enter.");
        } else {
            System.out.println("You are not allowed to enter.");
        }
    }
}</code></pre>
            <p>
                In this example, both conditions must be true for the message "You are allowed to enter" to print.
            </p>

            <h2>5. Loops in Java</h2>
            <p>
                Loops allow you to execute a block of code multiple times. Java supports several types of loops: <code>for</code>, <code>while</code>, and <code>do-while</code>.
            </p>
            <h3>For Loop</h3>
            <pre><code>for (int i = 0; i < 5; i++) {
    System.out.println("Iteration: " + i);
}</code></pre>
            <h3>While Loop</h3>
            <pre><code>int i = 0;
while (i < 5) {
    System.out.println("Iteration: " + i);
    i++;
}</code></pre>
            <h3>Do-While Loop</h3>
            <pre><code>int i = 0;
do {
    System.out.println("Iteration: " + i);
    i++;
} while (i < 5);</code></pre>

            <h2>6. Summary</h2>
            <p>
                In this chapter, you've learned how to control the flow of your Java programs using conditional statements, logical operators, and loops. These concepts are fundamental for creating more complex and dynamic applications.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
         
        </div>
    </div>
    @endsection
</body>

</html>