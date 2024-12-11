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
                <li class="active"><a href="/lessons/app/app01">Chapter 1: Advanced Object-Oriented Programming Techniques</a></li>
                <li><a href="/lessons/app/app02">Chapter 2: Functional Programming Concepts and Tools in Python</a></li>
                <li><a href="/lessons/app/app03">Chapter 3: Working with Decorators, Context Managers, and Generators</a></li>
                <li><a href="/lessons/app/app04">Chapter 4: Concurrency and Parallelism with Threading and Multiprocessing</a></li>
                <li><a href="/lessons/app/app05">Chapter 5: Optimizing Performance and Memory Management in Python</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 1: Advanced Object-Oriented Programming Techniques</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand advanced concepts of object-oriented programming (OOP) in Python</li>
                <li>Learn about metaclasses and how to use them effectively</li>
                <li>Explore the use of abstract base classes (ABCs) for interface design</li>
                <li>Implement advanced design patterns in Python</li>
            </ul>

            <h2>1. Advanced OOP Concepts</h2>
            <p>
                Object-oriented programming in Python goes beyond classes and objects. Advanced techniques include using metaclasses to control the creation of classes, implementing abstract base classes to define interfaces, and applying design patterns like singleton or factory.
            </p>

            <h2>2. Metaclasses</h2>
            <p>
                A metaclass is a "class of a class" that defines how a class behaves. You can use metaclasses to customize class creation. For example:
            </p>
            <pre>
                class Meta(type):
                    def __new__(cls, name, bases, dct):
                        dct['custom_attr'] = "I'm added by a metaclass!"
                        return super().__new__(cls, name, bases, dct)

                class MyClass(metaclass=Meta):
                    pass

                print(MyClass.custom_attr)
            </pre>

            <h2>3. Abstract Base Classes (ABCs)</h2>
            <p>
                Abstract base classes provide a way to define methods that must be implemented in any concrete subclass. Use the `abc` module to create ABCs:
            </p>
            <pre>
                from abc import ABC, abstractmethod

                class Shape(ABC):
                    @abstractmethod
                    def area(self):
                        pass

                class Circle(Shape):
                    def __init__(self, radius):
                        self.radius = radius

                    def area(self):
                        return 3.14 * self.radius ** 2
            </pre>

            <h2>4. Design Patterns</h2>
            <p>
                Python's flexibility makes it easy to implement various design patterns. For instance, a singleton pattern can ensure that a class has only one instance:
            </p>
            <pre>
                class Singleton:
                    _instance = None

                    def __new__(cls, *args, **kwargs):
                        if not cls._instance:
                            cls._instance = super().__new__(cls, *args, **kwargs)
                        return cls._instance

                obj1 = Singleton()
                obj2 = Singleton()
                print(obj1 is obj2)  # True
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>


</html>