<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layout')
    @section('content')
    <div class="titles font-bold mb-4 fs-3">
        <h1>Courses List</h1>
    </div>
    
    <div class="allcontent">
        <h2>Python Course</h2>
        <div class="courses d-flex align-content-start flex-wrap gap-4">
            
            @foreach ([
                ['title' => 'Advanced CSS Techniques', 'description' => 'Take your CSS skills to the next level with animations, transitions, and modern layout techniques.', 'image' => 'https://www.htmlecsspro.com/uploads/images/2018/03/aplicando-estilos-css-1521410533.png'],
                ['title' => 'Intro to Machine Learning', 'description' => 'Learn the basics of machine learning and build simple models to predict data trends.', 'image' => 'https://image.web.id/images/Machine-Learning.jpg'],
                ['title' => 'Version Control with Git', 'description' => 'Master the fundamentals of Git for version control and collaboration.', 'image' => 'https://ositcom.com/static/images/images/git-blog-header_1.png'],
                ['title' => 'Version Control with Git', 'description' => 'Master the fundamentals of Git for version control and collaboration.', 'image' => 'https://ositcom.com/static/images/images/git-blog-header_1.png'],
                ['title' => 'Version Control with Git', 'description' => 'Master the fundamentals of Git for version control and collaboration.', 'image' => 'https://ositcom.com/static/images/images/git-blog-header_1.png']
                ] 
                as $course)
                <div class="card" style="width: 18rem;">
                    <img src="{{ $course['image'] }}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column justify-content-between gap-3">
                        <h5 class="card-title">{{ $course['title'] }}</h5>
                        <p class="card-text">{{ $course['description'] }}</p>
                        <a href="#" class="btn btn-primary">Enroll</a>
                    </div>
                </div>
            @endforeach
        </div>
        
        <h2 class="mt-5">Java Course</h2>
        <div class="courses d-flex align-content-start flex-wrap gap-4">
            
            @foreach ([
                ['title' => 'Java Fundamentals for Beginners','description' => 'Learn the basics of Java programming, including syntax, variables, and loops.','image' => 'https://www.learnjavaonline.org/img/java-logo.png'],
                ['title' => 'Object-Oriented Programming in Java','description' => 'Dive deep into OOP principles with Java, including classes, inheritance, and polymorphism.','image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e1/JAVA.jpg'],
                ['title' => 'Java for Web Development','description' => 'Explore Java frameworks like Spring and build web applications efficiently.','image' => 'https://www.javadevjournal.com/wp-content/uploads/2020/03/java-web-app.png'],
                ['title' => 'Java Concurrency and Multithreading','description' => 'Master concurrent programming in Java to build scalable and efficient applications.','image' => 'https://miro.medium.com/max/640/1*jOpBsIfJ9Vd7OsjOs9hJMg.png'],
                ['title' => 'Java Testing and Debugging','description' => 'Learn advanced debugging techniques and testing frameworks like JUnit for robust applications.','image' => 'https://static.javatpoint.com/tutorial/advanced-java/images/advanced-java.png']
                ] 
                as $courses)
                <div class="card" style="width: 18rem;">
                    <img src="{{ $course['image'] }}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column justify-content-between gap-3">
                        <h5 class="card-title">{{ $courses['title'] }}</h5>
                        <p class="card-text">{{ $courses['description'] }}</p>
                        <a href="#" class="btn btn-primary">Enroll</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    

    @endsection
</body>
</html>