<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .notification-item {
            border-bottom: 1px solid #dee2e6;
            padding: 10px;
        }

        .notification-item:last-child {
            border-bottom: none;
        }

        .notification-item:hover {
            background-color: #f8f9fa;
        }

        .scrollable-list {
            max-height: 70vh;
            overflow-y: auto;
        }
    </style>
</head>

<body>
    @extends('layout')
    @section('content')
    <div class="container mt-4">
        <h1>Inbox</h1>

        <!-- Notifications List -->
        <div class="card mt-3">
            <div class="card-header">
                <h5>Recent Notifications</h5>
            </div>
            <div class="card-body scrollable-list">
                <!-- Loop through the notifications passed from the route -->
                @foreach ($notifications as $notification)
                <div class="notification-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>{{ $notification['title'] }}</strong>
                        <p class="mb-0">{{ $notification['message'] }}</p>
                        <small class="text-muted">Received on {{ $notification['date'] }}</small>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-primary">Mark as Read</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @endsection
</body>

</html>