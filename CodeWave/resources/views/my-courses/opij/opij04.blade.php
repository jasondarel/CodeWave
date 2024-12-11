<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 4: Using Encapsulation and Access Modifiers</title>
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
                <li><a href="/lessons/opij/opij01">Chapter 1: Introduction to Object-Oriented Programming in Java</a></li>
                <li><a href="/lessons/opij/opij02">Chapter 2: Creating and Using Classes and Objects</a></li>
                <li><a href="/lessons/opij/opij03">Chapter 3: Implementing Inheritance and Polymorphism</a></li>
                <li class="active"><a href="/lessons/opij/opij04">Chapter 4: Using Encapsulation and Access Modifiers</a></li>
                <li><a href="/lessons/opij/opij05">Chapter 5: Achieving Abstraction through Abstract Classes and Interfaces</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Using Encapsulation and Access Modifiers</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the concept of encapsulation in Java</li>
                <li>Learn about access modifiers and their types</li>
                <li>Implement encapsulation using getter and setter methods</li>
                <li>Ensure data security and integrity through access modifiers</li>
            </ul>

            <h2>1. Understanding Encapsulation</h2>
            <p>
                Encapsulation is a fundamental concept in object-oriented programming that involves bundling the data (attributes) and the methods (functions) that operate on the data into a single unit, or class. It is one of the four pillars of OOP.
            </p>
            <p>
                Encapsulation helps to protect the integrity of an object's state by restricting direct access to its fields. Instead, access is provided through getter and setter methods.
            </p>

            <h2>2. Using Access Modifiers in Java</h2>
            <p>
                Java provides several access modifiers that control the visibility of class members (fields and methods):
            </p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><strong>Public:</strong> The field or method is accessible from any other class.</li>
                <li><strong>Private:</strong> The field or method is only accessible within its own class.</li>
                <li><strong>Protected:</strong> The field or method is accessible within its own package and by subclasses.</li>
                <li><strong>Default (no modifier):</strong> The field or method is accessible within its own package.</li>
            </ul>

            <h2>3. Implementing Encapsulation with Getter and Setter Methods</h2>
            <p>
                To implement encapsulation in Java, the fields of a class are made private, and public getter and setter methods are provided to allow controlled access to these fields.
            </p>
            <pre>
                <code>
                    class Employee {
                        // Private fields
                        private String name;
                        private int age;

                        // Getter method for name
                        public String getName() {
                            return name;
                        }

                        // Setter method for name
                        public void setName(String name) {
                            this.name = name;
                        }

                        // Getter method for age
                        public int getAge() {
                            return age;
                        }

                        // Setter method for age
                        public void setAge(int age) {
                            this.age = age;
                        }
                    }

                    public class Main {
                        public static void main(String[] args) {
                            Employee emp = new Employee();
                            emp.setName("John Doe");
                            emp.setAge(30);

                            System.out.println("Employee Name: " + emp.getName());
                            System.out.println("Employee Age: " + emp.getAge());
                        }
                    }
                </code>
            </pre>
            <p>
                In this example, the `name` and `age` fields are private, and the `getName`, `setName`, `getAge`, and `setAge` methods provide controlled access to these fields.
            </p>

            <h2>4. Why Encapsulation is Important</h2>
            <p>
                Encapsulation helps in several ways:
            </p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>It hides the implementation details of a class, exposing only what is necessary.</li>
                <li>It improves maintainability by making it easier to modify a class without affecting other parts of the program.</li>
                <li>It allows for better data security, ensuring that fields cannot be accessed or modified directly from outside the class.</li>
            </ul>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>