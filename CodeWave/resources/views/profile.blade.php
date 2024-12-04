<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>
    @extends('layout')
    @section('content')
    <div class="d-flex flex-column">
        <div class="w-75 mx-auto mt-4 contents d-flex gap-5 align-items-center">
            <img src="{{ asset('img/profilepic.png') }}" class="rounded" style="height:20vh;" alt="Profile Picture">
            <div class="fs-2">Hi! //Nama User</div>
        </div>

        <form class="w-75 mx-auto mt-4">
            <fieldset disabled class="d-flex flex-column" id="profileFieldset">
                <legend>Here's Your Profile Information</legend>
                <div class="mb-3">
                    <label for="nameInput" class="form-label">Name</label>
                    <input type="text" id="nameInput" class="form-control" placeholder="User Name">
                </div>
                <div class="mb-3">
                    <label for="emailInput" class="form-label">Email</label>
                    <input type="email" id="emailInput" class="form-control" placeholder="User Email">
                </div>
                <div class="mb-3">
                    <label for="passwordInput" class="form-label">Password</label>
                    <input type="password" id="passwordInput" class="form-control" placeholder="******">
                </div>
                <div class="mb-3">
                    <label for="passwordInput" class="form-label">Date Of Birth</label>
                    <input type="password" id="passwordInput" class="form-control" placeholder="User DOB">
                </div>
                <div class="mb-3">
                    <label for="roleSelect" class="form-label">Role</label>
                    <select id="roleSelect" class="form-select">
                        <option selected disabled>Your Role</option>
                        <option>Admin</option>
                        <option>User</option>
                    </select>
                </div>
               
                
                <button type="button" class="btn btn-primary align-self-end" id="enableFieldsetButton">Edit</button>
            </fieldset>
        </form>
    </div>

    @endsection
</body>
</html>
