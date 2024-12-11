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
                <li><a href="/lessons/sfb/sfb01">Chapter 1: Introduction to the Spring Framework and its features</a></li>
                <li><a href="/lessons/sfb/sfb02">Chapter 2: Setting up a Spring Boot application</a></li>
                <li><a href="/lessons/sfb/sfb03">Chapter 3: Working with Spring Dependency Injection (DI)</a></li>
                <li class="active"><a href="/lessons/sfb/sfb04">Chapter 4: Creating RESTful APIs with Spring Web</a></li>
                <li><a href="/lessons/sfb/sfb05">Chapter 5: Testing and deploying Spring applications</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Creating RESTful APIs with Spring Web</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the basics of REST architecture</li>
                <li>Learn how to create RESTful APIs using Spring Web</li>
                <li>Implement CRUD operations in a Spring Boot application</li>
                <li>Explore tools for testing APIs</li>
            </ul>

            <h2>1. Introduction to REST Architecture</h2>
            <p>
                REST (Representational State Transfer) is an architectural style for building scalable web services. It uses standard HTTP methods like GET, POST, PUT, and DELETE for communication. RESTful APIs are stateless and rely on resource representations such as JSON or XML.
            </p>

            <h2>2. Setting up a Spring Web Controller</h2>
            <p>
                To create RESTful APIs, you need to define a controller class annotated with <code>@RestController</code>. This class will handle HTTP requests and return appropriate responses.
            </p>
            <pre>
                @RestController
                @RequestMapping("/api")
                public class MyController {
                    
                    @GetMapping("/hello")
                    public String sayHello() {
                        return "Hello, REST API!";
                    }
                }
            </pre>

            <h2>3. Implementing CRUD Operations</h2>
            <p>
                A typical RESTful API provides CRUD operations. Here's an example of implementing these operations for a "Product" entity:
            </p>
            <ul>
                <li><strong>Create:</strong> Use <code>@PostMapping</code> to create a new resource.</li>
                <li><strong>Read:</strong> Use <code>@GetMapping</code> to fetch resources.</li>
                <li><strong>Update:</strong> Use <code>@PutMapping</code> to update an existing resource.</li>
                <li><strong>Delete:</strong> Use <code>@DeleteMapping</code> to delete a resource.</li>
            </ul>
            <pre>
                @RestController
                @RequestMapping("/api/products")
                public class ProductController {

                    @PostMapping
                    public Product createProduct(@RequestBody Product product) {
                        // Logic to save product
                        return product;
                    }

                    @GetMapping("/{id}")
                    public Product getProduct(@PathVariable Long id) {
                        // Logic to fetch product by ID
                        return new Product(id, "Example Product");
                    }

                    @PutMapping("/{id}")
                    public Product updateProduct(@PathVariable Long id, @RequestBody Product product) {
                        // Logic to update product
                        return product;
                    }

                    @DeleteMapping("/{id}")
                    public String deleteProduct(@PathVariable Long id) {
                        // Logic to delete product
                        return "Product deleted!";
                    }
                }
            </pre>

            <h2>4. Testing RESTful APIs</h2>
            <p>
                Tools like Postman, cURL, or Swagger can be used to test your APIs. They allow you to send HTTP requests and verify responses.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>




</html>