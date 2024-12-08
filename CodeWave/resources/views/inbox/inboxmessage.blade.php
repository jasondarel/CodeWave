<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox-Message</title>
</head>

<body>
    @extends('layout')

    @section('content')
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white d-flex align-items-center">
                <h3 class="mb-0">{{ $notification['title'] }}</h3>
                <small class="ms-auto text-end">Received on {{ $notification['date'] }}</small>
            </div>

            <div class="card-body">
                <p class="lead">{{ $notification['message'] }}</p>
            </div>

            <div class="card-footer d-flex justify-content-between">
                <a href="/inbox" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left"></i> Back to Inbox
                </a>
                <button class="btn btn-success">
                    <i class="bi bi-check-circle"></i> Mark as Read
                </button>
            </div>
        </div>
    </div>
    @endsection

</body>

</html>