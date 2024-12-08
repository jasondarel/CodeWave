<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .err ul li {
            color: red;
            list-style: none;
        }   
    </style>
</head>
<body class="" style="background-color:#10375C;">
    <div class="position-relatives">
        <div class="position-absolute shadow top-50 start-50 translate-middle d-flex flex-row bg-light rounded-2">
            <form class=" p-5 d-flex flex-column" style="width:27vw;" action="{{ route('submitLogin') }}" method="post">
                @csrf

                <h3>{{ __('loginForm.login') }}</h3>
                <div class="mb-3 mt-4">
                    <label for="email" class="form-label">{{ __('loginForm.input.email') }}</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">{{ __('loginForm.input.emailHelp') }}</div>
                    @error('email')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('loginForm.input.password') }}</label>
                    <input type="password" name="password" id="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                    @if (session('fail'))
                        <div class="mt-3 alert alert-danger">
                            {{ session('fail') }}
                        </div>
                    @endif
                </div>
                {{-- Remember Me belum diimplementasi --}}
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">{{ __('loginForm.input.remember') }}</label>
                </div>
                <button type="submit" class="btn btn-outline-dark">{{ __('loginForm.input.tombol') }}</button>
                <div class="fs-6 mt-1">
                    {{ __('loginForm.input.akun') }} <a href="{{ route('register') }}">{{ __('loginForm.input.register') }}</a>
                </div>
                {{-- @if ($errors->any())
                    <div class="err">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>   
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
            </form>
            <img src="{{asset('img/LoginImg.png')}}" class="shadow rounded-end" alt="...">
            
        </div>
        
    </div>
    
</body>
</html>