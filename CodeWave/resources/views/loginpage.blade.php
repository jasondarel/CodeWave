<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="" style="background-color:#10375C;">
    <div class="position-relatives">
        <div class="position-absolute shadow top-50 start-50 translate-middle d-flex flex-row bg-light rounded-2">
            <form class=" p-5 d-flex flex-column" style="width:27vw;" action="{{ route('submitLogin') }}" method="post">
                @csrf

                <h3>Login</h3>
                <div class="mb-3 mt-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" value="{{ old('password') }}" class="form-control">
                </div>
                {{-- Remember Me belum diimplementasi --}}
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <a type="submit" class="btn btn-outline-dark" href="homepage">Submit</a>
                <div class="fs-6 mt-1">
                Dont have an account? <a href="{{ route('register') }}">Register Here</a>
                </div>
                @if(session('fail'))
                    <div class="alert alert-danger">
                        {{ session('fail') }}
                    </div>
                @endif
            </form>
            <img src="{{asset('img/LoginImg.png')}}" class="shadow rounded-end" alt="...">
            
        </div>
        
    </div>
    
</body>
</html>