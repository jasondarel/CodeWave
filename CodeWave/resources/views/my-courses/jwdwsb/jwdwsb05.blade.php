<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 5: Testing Your Spring Boot Applications</title>
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
                <li><a href="/lessons/jwdwsb/jwdwsb03">Chapter 3: Connecting Your Spring Boot Application to a Database</a></li>
                <li><a href="/lessons/jwdwsb/jwdwsb04">Chapter 4: Implementing Authentication and Authorization using Spring Security</a></li>
                <li class="active"><a href="/lessons/jwdwsb/jwdwsb05">Chapter 5: Testing Your Spring Boot Applications</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Testing Your Spring Boot Applications</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the importance of testing in Spring Boot applications</li>
                <li>Learn how to write unit tests using JUnit 5</li>
                <li>Perform integration testing with Spring Boot Test</li>
                <li>Test the repository layer, service layer, and controllers</li>
            </ul>

            <h2>1. Writing Unit Tests with JUnit 5</h2>
            <p>
                Unit tests ensure the functionality of your application at the lowest level. In this section, we will learn how to write unit tests using JUnit 5 for various layers of your application.
            </p>
            <p>Here is an example of a simple unit test for a service class:</p>
            <pre>
                <code>
                    <a>ExtendWith(SpringExtension.class)</a>
                    @SpringBootTest
                    public class UserServiceTest {

                        @Autowired
                        private UserService userService;

                        @MockBean
                        private UserRepository userRepository;

                        @Test
                        public void testFindUserByUsername() {
                            User user = new User("john_doe", "john.doe@example.com");
                            Mockito.when(userRepository.findByUsername("john_doe")).thenReturn(Optional.of(user));

                            User foundUser = userService.findUserByUsername("john_doe");
                            Assertions.assertEquals("john.doe@example.com", foundUser.getEmail());
                        }
                    }
                </code>
            </pre>

            <h2>2. Writing Integration Tests</h2>
            <p>
                Integration tests ensure that the various parts of your application work together as expected. To write integration tests, you can use the `@SpringBootTest` annotation to load the full application context.
            </p>
            <pre>
                <code>
                    @SpringBootTest
                    public class UserControllerTest {

                        @Autowired
                        private MockMvc mockMvc;

                        @Test
                        public void testGetUserByUsername() throws Exception {
                            mockMvc.perform(get("/api/users/john_doe"))
                                   .andExpect(status().isOk())
                                   .andExpect(jsonPath("$.username").value("john_doe"));
                        }
                    }
                </code>
            </pre>

            <h2>3. Testing the Repository Layer</h2>
            <p>
                The repository layer is the part of your application that interacts with the database. You can test it using `@DataJpaTest`, which will load only the repository and database-related beans.
            </p>
            <pre>
                <code>
                    @DataJpaTest
                    public class UserRepositoryTest {

                        @Autowired
                        private UserRepository userRepository;

                        @Test
                        public void testFindByUsername() {
                            User user = new User("john_doe", "john.doe@example.com");
                            userRepository.save(user);

                            Optional<User> foundUser = userRepository.findByUsername("john_doe");
                            Assertions.assertTrue(foundUser.isPresent());
                            Assertions.assertEquals("john.doe@example.com", foundUser.get().getEmail());
                        }
                    }
                </code>
            </pre>

            <h2>4. Running Tests</h2>
            <p>
                You can run your tests using Maven or Gradle. For Maven, use the following command:
            </p>
            <pre>
                mvn test
            </pre>
            <p>
                For Gradle, use the following command:
            </p>
            <pre>
                gradle test
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>