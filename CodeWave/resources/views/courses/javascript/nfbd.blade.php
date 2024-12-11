<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Node.js for Backend Development</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .course-header {
            width: 100%;
            height: 400px;
            background-image: url('data:image/png;base64,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1/YqwmrmycK7cT+288GYMr3fHMyzVIj/1928YYGBM8bTr2c30dUIMjCbXR2JKc7tlQhVtDDP+MsROcPw3xeglMHzIcMQHZX74ewwW4R8iK3+eVBaxCpIucUAkdPFtgYIeAaLa//pikZnpkTl+bE+AqukK1dlELYqs2Zyct0YxrlRpA3XyvJ+9vVEjGyj2omiBJfpyDbE9pPirQF/C2u/K8NX/odRmrrtLGKZSuvsjhlS0WwTrGbctURbx+q+qRXlT2KfiS7tirClylA368VfA4Ns7yuUjMGvZXD3chaotmbzxx8BBmRH0ZeJItbvR8zzindUidnz80TONkasf2Nlw8RepXPsxIQX5pdQJfK02hLvEVE22uz7amhrgTvitj1KLyfgF6Le44X7C7J9Ve6bV01InLwHbk7sprn/wR1luzwK9+Vk32hNzz9PzlI4J1xxC/bJPB6hDYc6dnpra4IszWKY5+hig8ODp+O6nu15e+irmBTSUDFTNf5v/A9BEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEOTP8V/Aki89PhevHAAAAABJRU5ErkJggg==');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .course-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .course-title {
            color: white;
            font-size: 48px;
            font-weight: bold;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
            text-align: center;
            z-index: 2;
        }

        .back-link {
            font-size: 24px;
            color: #007BFF;
            text-decoration: none;
            margin-top: 10px;
            margin-left: 20px;
            display: inline-block;
        }

        .back-link:hover {
            color: #0056b3;
        }

        .course-content {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .course-section {
            margin-bottom: 20px;
        }

        .course-section h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .course-section p {
            font-size: 18px;
            color: #555;
        }

        .cta-button {
            display: block;
            text-align: center;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .cta-button:hover {
            background-color: #0056b3;
        }

        .styled-list {
            list-style: none;
            padding-left: 0;
        }

        .styled-list li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 18px;
            color: #555;
        }

        .styled-list li::before {
            content: "\f058";
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            font-size: 20px;
            color: #007BFF;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    @extends('layout')

    @section('content')
    <a href="javascript:history.back()" class="back-link">
        &#8592;
    </a>

    <div class="course-header">
        <div class="course-title">Node.js for Backend Development</div>
    </div>

    <div class="course-content">
        <div class="course-section">
            <h2><strong>Course Overview</strong></h2>
            <p>
                This course is aimed at developers who want to learn how to use Node.js to build powerful backend systems. You'll explore the fundamentals of Node.js, working with APIs, databases, and building scalable server-side applications. By the end of this course, you'll be able to develop full-fledged backend applications using Node.js.
            </p>
        </div>

        <div class="course-section mt-20">
            <h2><i class="fas fa-list-ul"></i> <strong>What You'll Learn</strong></h2>
            <ul class="styled-list">
                <li>Getting started with Node.js and its core modules</li>
                <li>Working with Express.js for building RESTful APIs</li>
                <li>Connecting to databases (MongoDB, MySQL, etc.)</li>
                <li>Understanding asynchronous programming with callbacks, promises, and async/await</li>
                <li>Building secure and scalable backend applications</li>
            </ul>
        </div>

        <a href="/enroll/19" class="cta-button mt-20">Enroll Now</a>
    </div>

    @endsection
</body>

</html>