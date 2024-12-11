<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 3: Connecting Your Spring Boot Application to a Database</title>
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
                <li><a href="/lessons/jwdwsb/jwdwsb02">Chapter 2: Building and Consuming RESTful APIs</a></li>
                <li class="active"><a href="/lessons/jwdwsb/jwdwsb03">Chapter 3: Connecting Your Spring Boot Application to a Database</a></li>
                <li><a href="/lessons/jwdwsb/jwdwsb04">Chapter 4: Implementing Authentication and Authorization using Spring Security</a></li>
                <li><a href="/lessons/jwdwsb/jwdwsb05">Chapter 5: Testing Your Spring Boot Applications</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Connecting Your Spring Boot Application to a Database</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to configure a Spring Boot application with a database</li>
                <li>Understand how to use Spring Data JPA to interact with the database</li>
                <li>Create and manage database entities using JPA</li>
                <li>Perform CRUD operations with Spring Data JPA</li>
            </ul>

            <h2>1. Introduction</h2>
            <p>
                In this chapter, we will learn how to connect a Spring Boot application to a database using Spring Data JPA. Spring Boot supports various databases, including MySQL, PostgreSQL, and H2. We will use MySQL for this example.
            </p>

            <h2>2. Setting Up Database Configuration</h2>
            <p>
                The first step is to configure the database connection in your application. You need to update the <code>application.properties</code> file with the necessary details for your database connection.
            </p>

            <pre>
                spring.datasource.url=jdbc:mysql://localhost:3306/your_database
                spring.datasource.username=root
                spring.datasource.password=your_password
                spring.jpa.hibernate.ddl-auto=update
                spring.jpa.properties.hibernate.dialect=org.hibernate.dialect.MySQL5Dialect
            </pre>

            <h2>3. Adding Dependencies for JPA</h2>
            <p>
                Make sure to add the necessary dependencies for JPA and MySQL in your <code>pom.xml</code> file if you are using Maven, or in your <code>build.gradle</code> file if you are using Gradle.
            </p>

            For Maven:
            <pre>
                <dependency>
                    <groupId>org.springframework.boot</groupId>
                    <artifactId>spring-boot-starter-data-jpa</artifactId>
                </dependency>
                <dependency>
                    <groupId>mysql</groupId>
                    <artifactId>mysql-connector-java</artifactId>
                </dependency>
            </pre>

            For Gradle:
            <pre>
                implementation 'org.springframework.boot:spring-boot-starter-data-jpa'
                implementation 'mysql:mysql-connector-java'
            </pre>

            <h2>4. Creating a Database Entity</h2>
            <p>
                Now, let's create a database entity class that will map to a table in the database. We will create a simple <code>Product</code> entity.
            </p>

            <pre>
                @Entity
                <p>"@"Table(name = "products")</p>
                public class Product {
                    @Id
                    GeneratedValue(strategy = GenerationType.IDENTITY)
                    private Long id;

                    Column(nullable = false)
                    private String name;

                    private double price;

                    // Getters and setters
                }
            </pre>

            <p>
                - <code>@Entity</code>: Marks the class as a JPA entity.
                - <code>Table(name = "products")</code>: Specifies the table name in the database.
                - <code>@Id</code>: Denotes the primary key field.
                - <code>GeneratedValue(strategy = GenerationType.IDENTITY)</code>: Specifies how the primary key is generated.
            </p>

            <h2>5. Creating a Repository</h2>
            <p>
                Spring Data JPA provides a <code>JpaRepository</code> interface, which allows us to perform CRUD operations without writing any SQL queries. Let’s create a repository for the <code>Product</code> entity.
            </p>

            <pre>
                public interface ProductRepository extends JpaRepository<Product, Long> {
                }
            </pre>

            <h2>6. Performing CRUD Operations</h2>
            <p>
                Spring Data JPA allows you to easily perform CRUD operations using the repository. Here’s how you can save, find, and delete entities.
            </p>

            - **Save a Product**:
            <pre>
                @Autowired
                private ProductRepository productRepository;

                public Product saveProduct(Product product) {
                    return productRepository.save(product);
                }
            </pre>

            - **Find a Product**:
            <pre>
                public Product findProduct(Long id) {
                    return productRepository.findById(id).orElse(null);
                }
            </pre>

            - **Delete a Product**:
            <pre>
                public void deleteProduct(Long id) {
                    productRepository.deleteById(id);
                }
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>