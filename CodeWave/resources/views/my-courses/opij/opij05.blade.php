<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 5: Achieving Abstraction through Abstract Classes and Interfaces</title>
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
                <li><a href="/lessons/opij/opij04">Chapter 4: Using Encapsulation and Access Modifiers</a></li>
                <li class="active"><a href="/lessons/opij/opij05">Chapter 5: Achieving Abstraction through Abstract Classes and Interfaces</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Achieving Abstraction through Abstract Classes and Interfaces</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the concept of abstraction in Java</li>
                <li>Learn the difference between abstract classes and interfaces</li>
                <li>Implement abstract classes and interfaces in Java</li>
                <li>Understand how abstraction enhances code modularity and flexibility</li>
            </ul>

            <h2>1. Understanding the Concept of Abstraction</h2>
            <p>
                Abstraction is a fundamental concept in object-oriented programming (OOP) that hides the implementation details of an object and exposes only the essential features.
            </p>
            <p>
                In Java, abstraction is achieved using abstract classes and interfaces. Both are used to define methods that must be implemented by subclasses, but they differ in how they are used.
            </p>

            <h2>2. Abstract Classes in Java</h2>
            <p>
                An abstract class is a class that cannot be instantiated directly. It can have abstract methods (methods without implementation) and concrete methods (methods with implementation).
            </p>
            <p>
                Abstract methods must be implemented by subclasses. An abstract class is declared using the `abstract` keyword.
            </p>
            <pre>
                <code>
                    abstract class Animal {
                        String name;

                        public abstract void sound(); // Abstract method

                        public void sleep() { // Concrete method
                            System.out.println(name + " is sleeping");
                        }
                    }

                    class Dog extends Animal {
                        @Override
                        public void sound() {
                            System.out.println("Dog barks");
                        }
                    }

                    public class Main {
                        public static void main(String[] args) {
                            Dog dog = new Dog();
                            dog.name = "Buddy";
                            dog.sound();  // Outputs: Dog barks
                            dog.sleep();  // Outputs: Buddy is sleeping
                        }
                    }
                </code>
            </pre>
            <p>
                In this example, the `Animal` class is abstract and contains both an abstract method (`sound()`) and a concrete method (`sleep()`). The `Dog` class extends `Animal` and provides an implementation for the `sound()` method.
            </p>

            <h2>3. Interfaces in Java</h2>
            <p>
                An interface is a reference type in Java, similar to a class, that can contain only constants, method signatures, default methods, static methods, and nested types.
            </p>
            <p>
                A class implements an interface using the `implements` keyword. Interfaces do not provide method implementations; they only specify the methods that must be implemented by the classes that implement them.
            </p>
            <pre>
                <code>
                    interface Animal {
                        void sound();
                    }

                    class Dog implements Animal {
                        @Override
                        public void sound() {
                            System.out.println("Dog barks");
                        }
                    }

                    public class Main {
                        public static void main(String[] args) {
                            Dog dog = new Dog();
                            dog.sound();  // Outputs: Dog barks
                        }
                    }
                </code>
            </pre>
            <p>
                In this example, the `Animal` interface defines the `sound()` method, and the `Dog` class implements this interface, providing an implementation for the `sound()` method.
            </p>

            <h2>4. Differences Between Abstract Classes and Interfaces</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><strong>Abstract Class:</strong> Can have both abstract methods (without implementation) and concrete methods (with implementation).</li>
                <li><strong>Interface:</strong> Can only have abstract methods (until Java 8, which introduced default methods). A class can implement multiple interfaces.</li>
                <li><strong>Abstract Class:</strong> A class can extend only one abstract class.</li>
                <li><strong>Interface:</strong> A class can implement multiple interfaces.</li>
            </ul>

            <h2>5. Using Abstraction for Modular and Flexible Code</h2>
            <p>
                Abstraction helps you write more flexible and modular code by focusing on "what" an object does rather than "how" it does it. By using abstract classes and interfaces, you can define common behavior that different classes can implement in their own way, allowing for easier extension and maintenance of your code.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>