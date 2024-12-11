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
                <li><a href="/lessons/sfb/sfb01">Chapter 1: Introduction to the Spring Framework and its features</a></li>
                <li><a href="/lessons/sfb/sfb02">Chapter 2: Setting up a Spring Boot application</a></li>
                <li class="active"><a href="/lessons/sfb/sfb03">Chapter 3: Working with Spring Dependency Injection (DI)</a></li>
                <li><a href="/lessons/sfb/sfb04">Chapter 4: Creating RESTful APIs with Spring Web</a></li>
                <li><a href="/lessons/sfb/sfb05">Chapter 5: Testing and deploying Spring applications</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Working with Spring Dependency Injection (DI)</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the concept of Dependency Injection (DI)</li>
                <li>Learn how DI simplifies application design and testing</li>
                <li>Explore different types of DI in Spring</li>
                <li>Implement DI in a Spring Boot application</li>
            </ul>

            <h2>1. What is Dependency Injection?</h2>
            <p>
                Dependency Injection (DI) is a design pattern that allows objects to define their dependencies without creating them explicitly. Instead, the dependencies are injected at runtime by an external framework, such as Spring. DI promotes loose coupling, which improves modularity and testability.
            </p>

            <h2>2. Types of Dependency Injection</h2>
            <p>
                Spring supports several types of Dependency Injection:
            </p>
            <ul>
                <li><strong>Constructor Injection:</strong> Dependencies are provided through the class constructor.</li>
                <li><strong>Setter Injection:</strong> Dependencies are set using public setter methods.</li>
                <li><strong>Field Injection:</strong> Dependencies are directly injected into the fields using annotations like <code>@Autowired</code>.</li>
            </ul>

            <h2>3. Implementing DI in Spring Boot</h2>
            <p>
                To implement DI in a Spring Boot application, follow these steps:
            </p>
            <ul>
                <li>Create a service class and annotate it with <code>@Service</code>:</li>
            </ul>
            <pre>
                @Service
                public class MyService {
                    public String getMessage() {
                        return "Hello, Dependency Injection!";
                    }
                }
            </pre>
            <ul>
                <li>Inject the service into a controller using <code>@Autowired</code>:</li>
            </ul>
            <pre>
                @RestController
                public class MyController {
                    
                    private final MyService myService;

                    @Autowired
                    public MyController(MyService myService) {
                        this.myService = myService;
                    }

                    @GetMapping("/message")
                    public String getMessage() {
                        return myService.getMessage();
                    }
                }
            </pre>

            <h2>4. Benefits of DI</h2>
            <p>
                Using DI in your application provides the following benefits:
            </p>
            <ul>
                <li>Reduces boilerplate code by handling object creation and lifecycle management</li>
                <li>Improves testability by allowing easy mocking of dependencies</li>
                <li>Encourages modular design by promoting loose coupling</li>
            </ul>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>



</html>