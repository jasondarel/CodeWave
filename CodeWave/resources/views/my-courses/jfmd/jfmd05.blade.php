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
                <li><a href="/lessons/jfmd/jfmd01">Chapter 1: Introduction to Android and Mobile App Development</a></li>
                <li><a href="/lessons/jfmd/jfmd02">Chapter 2: Setting up Android Studio and Creating Your First App</a></li>
                <li><a href="/lessons/jfmd/jfmd03">Chapter 3: Designing User Interfaces with XML and Java</a></li>
                <li><a href="/lessons/jfmd/jfmd04">Chapter 4: Handling User Input and Storing App Data</a></li>
                <li class="active"><a href="/lessons/jfmd/jfmd05">Chapter 5: Publishing Your Android App on the Google Play Store</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Chapter 5: Publishing Your Android App on the Google Play Store</h1>

            <h2>Learning Objectives</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Understand the process of preparing your app for release</li>
                <li>Learn how to create a developer account on Google Play Store</li>
                <li>Learn how to upload and publish your app</li>
                <li>Understand the importance of app descriptions, screenshots, and versioning</li>
            </ul>

            <h2>1. Preparing Your App for Release</h2>
            <p>
                Before you can publish your app on the Google Play Store, you need to prepare your app for release. This involves a few key steps:
            </p>
            <ul>
                <li><strong>Cleaning your app:</strong> Remove any unnecessary files or debug code, and ensure that your app is ready for production.</li>
                <li><strong>Versioning:</strong> Ensure that your app has a version number and version code that will help you track different releases.</li>
                <li><strong>Signing your app:</strong> Android apps need to be signed with a private key to ensure that the app has not been tampered with. You’ll need to create a keystore file for signing the APK.</li>
            </ul>

            <h2>2. Creating a Developer Account</h2>
            <p>
                To publish your app on the Google Play Store, you need a Google Play Developer account. Here’s how you can create one:
            </p>
            <ol>
                <li>Go to the <a href="https://play.google.com/console/about/" target="_blank">Google Play Console</a>.</li>
                <li>Sign in with your Google account or create a new one if you don’t have one.</li>
                <li>Pay the one-time registration fee of $25 to create your developer account.</li>
                <li>Complete your account information, including the details for the developer profile (e.g., name, email, website).</li>
            </ol>

            <h2>3. Generating a Signed APK</h2>
            <p>
                After preparing your app and ensuring that it's ready for release, you need to generate a signed APK (Android Package) file. Follow these steps in Android Studio:
            </p>
            <ol>
                <li>Go to <strong>Build</strong> in the menu, then select <strong>Generate Signed Bundle / APK</strong>.</li>
                <li>Choose <strong>APK</strong> and click <strong>Next</strong>.</li>
                <li>Select your keystore file, provide your key alias, key password, and keystore password, and then click <strong>Next</strong>.</li>
                <li>Choose the build variant (e.g., release) and click <strong>Finish</strong>.</li>
            </ol>
            <p>
                Once this is done, Android Studio will generate the signed APK file, which you can upload to the Google Play Store.
            </p>

            <h2>4. Uploading Your App to Google Play Store</h2>
            <p>
                Now that you have your signed APK, it’s time to upload it to the Google Play Store:
            </p>
            <ol>
                <li>Go to the <a href="https://play.google.com/console" target="_blank">Google Play Console</a> and sign in with your developer account.</li>
                <li>Click on <strong>Create Application</strong> and select the language for your app.</li>
                <li>Fill in the required details about your app (name, description, category, and contact details).</li>
                <li>Upload your APK under the <strong>Release Management</strong> section.</li>
                <li>Provide additional assets like screenshots, icons, and promotional images.</li>
                <li>Fill out the content rating questionnaire, and choose the countries where your app will be available.</li>
                <li>Review everything and click <strong>Publish</strong> to submit your app for review.</li>
            </ol>
            <p>
                Once submitted, Google will review your app. This process can take anywhere from a few hours to several days. If your app is approved, it will be published on the Google Play Store.
            </p>

            <h2>5. Maintaining Your App</h2>
            <p>
                After publishing your app, it’s important to keep it updated. You’ll need to release new versions of the app to fix bugs, add new features, or make other improvements. Every time you release a new version, you’ll need to:
            </p>
            <ul>
                <li>Update the version number and version code.</li>
                <li>Upload the new APK to the Google Play Store.</li>
                <li>Monitor user feedback and respond to reviews.</li>
            </ul>

            <h2>6. Summary</h2>
            <p>
                In this final chapter, you’ve learned how to publish your Android app on the Google Play Store. This involves preparing your app for release, creating a developer account, generating a signed APK, and uploading your app to the Play Store. By following these steps, you can share your app with users around the world and continue to maintain and improve it over time.
            </p>

            <div class="next-chapter">
                <a href="/{{$mark_chapter()}}" class="next-chapter-button">Return to Course Overview</a>
            </div>

        </div>
    </div>

    @endsection
</body>

</html>