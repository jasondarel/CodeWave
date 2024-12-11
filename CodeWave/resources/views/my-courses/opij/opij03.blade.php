<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 3: Implementing Inheritance and Polymorphism</title>
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
                <li class="active"><a href="/lessons/opij/opij03">Chapter 3: Implementing Inheritance and Polymorphism</a></li>
                <li><a href="/lessons/opij/opij04">Chapter 4: Using Encapsulation and Access Modifiers</a></li>
                <li><a href="/lessons/opij/opij05">Chapter 5: Achieving Abstraction through Abstract Classes and Interfaces</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Implementing Inheritance and Polymorphism</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the concept of inheritance in Java</li>
                <li>Implement inheritance in Java classes</li>
                <li>Learn about method overriding and polymorphism</li>
                <li>Distinguish between compile-time and runtime polymorphism</li>
            </ul>

            <h2>1. Understanding the Concept of Inheritance</h2>
            <p>
                Inheritance is one of the core features of object-oriented programming (OOP). It allows a new class to inherit attributes and methods from an existing class.
            </p>
            <p>
                In Java, inheritance is implemented using the `extends` keyword. A subclass inherits the properties and behaviors of its superclass, and it can also have its own properties and methods.
            </p>
            <p>
                Inheritance promotes code reusability, making it easier to maintain and extend your code.
            </p>

            <h2>2. Implementing Inheritance in Java Classes</h2>
            <p>
                Here is an example of how inheritance works in Java:
            </p>
            <pre>
                <code>
                    class Animal {
                        String name;

                        public void speak() {
                            System.out.println("The animal makes a sound");
                        }
                    }

                    class Dog extends Animal {
                        // Dog class inherits from Animal

                        public void speak() {
                            System.out.println("The dog barks");
                        }
                    }

                    public class Main {
                        public static void main(String[] args) {
                            Dog dog = new Dog();
                            dog.speak();  // Outputs: The dog barks
                        }
                    }
                </code>
            </pre>
            <p>
                In this example, the `Dog` class extends the `Animal` class. The `Dog` class inherits the `name` field and the `speak` method from the `Animal` class. However, the `speak` method is overridden in the `Dog` class to provide a specific implementation.
            </p>

            <h2>3. Method Overriding and Polymorphism</h2>
            <p>
                Method overriding occurs when a subclass provides a specific implementation for a method that is already defined in its superclass.
            </p>
            <p>
                In Java, when a subclass overrides a method, the subclass version of the method is called at runtime, which is a key concept of polymorphism.
            </p>
            <p>
                Polymorphism allows you to treat objects of different classes in a uniform way. The most common form of polymorphism in Java is method overriding, where the subclass defines its own version of a method.
            </p>
            <pre>
                <code>
                    class Animal {
                        public void sound() {
                            System.out.println("Animal makes a sound");
                        }
                    }

                    class Dog extends Animal {
                        @Override
                        public void sound() {
                            System.out.println("Dog barks");
                        }
                    }

                    class Cat extends Animal {
                        @Override
                        public void sound() {
                            System.out.println("Cat meows");
                        }
                    }

                    public class Main {
                        public static void main(String[] args) {
                            Animal myAnimal = new Animal();
                            Animal myDog = new Dog();
                            Animal myCat = new Cat();

                            myAnimal.sound();  // Outputs: Animal makes a sound
                            myDog.sound();     // Outputs: Dog barks
                            myCat.sound();     // Outputs: Cat meows
                        }
                    }
                </code>
            </pre>
            <p>
                In this example, even though `myDog` and `myCat` are of type `Animal`, Java uses polymorphism to call the overridden `sound` method specific to the actual object type (i.e., `Dog` or `Cat`).
            </p>

            <h2>4. Compile-time and Runtime Polymorphism</h2>
            <p>
                Polymorphism in Java can be classified into two types:
            </p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><strong>Compile-time polymorphism (Method Overloading):</strong> This occurs when multiple methods have the same name but different parameters (e.g., method overloading).</li>
                <li><strong>Runtime polymorphism (Method Overriding):</strong> This occurs when a subclass provides a specific implementation for a method defined in its superclass (e.g., method overriding).</li>
            </ul>
            <p>
                Method overloading occurs when you create multiple methods with the same name but with different parameter types or numbers. It is resolved during compile time, hence the name compile-time polymorphism.
            </p>

            <h2>5. Example of Compile-time Polymorphism (Method Overloading)</h2>
            <pre>
                <code>
                    class Calculator {
                        public int add(int a, int b) {
                            return a + b;
                        }

                        public double add(double a, double b) {
                            return a + b;
                        }

                        public String add(String a, String b) {
                            return a + b;
                        }
                    }

                    public class Main {
                        public static void main(String[] args) {
                            Calculator calc = new Calculator();
                            System.out.println(calc.add(5, 10));     // Outputs: 15
                            System.out.println(calc.add(5.5, 10.5)); // Outputs: 16.0
                            System.out.println(calc.add("Hello", " World")); // Outputs: Hello World
                        }
                    }
                </code>
            </pre>
            <p>
                In this example, the `add` method is overloaded to handle different types of arguments: integers, doubles, and strings. The appropriate method is called based on the argument types passed.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>