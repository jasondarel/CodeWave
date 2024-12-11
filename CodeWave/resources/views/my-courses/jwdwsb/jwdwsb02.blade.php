<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 2: Building and Consuming RESTful APIs with Spring Boot</title>
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
                <li><a href="/lessons/jwdwsb/jwdwsb01">Chapter 1: Setting up a Spring Boot Project from Scratch</a></li>
                <li class="active"><a href="/lessons/jwdwsb/jwdwsb02">Chapter 2: Building and Consuming RESTful APIs</a></li>
                <li><a href="/lessons/jwdwsb/jwdwsb03">Chapter 3: Connecting Your Spring Boot Application to a Database</a></li>
                <li><a href="/lessons/jwdwsb/jwdwsb04">Chapter 4: Implementing Authentication and Authorization using Spring Security</a></li>
                <li><a href="/lessons/jwdwsb/jwdwsb05">Chapter 5: Testing Your Spring Boot Applications</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 2: Building and Consuming RESTful APIs with Spring Boot</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the principles of RESTful APIs</li>
                <li>Create RESTful endpoints in Spring Boot</li>
                <li>Consume RESTful APIs using Spring RestTemplate and WebClient</li>
                <li>Work with JSON data in Spring Boot</li>
            </ul>

            <h2>1. Introduction</h2>
            <p>
                In this chapter, we will explore how to build and consume RESTful APIs in Spring Boot. REST (Representational State Transfer) is an architectural style for designing networked applications. Spring Boot provides powerful tools for creating and consuming REST APIs.
            </p>

            <h2>2. Building a Simple RESTful API</h2>
            <p>
                To create a RESTful API in Spring Boot, we need to define a controller that handles HTTP requests. Let’s create a simple REST API that returns a list of products.
            </p>

            <pre>
                @RestController
                @RequestMapping("/api/products")
                public class ProductController {
                    @GetMapping
                    public List<Product> getProducts() {
                        return productService.getAllProducts();
                    }
                }
            </pre>
            <p>
                - <code>@RestController</code>: This annotation indicates that the class is a RESTful controller.
                - <code>@GetMapping</code>: This annotation maps HTTP GET requests to the <code>getProducts()</code> method.
            </p>

            <h2>3. Consuming RESTful APIs</h2>
            <p>
                To consume a REST API, we can use the <code>RestTemplate</code> class or the more modern <code>WebClient</code> class. Let’s see how to use RestTemplate to consume the API we just created.
            </p>

            <pre>
                @RestController
                public class ProductConsumerController {
                    private final RestTemplate restTemplate;

                    public ProductConsumerController(RestTemplate restTemplate) {
                        this.restTemplate = restTemplate;
                    }

                    @GetMapping("/products")
                    public List<Product> getProducts() {
                        String url = "http://localhost:8080/api/products";
                        ResponseEntity<List<Product>> response = restTemplate.exchange(url, HttpMethod.GET, null,
                                new ParameterizedTypeReference<List<Product>>() {});
                        return response.getBody();
                    }
                }
            </pre>
            <p>
                In the above example, we are calling the <code>GET</code> endpoint from another REST API to retrieve a list of products.
            </p>

            <h2>4. Working with JSON</h2>
            <p>
                Spring Boot handles JSON automatically when working with REST APIs. The response body is serialized to JSON format, and the request body can be deserialized from JSON into Java objects.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>