<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 2: Creating and Using Classes and Objects in Java</title>
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
                <li class="active"><a href="/lessons/opij/opij02">Chapter 2: Creating and Using Classes and Objects</a></li>
                <li><a href="/lessons/opij/opij03">Chapter 3: Implementing Inheritance and Polymorphism</a></li>
                <li><a href="/lessons/opij/opij04">Chapter 4: Using Encapsulation and Access Modifiers</a></li>
                <li><a href="/lessons/opij/opij05">Chapter 5: Achieving Abstraction through Abstract Classes and Interfaces</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Creating and Using Classes and Objects in Java</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the role of classes and objects in Java</li>
                <li>Create a class with attributes and methods</li>
                <li>Instantiate objects from a class</li>
                <li>Use constructors to initialize objects</li>
                <li>Work with methods and fields in classes</li>
            </ul>

            <h2>1. Understanding the Role of Classes and Objects in Java</h2>
            <p>
                In Java, everything is based around classes and objects. A class is a blueprint for creating objects, and objects are instances of a class.
            </p>
            <p>
                A class defines the properties (also known as fields) and behaviors (also known as methods) that the objects created from it will have. When you create an object, you're essentially instantiating an instance of that class.
            </p>

            <h2>2. Creating a Class with Attributes and Methods</h2>
            <p>
                A class can have attributes, which are variables, and methods, which are functions. Here's an example of a simple class that represents a `Person`:
            </p>
            <pre>
                <code>
                    public class Person {
                        String name;   // Attribute (field)
                        int age;       // Attribute (field)

                        // Constructor to initialize attributes
                        public Person(String name, int age) {
                            this.name = name;
                            this.age = age;
                        }

                        // Method to display person's information
                        public void displayInfo() {
                            System.out.println("Name: " + name + ", Age: " + age);
                        }
                    }
                </code>
            </pre>
            <p>
                In this example, the `Person` class has two attributes: `name` and `age`. It also has a method called `displayInfo` that prints the person's name and age.
            </p>

            <h2>3. Instantiating Objects from a Class</h2>
            <p>
                Once you've created a class, you can instantiate objects from that class using the `new` keyword. Here's an example:
            </p>
            <pre>
                <code>
                    public class Main {
                        public static void main(String[] args) {
                            // Creating objects from the Person class
                            Person person1 = new Person("Alice", 30);
                            Person person2 = new Person("Bob", 25);

                            // Calling the displayInfo method
                            person1.displayInfo();
                            person2.displayInfo();
                        }
                    }
                </code>
            </pre>
            <p>
                In the `Main` class, we create two `Person` objects (`person1` and `person2`) using the `new` keyword and passing values to the constructor. We then call the `displayInfo` method on both objects.
            </p>

            <h2>4. Using Constructors to Initialize Objects</h2>
            <p>
                Constructors are special methods used to initialize objects when they are created. Constructors have the same name as the class and do not have a return type.
            </p>
            <p>
                In the previous example, the `Person` class has a constructor that takes two parameters: `name` and `age`. This constructor initializes the object with the provided values.
            </p>
            <p>
                If no constructor is provided, Java provides a default constructor that initializes the object with default values (e.g., `null` for objects, `0` for integers).
            </p>

            <h2>5. Working with Methods and Fields in Classes</h2>
            <p>
                A class can have both instance methods (methods that operate on object fields) and static methods (methods that operate on class-level data). Here's an example:
            </p>
            <pre>
                <code>
                    public class Calculator {
                        // Instance method
                        public int add(int a, int b) {
                            return a + b;
                        }

                        // Static method
                        public static int subtract(int a, int b) {
                            return a - b;
                        }
                    }
                </code>
            </pre>
            <p>
                The `add` method is an instance method, so it requires an object of the `Calculator` class to be called. The `subtract` method is static, so it can be called directly on the class without creating an object.
            </p>
            <p>
                To use these methods, we can instantiate a `Calculator` object for the `add` method and call `subtract` directly on the class:
            </p>
            <pre>
                <code>
                    public class Main {
                        public static void main(String[] args) {
                            // Creating an object of Calculator class
                            Calculator calc = new Calculator();

                            // Calling the instance method
                            int sum = calc.add(5, 3);

                            // Calling the static method
                            int difference = Calculator.subtract(5, 3);

                            System.out.println("Sum: " + sum);
                            System.out.println("Difference: " + difference);
                        }
                    }
                </code>
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>