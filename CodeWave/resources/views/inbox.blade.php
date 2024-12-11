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
            cursor: pointer;
            /* Cursor as pointer on hover */
        }

        .notification-item:last-child {
            border-bottom: none;
        }

        .notification-item:hover {
            background-color: #f8f9fa;
        }

        .notification-item.read {
            background-color: #f0f0f0;
            /* Grey background for read messages */
            opacity: 0.6;
        }

        .notification-item .btn-read {
            display: inline-block;
            /* Make sure the button is visible initially */
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
        <div class="titles font-bold mb-4 fs-3">
            <h1>Inbox</h1>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <h5>Recent Notifications</h5>
            </div>
            <div class="card-body scrollable-list">
             

                @foreach ($notifications as $notification)
                <a href="/inbox/{{ $notification->id }}" class="notification-item" id="notification-{{ $notification['id'] }}">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <strong>{{ $notification->title }}</strong>
                            <p class="mb-0">{{ $notification->content }}</p>
                            <small class="text-muted">Received on {{ $notification->created_at }}</small>
                        </div>
                        <button class="btn btn-sm btn-outline-primary btn-read">Mark as Read</button>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    @endsection
</body>

</html>