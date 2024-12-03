<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>
</head>

<body>
    @extends('layout')

    @section('content')
    <div class="container mt-4">
        <h1>Notifications</h1>

        <!-- Notifications List -->
        <div class="card mt-3">
            <div class="card-header">
                <h5>Recent Notifications</h5>
            </div>
            <div class="card-body" style="max-height: 70vh; overflow-y: auto;">
                @if($notifications->isEmpty())
                <p class="text-center">You have no new notifications.</p>
                @else
                <ul class="list-group">
                    @foreach($notifications as $notification)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <strong>{{ $notification->title }}</strong>
                            <p class="mb-0">{{ $notification->message }}</p>
                            <small class="text-muted">
                                Received on {{ $notification->created_at->format('F j, Y h:i A') }}
                            </small>
                        </div>
                        @if(!$notification->is_read)
                        <a href="{{ route('inbox.markAsRead', $notification->id) }}" class="btn btn-sm btn-outline-primary">
                            Mark as Read
                        </a>
                        @endif
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
    @endsection

</body>

</html>