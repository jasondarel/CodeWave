<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    @vite(['resources/sass/app.scss'])
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const editButton = document.getElementById("editButton");
            const profileFieldset = document.getElementById("profileFieldset");

            editButton.addEventListener("click", function () {
                profileFieldset.disabled = !profileFieldset.disabled;
                editButton.textContent = profileFieldset.disabled ? "Edit" : "Save";
            });
        });
    </script>
</head>
<body>
    @extends('layout')
    @section('content')
    <div class="d-flex flex-column mb-4">
        <div class="w-75 mx-auto mt-4 contents d-flex gap-5 align-items-center">
            <img src="{{ asset('img/profilepic.png') }}" class="rounded" style="height:20vh;" alt="Profile Picture">
            <div class="fs-2">Hi! {{ $user->name ?? 'Guest' }}</div>
        </div>

        <form class="w-75 mx-auto mt-4 d-flex flex-column">
            <fieldset disabled class="d-flex flex-column" id="profileFieldset">
                <legend>Here's Your Profile Information</legend>
                <div class="mb-3">
                    <label for="nameInput" class="form-label">Name</label>
                    <input type="text" id="nameInput" class="form-control" value="{{ $user->name }}">
                </div>
                <div class="mb-3">
                    <label for="emailInput" class="form-label">Email</label>
                    <input type="email" id="emailInput" class="form-control" value="{{ $user->email }}">
                </div>
                <div class="mb-3">
                    <label for="passwordInput" class="form-label">Password</label>
                    <input type="password" id="passwordInput" class="form-control" value="{{ $user->password }}">
                </div>
                <div class="mb-3">
                    <label for="dobInput" class="form-label">Date Of Birth</label>
                    <input type="date" id="dobInput" class="form-control" value="{{ $user->DOB ?? '2000-01-01' }}">
                </div>
                <div class="mb-3">
                    <label for="roleSelect" class="form-label">Role</label>
                    <select id="roleSelect" class="form-select">
                        <option {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                        <option {{ $user->role == 'User' ? 'selected' : '' }}>User</option>
                    </select>
                </div>
            </fieldset>
            <button type="button" id="editButton" class="btn btn-primary align-self-end">Edit</button>
        </form>
    </div>
    @endsection
</body>
</html>
