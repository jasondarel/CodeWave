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
                <li class="active"><a href="/lessons/opij/opij01">Chapter 1: Introduction to Object-Oriented Programming in Java</a></li>
                <li><a href="/lessons/opij/opij02">Chapter 2: Creating and Using Classes and Objects</a></li>
                <li><a href="/lessons/opij/opij03">Chapter 3: Implementing Inheritance and Polymorphism</a></li>
                <li><a href="/lessons/opij/opij04">Chapter 4: Using Encapsulation and Access Modifiers</a></li>
                <li><a href="/lessons/opij/opij05">Chapter 5: Achieving Abstraction through Abstract Classes and Interfaces</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Introduction to Object-Oriented Programming in Java</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the core principles of Object-Oriented Programming (OOP)</li>
                <li>Create and use classes and objects in Java</li>
                <li>Implement inheritance and polymorphism</li>
                <li>Use encapsulation and access modifiers</li>
                <li>Achieve abstraction through abstract classes and interfaces</li>
            </ul>

            <h2>1. Understanding the Core Principles of Object-Oriented Programming</h2>
            <p>
                Object-Oriented Programming (OOP) is a programming paradigm that organizes software design around data, or objects, rather than functions and logic. The core principles of OOP include:
            </p>
            <ul style="list-style-type: square; margin-left: 40px;">
                <li><strong>Encapsulation:</strong> Bundling the data (variables) and methods (functions) that operate on the data into a single unit called a class.</li>
                <li><strong>Inheritance:</strong> A mechanism to define a new class based on an existing class, inheriting its properties and methods.</li>
                <li><strong>Polymorphism:</strong> The ability of a single function or method to work in different ways depending on the context (e.g., method overloading and overriding).</li>
                <li><strong>Abstraction:</strong> Hiding the implementation details and showing only the necessary features of the object to the user.</li>
            </ul>

            <h2>2. Creating and Using Classes and Objects in Java</h2>
            <p>
                A class in Java is a blueprint for creating objects. It defines the properties (fields) and methods (functions) that the objects created from the class will have.
            </p>
            <p>Here's a simple example of a class and object creation in Java:</p>
            <pre>
                <code>
                    public class Car {
                        String make;
                        String model;
                        int year;

                        // Constructor
                        public Car(String make, String model, int year) {
                            this.make = make;
                            this.model = model;
                            this.year = year;
                        }

                        // Method
                        public void displayInfo() {
                            System.out.println(year + " " + make + " " + model);
                        }
                    }

                    public class Main {
                        public static void main(String[] args) {
                            Car car1 = new Car("Toyota", "Camry", 2020);
                            car1.displayInfo();
                        }
                    }
                </code>
            </pre>
            <p>
                In this example, the `Car` class has a constructor to initialize its properties and a method to display information about the car.
            </p>

            <h2>3. Implementing Inheritance and Polymorphism</h2>
            <p>
                Inheritance allows one class (subclass) to inherit the properties and behaviors of another class (superclass). Polymorphism allows methods to behave differently based on the object that calls them.
            </p>
            <pre>
                <code>
                    class Animal {
                        public void makeSound() {
                            System.out.println("Animal makes a sound");
                        }
                    }

                    class Dog extends Animal {
                        @Override
                        public void makeSound() {
                            System.out.println("Dog barks");
                        }
                    }

                    public class Main {
                        public static void main(String[] args) {
                            Animal animal = new Animal();
                            animal.makeSound();

                            Dog dog = new Dog();
                            dog.makeSound(); // Overridden method
                        }
                    }
                </code>
            </pre>
            <p>
                In this example, the `Dog` class inherits from the `Animal` class and overrides the `makeSound` method to provide its own implementation.
            </p>

            <h2>4. Using Encapsulation and Access Modifiers</h2>
            <p>
                Encapsulation is the technique of bundling the data (attributes) and methods (behaviors) together in a single unit or class. It is achieved using access modifiers like `private`, `public`, and `protected`.
            </p>
            <pre>
                <code>
                    class Account {
                        private String accountNumber;
                        private double balance;

                        public Account(String accountNumber, double balance) {
                            this.accountNumber = accountNumber;
                            this.balance = balance;
                        }

                        public double getBalance() {
                            return balance;
                        }

                        public void deposit(double amount) {
                            if (amount > 0) {
                                balance += amount;
                            }
                        }

                        public void withdraw(double amount) {
                            if (amount > 0 && amount <= balance) {
                                balance -= amount;
                            }
                        }
                    }
                </code>
            </pre>

            <h2>5. Achieving Abstraction through Abstract Classes and Interfaces</h2>
            <p>
                Abstraction is the process of hiding the implementation details and exposing only the necessary features of the object. You can achieve abstraction through abstract classes and interfaces.
            </p>
            <pre>
                <code>
                    abstract class Shape {
                        abstract void draw();
                    }

                    class Circle extends Shape {
                        @Override
                        void draw() {
                            System.out.println("Drawing a Circle");
                        }
                    }

                    interface Drawable {
                        void draw();
                    }

                    class Rectangle implements Drawable {
                        @Override
                        public void draw() {
                            System.out.println("Drawing a Rectangle");
                        }
                    }
                </code>
            </pre>
            <p>
                The `Shape` class is abstract and cannot be instantiated directly. The `Circle` class extends `Shape` and implements the `draw` method. Similarly, the `Drawable` interface defines a contract that the `Rectangle` class implements.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>