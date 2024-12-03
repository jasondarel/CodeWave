@extends('layout')

@section('content')
<div class="container mt-5">
    <h1>Inbox</h1>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @forelse($notifications as $notification)
    <div class="notification">
        <h4>{{ $notification->title }}</h4>
        <p>{{ $notification->content }}</p>
        <small>{{ $notification->created_at->format('F j, Y, g:i a') }}</small>
        <br>

        <!-- Mark as read link -->
        @if(!$notification->is_read)
        <a href="{{ route('inbox.markAsRead', $notification->id) }}">Mark as read</a>
        @endif
    </div>
    <hr>
    @empty
    <p>No notifications</p>
    @endforelse
</div>
@endsection