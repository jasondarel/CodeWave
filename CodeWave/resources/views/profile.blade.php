<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    @vite(['resources/sass/app.scss'])
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const editButton = document.getElementById("editButton");
            const profileFieldset = document.getElementById("profileFieldset");

            editButton.addEventListener("click", function(event) {

                event.preventDefault();


                if (profileFieldset.disabled) {
                    profileFieldset.disabled = false;
                    editButton.textContent = "Save";
                } else {
                    document.getElementById("profileForm").submit();
                }
            });
        });
    </script>
</head>

<body>
    @extends('layout')
    @section('content')
    <div class="d-flex flex-column mb-4">
        <div class="w-75 mx-auto mt-4 contents d-flex gap-5 align-items-center">
            <img src="{{ asset('img/profilepic.png') }}" class="rounded-circle" style="height:20vh;" alt="Profile Picture">
            <div class="fs-2">Hello, <strong style="color: #10375c;">{{ $user->name ?? 'Guest' }}</strong>!</div>
        </div>

        <form id="profileForm" class="w-75 mx-auto mt-4 d-flex flex-column" action="{{ route('updateProfile', $user->id) }}" method="post">
            @csrf
            @method('PUT')

            <fieldset disabled class="d-flex flex-column" id="profileFieldset">
                <legend>{{ __('profile.profileInfo') }}</legend>
                <div class="mb-3">
                    <label for="nameInput" class="form-label">Name</label>
                    <input type="text" id="nameInput" name="name" class="form-control" value="{{ $user->name }}">
                </div>
                <div class="mb-3">
                    <label for="emailInput" class="form-label">Email</label>
                    <input type="email" id="emailInput" name="email" class="form-control" value="{{ $user->email }}">
                </div>
                <div class="mb-3">
                    <label for="dobInput" class="form-label">Date Of Birth</label>
                    <input type="date" id="dobInput" name="DOB" class="form-control" value="{{ $user->DOB ? $user->DOB->format('Y-m-d') : '2000-01-01' }}">

                </div>

            </fieldset>
            <button type="button" id="editButton" class="btn btn-primary align-self-end">Edit</button>
        </form>
    </div>
    @endsection
</body>

</html>