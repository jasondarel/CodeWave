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
                <li><a href="/lessons/jfmd/jfmd01">Chapter 1: Introduction to Android and Mobile App Development</a></li>
                <li><a href="/lessons/jfmd/jfmd02">Chapter 2: Setting up Android Studio and Creating Your First App</a></li>
                <li class="active"><a href="/lessons/jfmd/jfmd03">Chapter 3: Designing User Interfaces with XML and Java</a></li>
                <li><a href="/lessons/jfmd/jfmd04">Chapter 4: Handling User Input and Storing App Data</a></li>
                <li><a href="/lessons/jfmd/jfmd05">Chapter 5: Publishing Your Android App on the Google Play Store</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 3: Designing User Interfaces with XML and Java</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the basics of XML and its role in Android development</li>
                <li>Learn how to design user interfaces using XML</li>
                <li>Manipulate UI components programmatically using Java</li>
            </ul>

            <h2>1. Introduction to XML Layouts</h2>
            <p>
                In Android, XML (Extensible Markup Language) is used to define user interfaces. The layout files are located in the "res/layout" directory and describe the structure of your app's UI. The most common XML elements used for designing UIs in Android are:
            </p>
            <ul>
                <li><strong>LinearLayout:</strong> Arranges UI elements in a single row or column.</li>
                <li><strong>RelativeLayout:</strong> Allows UI elements to be positioned relative to each other.</li>
                <li><strong>ConstraintLayout:</strong> A flexible layout for positioning views with more precision.</li>
                <li><strong>TextView:</strong> Displays text to the user.</li>
                <li><strong>EditText:</strong> Allows users to enter text.</li>
                <li><strong>Button:</strong> Triggers actions when clicked.</li>
            </ul>

            <h2>2. Creating a Simple Layout</h2>
            <p>
                Let's create a simple UI layout. Open your app's `res/layout/activity_main.xml` file and replace the existing code with the following:
            </p>
            <pre>
                &lt;LinearLayout xmlns:android="http://schemas.android.com/apk/res/android"
                    android:layout_width="match_parent"
                    android:layout_height="match_parent"
                    android:orientation="vertical"
                    android:padding="16dp"&gt;

                    &lt;TextView
                        android:id="@+id/textView"
                        android:layout_width="wrap_content"
                        android:layout_height="wrap_content"
                        android:text="Hello, Android!"
                        android:textSize="24sp" /&gt;

                    &lt;Button
                        android:id="@+id/button"
                        android:layout_width="wrap_content"
                        android:layout_height="wrap_content"
                        android:text="Click Me" /&gt;

                &lt;/LinearLayout&gt;
            </pre>
            <p>
                This layout consists of a `TextView` to display a message and a `Button` that the user can click.
            </p>

            <h2>3. Interacting with UI Components Using Java</h2>
            <p>
                Once you’ve created the layout, you need to interact with the UI components programmatically using Java. In the `MainActivity.java` file, you can manipulate the `TextView` and `Button` like this:
            </p>
            <pre>
                import android.os.Bundle;
                import android.view.View;
                import android.widget.Button;
                import android.widget.TextView;

                public class MainActivity extends AppCompatActivity {

                    @Override
                    protected void onCreate(Bundle savedInstanceState) {
                        super.onCreate(savedInstanceState);
                        setContentView(R.layout.activity_main);

                        TextView textView = findViewById(R.id.textView);
                        Button button = findViewById(R.id.button);

                        button.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                textView.setText("Button Clicked!");
                            }
                        });
                    }
                }
            </pre>
            <p>
                In this example, when the button is clicked, the text in the `TextView` changes to "Button Clicked!".
            </p>

            <h2>4. Customizing UI Elements</h2>
            <p>
                You can also customize UI elements by setting attributes in the XML layout or programmatically in Java. For instance, you can change the background color of a button or modify the font size of the text.
            </p>
            <p>
                In XML:
            </p>
            <pre>
                &lt;Button
                    android:id="@+id/button"
                    android:layout_width="wrap_content"
                    android:layout_height="wrap_content"
                    android:text="Click Me"
                    android:background="#FF6347" /&gt;
            </pre>
            <p>
                In Java:
            </p>
            <pre>
                button.setBackgroundColor(Color.parseColor("#FF6347"));
            </pre>

            <h2>5. Using Other Layouts</h2>
            <p>
                Android supports several other types of layouts that can help you design your app's UI. For example:
            </p>
            <ul>
                <li><strong>RelativeLayout:</strong> Position elements relative to each other.</li>
                <li><strong>GridLayout:</strong> Organizes UI components in a grid-like structure.</li>
            </ul>
            <p>
                Depending on your design needs, you can choose the appropriate layout to make your app’s UI more efficient and user-friendly.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>