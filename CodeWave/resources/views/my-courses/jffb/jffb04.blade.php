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
                <li><a href="/lessons/jffb/jffb01">Chapter 1: Understanding Java Syntax and Data Types</a></li>
                <li><a href="/lessons/jffb/jffb02">Chapter 2: Writing Basic Java Programs and Functions</a></li>
                <li><a href="/lessons/jffb/jffb03">Chapter 3: Control Flow and Decision-Making in Java</a></li>
                <li class="active"><a href="/lessons/jffb/jffb04">Chapter 4: Introduction to Object-Oriented Programming Concepts</a></li>
                <li><a href="/lessons/jffb/jffb05">Chapter 5: Working with Arrays, Lists, and Other Data Structures in Java</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Introduction to Object-Oriented Programming Concepts</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the principles of Object-Oriented Programming (OOP)</li>
                <li>Learn about classes and objects</li>
                <li>Understand the concepts of inheritance, polymorphism, encapsulation, and abstraction</li>
                <li>Implement simple classes and objects in Java</li>
            </ul>

            <h2>1. Introduction to OOP</h2>
            <p>
                Object-Oriented Programming (OOP) is a programming paradigm that uses objects and classes to structure software programs. OOP allows for better modularity and code reusability. The four fundamental principles of OOP are encapsulation, inheritance, polymorphism, and abstraction.
            </p>

            <h2>2. Classes and Objects</h2>
            <p>
                In Java, classes are blueprints for creating objects (instances). A class defines the properties (attributes) and behaviors (methods) that the objects created from the class will have. Here's how you can define a simple class:
            </p>
            <pre><code>public class Car {
    String model;
    int year;

    public void start() {
        System.out.println("The car is starting.");
    }

    public void stop() {
        System.out.println("The car has stopped.");
    }
}</code></pre>
            <p>
                In this example, the <code>Car</code> class has two properties (<code>model</code> and <code>year</code>) and two methods (<code>start()</code> and <code>stop()</code>). An object of this class can be created to represent a specific car.
            </p>

            <h2>3. Inheritance</h2>
            <p>
                Inheritance allows a class to inherit properties and methods from another class. This promotes code reusability and can simplify code management. Here's an example of inheritance in Java:
            </p>
            <pre><code>public class ElectricCar extends Car {
    int batteryLife;

    public void charge() {
        System.out.println("The car is charging.");
    }
}</code></pre>
            <p>
                In this example, the <code>ElectricCar</code> class inherits the properties and methods of the <code>Car</code> class. It also adds a new property (<code>batteryLife</code>) and a new method (<code>charge()</code>).
            </p>

            <h2>4. Polymorphism</h2>
            <p>
                Polymorphism allows objects of different classes to be treated as objects of a common superclass. It also allows methods to have different implementations depending on the object calling them. Here's an example:
            </p>
            <pre><code>public class Animal {
    public void sound() {
        System.out.println("Animal makes a sound");
    }
}

public class Dog extends Animal {
    @Override
    public void sound() {
        System.out.println("Dog barks");
    }
}

public class Main {
    public static void main(String[] args) {
        Animal myDog = new Dog();
        myDog.sound();
    }
}</code></pre>
            <p>
                In this example, the <code>Dog</code> class overrides the <code>sound()</code> method from the <code>Animal</code> class. The output will be "Dog barks" instead of "Animal makes a sound," demonstrating polymorphism.
            </p>

            <h2>5. Encapsulation</h2>
            <p>
                Encapsulation is the concept of wrapping data (variables) and methods into a single unit called a class. It also refers to restricting access to some of an object's components, which can prevent unauthorized modifications. Here's an example:
            </p>
            <pre><code>public class Account {
    private double balance;

    public void deposit(double amount) {
        if (amount > 0) {
            balance += amount;
        }
    }

    public double getBalance() {
        return balance;
    }
}</code></pre>
            <p>
                In this example, the <code>balance</code> variable is private, meaning it can't be accessed directly from outside the class. The <code>deposit()</code> method allows deposits to be made, and the <code>getBalance()</code> method allows the balance to be checked.
            </p>

            <h2>6. Abstraction</h2>
            <p>
                Abstraction is the concept of hiding the complex implementation details and exposing only the essential features of an object. In Java, abstraction is achieved through abstract classes and interfaces. Here's an example of an abstract class:
            </p>
            <pre><code>abstract class Animal {
    abstract void sound();
}

class Cat extends Animal {
    public void sound() {
        System.out.println("Meow");
    }
}</code></pre>
            <p>
                In this example, the <code>Animal</code> class is abstract, meaning it cannot be instantiated directly. The <code>Cat</code> class provides a concrete implementation of the <code>sound()</code> method.
            </p>

            <h2>7. Summary</h2>
            <p>
                In this chapter, you've learned about the core concepts of Object-Oriented Programming (OOP), including classes, objects, inheritance, polymorphism, encapsulation, and abstraction. These principles are crucial for writing clean, modular, and reusable code in Java.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
           
        </div>
    </div>
    @endsection
</body>

</html>