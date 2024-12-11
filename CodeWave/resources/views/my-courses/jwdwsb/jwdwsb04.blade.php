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
                <li><a href="/lessons/jwdwsb/jwdwsb01">Chapter 1: Setting up a Spring Boot Project from Scratch</a></li>
                <li><a href="/lessons/jwdwsb/jwdwsb02">Chapter 2: Building and Consuming RESTful APIs</a></li>
                <li><a href="/lessons/jwdwsb/jwdwsb03">Chapter 3: Connecting Your Spring Boot Application to a Database</a></li>
                <li class="active"><a href="/lessons/jwdwsb/jwdwsb04">Chapter 4: Implementing Authentication and Authorization using Spring Security</a></li>
                <li><a href="/lessons/jwdwsb/jwdwsb05">Chapter 5: Testing Your Spring Boot Applications</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Implementing Authentication and Authorization using Spring Security</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the basics of Spring Security</li>
                <li>Learn how to configure Spring Security for authentication and authorization</li>
                <li>Implement login and registration functionality</li>
                <li>Apply role-based access control to protect endpoints</li>
            </ul>

            <h2>1. Adding Spring Security Dependency</h2>
            <p>
                To start using Spring Security, you need to add the following dependency to your project. Here’s how to include it in your `pom.xml` (for Maven) or `build.gradle` (for Gradle):
            </p>

            <h3>For Maven:</h3>
            <pre>
                <code>
                    &lt;dependency&gt;
                        &lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
                        &lt;artifactId&gt;spring-boot-starter-security&lt;/artifactId&gt;
                    &lt;/dependency&gt;
                </code>
            </pre>

            <h3>For Gradle:</h3>
            <pre>
                <code>
                    implementation 'org.springframework.boot:spring-boot-starter-security'
                </code>
            </pre>

            <h2>2. Basic Authentication Setup</h2>
            <p>
                After adding Spring Security, it will automatically secure all HTTP endpoints with basic authentication. You can configure the default user credentials in the `application.properties` file:
            </p>
            <pre>
                <code>
                    spring.security.user.name=admin
                    spring.security.user.password=adminpassword
                </code>
            </pre>

            <h2>3. Configuring Web Security</h2>
            <p>
                You can configure which endpoints are secured and which are publicly accessible by customizing `WebSecurityConfigurerAdapter`. For example, to allow public access to the login page and restrict access to others:
            </p>
            <pre>
                <code>
                    @Configuration
                    @EnableWebSecurity
                    public class WebSecurityConfig extends WebSecurityConfigurerAdapter {
                        @Override
                        protected void configure(HttpSecurity http) throws Exception {
                            http
                                .authorizeRequests()
                                    .antMatchers("/login").permitAll()
                                    .anyRequest().authenticated()
                                .and()
                                .formLogin().loginPage("/login").permitAll()
                                .and()
                                .logout().permitAll();
                        }
                    }
                </code>
            </pre>

            <h2>4. Role-based Access Control</h2>
            <p>
                You can implement role-based access control to restrict access to certain pages based on the user’s role. For example, you can restrict access to the admin dashboard:
            </p>
            <pre>
                <code>
                    @Configuration
                    @EnableWebSecurity
                    public class WebSecurityConfig extends WebSecurityConfigurerAdapter {
                        @Override
                        protected void configure(HttpSecurity http) throws Exception {
                            http
                                .authorizeRequests()
                                    .antMatchers("/admin/**").hasRole("ADMIN")
                                    .anyRequest().authenticated()
                                .and()
                                .formLogin().permitAll();
                        }
                    }
                </code>
            </pre>

            <h2>5. Creating a Registration Page</h2>
            <p>
                To allow users to register, you need to create a registration form. Here’s a simple controller method for rendering the registration page:
            </p>
            <pre>
                <code>
                    @Controller
                    public class RegistrationController {
                        @GetMapping("/register")
                        public String showRegistrationForm() {
                            return "register";
                        }

                        @PostMapping("/register")
                        public String registerUser(@ModelAttribute User user) {
                            // Save user and handle registration logic
                            return "redirect:/login";
                        }
                    }
                </code>
            </pre>

            <h2>6. Running the Application</h2>
            <p>
                Once your application is configured, you can run it using the following command:
            </p>
            <pre>
                mvn spring-boot:run
            </pre>
            <p>
                Or, if you're using Gradle:
            </p>
            <pre>
                gradle bootRun
            </pre>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>