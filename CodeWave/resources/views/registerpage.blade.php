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
<body style="background-color:#10375C;">
    <div class="position-relatives">
        <div class="position-absolute shadow top-50 start-50 translate-middle d-flex flex-row bg-light rounded-2">
            <img src="{{asset('img/LoginImg.png')}}" class="shadow rounded-start" alt="...">

            <form class=" p-5 d-flex flex-column" style="width:30vw;" action="{{ route('submitRegistration') }}" method="post">
                @csrf

                <h3>{{ __('registerForm.register') }}</h3>
                <div class="mb-3 mt-4">
                    <label for="name" class="form-label">{{ __('registerForm.input.username') }}</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" aria-describedby="emailHelp">
                    @error('name')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('registerForm.input.email') }}</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" aria-describedby="emailHelp">
                    @error('email')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('registerForm.input.password') }}</label>
                    <input type="password" name="password" id="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                    @enderror
                </div>
                {{-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">{{ __('registerForm.input.agree') }}</label>
                    @error('agree')
                          <div class="text-danger">
                              {{ $message }}
                          </div>
                    @enderror
                </div> --}}
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input @error('agree') is-invalid @enderror" id="exampleCheck1" name="agree" value="1">
                    <label class="form-check-label" for="exampleCheck1">{{ __('registerForm.input.agree') }}</label>
                    {{-- @error('agree')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror --}}
                </div>                
                <button type="submit" class="btn btn-outline-dark">{{ __('registerForm.input.tombol') }}</button>
                <div class="fs-6 mt-1">
                    {{ __('registerForm.input.akun') }} <a href="{{ route('login') }}">{{ __('registerForm.input.login') }}</a>
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
        </div>
        
    </div>
    
</body>
</html>