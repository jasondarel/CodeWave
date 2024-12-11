<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 5</title>
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
                <li><a href="/lessons/sfb/sfb04">Chapter 4: Creating RESTful APIs with Spring Web</a></li>
                <li class="active"><a href="/lessons/sfb/sfb05">Chapter 5: Testing and deploying Spring applications</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Testing and Deploying Spring Applications</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the importance of testing in software development</li>
                <li>Learn how to write unit and integration tests in Spring</li>
                <li>Explore tools for deploying Spring applications</li>
                <li>Deploy a Spring Boot application to a cloud platform</li>
            </ul>

            <h2>1. Importance of Testing</h2>
            <p>
                Testing ensures the reliability and quality of your application. It helps identify bugs early in the development process and maintains confidence during refactoring or adding new features.
            </p>

            <h2>2. Writing Tests in Spring</h2>
            <p>
                Spring Boot provides excellent support for writing unit and integration tests using frameworks like JUnit and Mockito. Below is an example of a simple test for a service layer:
            </p>
            <pre>
                @SpringBootTest
                public class ProductServiceTest {

                    @Autowired
                    private ProductService productService;

                    @Test
                    public void testGetProductById() {
                        Product product = productService.getProductById(1L);
                        assertNotNull(product);
                        assertEquals("Example Product", product.getName());
                    }
                }
            </pre>
            <p>
                To test RESTful APIs, you can use Spring's <code>MockMvc</code> utility:
            </p>
            <pre>
                WebMvcTest(ProductController.class)
                public class ProductControllerTest {

                    @Autowired
                    private MockMvc mockMvc;

                    @Test
                    public void testGetProduct() throws Exception {
                        mockMvc.perform(get("/api/products/1"))
                               .andExpect(status().isOk())
                               .andExpect(jsonPath("$.name").value("Example Product"));
                    }
                }
            </pre>

            <h2>3. Deploying Spring Applications</h2>
            <p>
                Spring Boot simplifies the deployment process by packaging the application as an executable JAR or WAR. This enables you to deploy the application in various environments, including:
            </p>
            <ul>
                <li><strong>Local Server:</strong> Run the application locally using <code>java -jar</code>.</li>
                <li><strong>Application Server:</strong> Deploy the WAR file to servers like Tomcat or JBoss.</li>
                <li><strong>Cloud Platforms:</strong> Deploy the application to platforms like AWS, Heroku, or Google Cloud.</li>
            </ul>

            <h2>4. Deploying to a Cloud Platform</h2>
            <p>
                To deploy a Spring Boot application to Heroku, follow these steps:
            </p>
            <ol>
                <li>Ensure your application is packaged as a JAR file.</li>
                <li>Install the Heroku CLI and log in to your account.</li>
                <li>Create a new Heroku application using the CLI.</li>
                <li>Push the code to Heroku using Git commands.</li>
                <li>Access your deployed application via the provided Heroku URL.</li>
            </ol>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>
        </div>
    </div>

    @endsection
</body>





</html>