<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-body-secondary">
    <div class="position-relatives">
        <div class="position-absolute shadow top-50 start-50 translate-middle d-flex flex-row bg-light rounded-2">
            <form class=" p-5">
                <h3>Login</h3>
                <div class="mb-3 mt-4">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-outline-dark">Submit</button>
            </form>
            <img src="{{asset('img/LoginImg.png')}}" class="shadow rounded-end" alt="...">
            
        </div>
        
    </div>
    
</body>
</html>