<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    @extends('layout')

    @section('content')

    <!-- Dashboard Content -->
    <div class="dashboard-container">
        <h1>Dashboard</h1>

        <!-- Courses Enrolled and Lessons Completed -->
        <div class="user-info">
            <p>Courses Enrolled: {{ $coursesEnrolled }}</p>
            <p>Lessons Completed: {{ $lessonsCompleted }}</p>
            <p>Rank: {{ $rank }}</p>
        </div>

        <!-- News Section -->
        <div class="news-section">
            <h2>Latest Coding News</h2>

            <!-- Displaying news -->
            @foreach ($news as $item)
            <div class="news-item">
                <h3>{{ $item->title }}</h3>
                <p>{{ $item->description }}</p>
                <small>Published on: {{ $item->created_at->format('F j, Y') }}</small>
            </div>
            @endforeach

            <!-- Pagination for news -->
            <div class="pagination">
                {{ $news->links() }}
            </div>
        </div>

        <!-- Announcements Section -->
        <div class="announcements-section">
            <h2>Announcements</h2>

            <!-- Displaying announcements -->
            @foreach ($announcements as $announcement)
            <div class="announcement-item">
                <h3>{{ $announcement->title }}</h3>
                <p>{{ $announcement->content }}</p>
                <small>Created on: {{ $announcement->created_at->format('F j, Y') }}</small>
            </div>
            @endforeach

            <!-- Pagination for announcements -->
            <div class="pagination">
                {{ $announcements->links() }}
            </div>
        </div>
    </div>

    @endsection

</body>

</html>