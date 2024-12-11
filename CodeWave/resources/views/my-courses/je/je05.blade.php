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
                <li><a href="/lessons/je/je01">Chapter 1: Understanding JavaScript syntax and data types</a></li>
                <li><a href="/lessons/je/je02">Chapter 2: Writing functions and using variables</a></li>
                <li><a href="/lessons/je/je03">Chapter 3: Control flow and loops in JavaScript</a></li>
                <li><a href="/lessons/je/je04">Chapter 4: Handling events and user interactions</a></li>
                <li class="active"><a href="/lessons/je/je05">Chapter 5: Working with arrays and objects in JavaScript</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Working with arrays and objects in JavaScript</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the concept of arrays and how to use them</li>
                <li>Learn how to create and manipulate objects in JavaScript</li>
                <li>Learn how to loop through arrays and objects</li>
                <li>Understand array methods like `map()`, `filter()`, and `reduce()`</li>
            </ul>

            <h2>1. Working with Arrays</h2>
            <p>
                An array is a data structure that stores a collection of items in a single variable. In JavaScript, arrays can hold different data types like strings, numbers, and even other arrays.
            </p>

            <h3>Creating an Array</h3>
            <pre>
                let fruits = ['Apple', 'Banana', 'Cherry'];
            </pre>

            <h3>Accessing Array Elements</h3>
            <pre>
                let firstFruit = fruits[0];  // 'Apple'
            </pre>

            <h3>Array Methods</h3>
            <p>Common methods to work with arrays:</p>
            <ul>
                <li><strong>push()</strong>: Adds an item to the end of the array.</li>
                <pre>
                    fruits.push('Orange');
                </pre>
                <li><strong>pop()</strong>: Removes the last item from the array.</li>
                <pre>
                    fruits.pop();
                </pre>
                <li><strong>shift()</strong>: Removes the first item from the array.</li>
                <pre>
                    fruits.shift();
                </pre>
                <li><strong>unshift()</strong>: Adds an item to the beginning of the array.</li>
                <pre>
                    fruits.unshift('Strawberry');
                </pre>
            </ul>

            <h2>2. Working with Objects</h2>
            <p>
                Objects are collections of key-value pairs. In JavaScript, objects are used to store related data and can contain properties and methods.
            </p>

            <h3>Creating an Object</h3>
            <pre>
                let person = {
                    name: 'John',
                    age: 30,
                    greet: function() {
                        console.log('Hello!');
                    }
                };
            </pre>

            <h3>Accessing Object Properties</h3>
            <pre>
                let personName = person.name;  // 'John'
                let personAge = person['age'];  // 30
            </pre>

            <h2>3. Looping through Arrays and Objects</h2>
            <h3>Looping through an Array</h3>
            <pre>
                fruits.forEach(function(fruit) {
                    console.log(fruit);
                });
            </pre>

            <h3>Looping through an Object</h3>
            <pre>
                for (let key in person) {
                    console.log(key + ': ' + person[key]);
                }
            </pre>

            <h2>4. Array Methods</h2>
            <p>JavaScript provides powerful methods to manipulate arrays:</p>
            <ul>
                <li><strong>map()</strong>: Creates a new array by applying a function to each element.</li>
                <pre>
                    let lengths = fruits.map(function(fruit) {
                        return fruit.length;
                    });
                </pre>
                <li><strong>filter()</strong>: Creates a new array with all elements that pass the test implemented by the provided function.</li>
                <pre>
                    let longFruits = fruits.filter(function(fruit) {
                        return fruit.length > 5;
                    });
                </pre>
                <li><strong>reduce()</strong>: Executes a reducer function on each element of the array, resulting in a single output.</li>
                <pre>
                    let totalLength = fruits.reduce(function(total, fruit) {
                        return total + fruit.length;
                    }, 0);
                </pre>
            </ul>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>