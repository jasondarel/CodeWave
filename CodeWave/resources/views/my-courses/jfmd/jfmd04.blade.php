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
                <li><a href="/lessons/jfmd/jfmd01">Chapter 1: Introduction to Android and Mobile App Development</a></li>
                <li><a href="/lessons/jfmd/jfmd02">Chapter 2: Setting up Android Studio and Creating Your First App</a></li>
                <li><a href="/lessons/jfmd/jfmd03">Chapter 3: Designing User Interfaces with XML and Java</a></li>
                <li class="active"><a href="/lessons/jfmd/jfmd04">Chapter 4: Handling User Input and Storing App Data</a></li>
                <li><a href="/lessons/jfmd/jfmd05">Chapter 5: Publishing Your Android App on the Google Play Store</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 4: Handling User Input and Storing App Data</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Learn how to capture user input in your Android app</li>
                <li>Understand different methods of storing app data</li>
                <li>Learn how to use SharedPreferences, SQLite, and files for data storage</li>
            </ul>

            <h2>1. Capturing User Input</h2>
            <p>
                In Android, capturing user input is done through various UI elements like `EditText`, `Button`, `RadioButton`, and more. These components allow users to enter or select data in the app.
            </p>
            <p>Here’s how to capture user input from an `EditText` and a `Button`:</p>
            <pre>
                &lt;EditText
                    android:id="@+id/editText"
                    android:layout_width="match_parent"
                    android:layout_height="wrap_content"
                    android:hint="Enter your name" /&gt;

                &lt;Button
                    android:id="@+id/submitButton"
                    android:layout_width="wrap_content"
                    android:layout_height="wrap_content"
                    android:text="Submit" /&gt;
            </pre>
            <p>
                In the Java code, you can get the value entered in the `EditText` when the button is clicked:
            </p>
            <pre>
                EditText editText = findViewById(R.id.editText);
                Button submitButton = findViewById(R.id.submitButton);

                submitButton.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        String inputText = editText.getText().toString();
                        Toast.makeText(MainActivity.this, "Hello, " + inputText, Toast.LENGTH_SHORT).show();
                    }
                });
            </pre>
            <p>
                This code will capture the text input by the user in the `EditText` and show a `Toast` message with the entered name.
            </p>

            <h2>2. Storing App Data</h2>
            <p>
                In Android, there are several ways to store app data persistently:
            </p>
            <ul>
                <li><strong>SharedPreferences:</strong> Used to store small amounts of primitive data (key-value pairs) like settings or user preferences.</li>
                <li><strong>SQLite Database:</strong> Used to store structured data in tables and allows more complex queries.</li>
                <li><strong>Internal Storage:</strong> Used for storing private files that belong to the app (e.g., images, documents).</li>
                <li><strong>External Storage:</strong> Used for storing public files that can be accessed by other apps.</li>
            </ul>

            <h2>3. Using SharedPreferences</h2>
            <p>
                SharedPreferences is a simple way to store key-value pairs. Here’s an example of how to store and retrieve data using SharedPreferences:
            </p>
            <pre>
                // Storing data
                SharedPreferences sharedPreferences = getSharedPreferences("MyPrefs", MODE_PRIVATE);
                SharedPreferences.Editor editor = sharedPreferences.edit();
                editor.putString("username", "John Doe");
                editor.apply();

                // Retrieving data
                String username = sharedPreferences.getString("username", "defaultName");
                Toast.makeText(this, "Welcome, " + username, Toast.LENGTH_SHORT).show();
            </pre>

            <h2>4. Using SQLite Database</h2>
            <p>
                SQLite allows you to store structured data in a relational database format. You can create, read, update, and delete records using SQL commands.
            </p>
            <p>
                To use SQLite, you need to create a subclass of `SQLiteOpenHelper` and override methods like `onCreate()` and `onUpgrade()`.
            </p>
            <pre>
                public class MyDatabaseHelper extends SQLiteOpenHelper {

                    private static final String DATABASE_NAME = "MyDatabase";
                    private static final int DATABASE_VERSION = 1;

                    public MyDatabaseHelper(Context context) {
                        super(context, DATABASE_NAME, null, DATABASE_VERSION);
                    }

                    @Override
                    public void onCreate(SQLiteDatabase db) {
                        String createTableQuery = "CREATE TABLE users (id INTEGER PRIMARY KEY, name TEXT)";
                        db.execSQL(createTableQuery);
                    }

                    @Override
                    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
                        db.execSQL("DROP TABLE IF EXISTS users");
                        onCreate(db);
                    }
                }
            </pre>
            <p>
                After creating the database helper class, you can insert, query, update, and delete data using methods like `insert()`, `query()`, and `delete()`.
            </p>

            <h2>5. Storing Data in Files</h2>
            <p>
                For storing non-relational data like images or documents, you can write to files in internal or external storage.
            </p>
            <pre>
                // Writing data to a file
                String filename = "myfile.txt";
                String fileContents = "Hello, Android!";
                FileOutputStream fos = openFileOutput(filename, Context.MODE_PRIVATE);
                fos.write(fileContents.getBytes());
                fos.close();

                // Reading data from a file
                FileInputStream fis = openFileInput(filename);
                int character;
                StringBuilder stringBuilder = new StringBuilder();
                while ((character = fis.read()) != -1) {
                    stringBuilder.append((char) character);
                }
                fis.close();
                String content = stringBuilder.toString();
                Toast.makeText(this, content, Toast.LENGTH_SHORT).show();
            </pre>

            <h2>6. Summary</h2>
            <p>
                In this chapter, you’ve learned how to capture user input using UI elements like `EditText` and `Button`. You also learned how to store app data using SharedPreferences, SQLite, and files. Understanding these methods will help you build apps that can save and retrieve user data efficiently.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Next Chapter</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>