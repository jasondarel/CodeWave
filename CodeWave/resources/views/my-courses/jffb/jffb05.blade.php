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
                <li><a href="/lessons/jffb/jffb01">Chapter 1: Understanding Java Syntax and Data Types</a></li>
                <li><a href="/lessons/jffb/jffb02">Chapter 2: Writing Basic Java Programs and Functions</a></li>
                <li><a href="/lessons/jffb/jffb03">Chapter 3: Control Flow and Decision-Making in Java</a></li>
                <li><a href="/lessons/jffb/jffb04">Chapter 4: Introduction to Object-Oriented Programming Concepts</a></li>
                <li class="active"><a href="/lessons/jffb/jffb05">Chapter 5: Working with Arrays, Lists, and Other Data Structures in Java</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Working with Arrays, Lists, and Other Data Structures in Java</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the concept of arrays in Java</li>
                <li>Learn how to create and manipulate arrays</li>
                <li>Work with lists and other data structures like ArrayList</li>
                <li>Learn how to perform operations on collections of data</li>
            </ul>

            <h2>1. Arrays in Java</h2>
            <p>
                An array is a container object that holds a fixed number of values of a single type. Arrays are used to store multiple values in a single variable, instead of declaring separate variables for each value. Here's an example of an array in Java:
            </p>
            <pre><code>int[] numbers = {1, 2, 3, 4, 5};
System.out.println(numbers[2]);  // Output: 3</code></pre>
            <p>
                In this example, the array <code>numbers</code> contains five integers, and we access the third element (index 2) to print its value.
            </p>

            <h2>2. Working with Multidimensional Arrays</h2>
            <p>
                Java also supports multidimensional arrays. A two-dimensional array can be used to represent a matrix. Here's an example:
            </p>
            <pre><code>int[][] matrix = {
    {1, 2, 3},
    {4, 5, 6},
    {7, 8, 9}
};
System.out.println(matrix[1][2]);  // Output: 6</code></pre>
            <p>
                This example demonstrates a 2D array with three rows and three columns. The value <code>matrix[1][2]</code> accesses the element at the second row and third column.
            </p>

            <h2>3. ArrayList in Java</h2>
            <p>
                <code>ArrayList</code> is a resizable array implementation of the <code>List</code> interface. Unlike arrays, ArrayLists can grow dynamically as elements are added or removed. Here's an example of using an ArrayList:
            </p>
            <pre><code>import java.util.ArrayList;

ArrayList<String> fruits = new ArrayList<>();
fruits.add("Apple");
fruits.add("Banana");
fruits.add("Cherry");
System.out.println(fruits.get(1));  // Output: Banana</code></pre>
            <p>
                In this example, an <code>ArrayList</code> is created, and elements are added using the <code>add()</code> method. The <code>get()</code> method retrieves an element by its index.
            </p>

            <h2>4. Iterating Through Arrays and ArrayLists</h2>
            <p>
                You can use loops to iterate over arrays and ArrayLists. Here's how you can iterate over an array:
            </p>
            <pre><code>int[] numbers = {1, 2, 3, 4, 5};
for (int i = 0; i < numbers.length; i++) {
    System.out.println(numbers[i]);
}</code></pre>
            <p>
                Similarly, to iterate over an ArrayList, you can use an enhanced for loop:
            </p>
            <pre><code>ArrayList<String> fruits = new ArrayList<>();
fruits.add("Apple");
fruits.add("Banana");
fruits.add("Cherry");
for (String fruit : fruits) {
    System.out.println(fruit);
}</code></pre>
            <p>
                Both methods will print the elements in the array or list one by one.
            </p>

            <h2>5. Other Data Structures</h2>
            <p>
                Java provides several other data structures such as <code>HashMap</code>, <code>HashSet</code>, and <code>LinkedList</code> for storing collections of data:
            </p>
            <pre><code>import java.util.HashMap;

HashMap<String, Integer> map = new HashMap<>();
map.put("Apple", 1);
map.put("Banana", 2);
map.put("Cherry", 3);
System.out.println(map.get("Banana"));  // Output: 2</code></pre>
            <p>
                A <code>HashMap</code> is a collection of key-value pairs. The <code>put()</code> method adds key-value pairs, and <code>get()</code> retrieves the value associated with a key.
            </p>

            <h2>6. Summary</h2>
            <p>
                In this chapter, you learned how to work with arrays, ArrayLists, and other data structures in Java. You also learned how to iterate over arrays and ArrayLists and how to use various data structures for different purposes in your Java programs.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>

        </div>
    </div>
    @endsection
</body>

</html>