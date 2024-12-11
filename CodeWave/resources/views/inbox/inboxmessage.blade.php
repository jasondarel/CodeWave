<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox - Message</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            margin: 40px auto;
            max-width: 750px;
            border: none;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #f9f7cf;
        }

        .card-header {
            background-color: transparent;
            color: #10375c;
            padding: 20px;
            font-size: 1.75rem;
            font-weight: 600;
            border-bottom: 2px solid #10375c;
        }

        .card-header small {
            font-size: 0.85rem;
            font-weight: 300;
            color: #555;
        }

        .card-body {
            padding: 25px;
            font-size: 1.1rem;
            color: #333;
            line-height: 1.6;
        }

        .card-body p {
            margin-bottom: 0;
        }

        .card-footer {
            padding: 15px 25px;
            background-color: #f1f1f1;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-back {
            display: flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(to right, #6c757d, #495057);
            color: white;
            padding: 8px 20px;
            font-size: 1rem;
            border: none;
            border-radius: 20px;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .btn-back:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 576px) {
            .card-header {
                font-size: 1.5rem;
            }

            .card-body {
                font-size: 1rem;
                padding: 15px;
            }

            .btn-back {
                font-size: 0.9rem;
                padding: 6px 15px;
            }
        }
    </style>
</head>

<body>
    @extends('layout')

    @section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                {{ $notification->title }}
                <br>
                <small>Received on {{ $notification->created_at }}</small>
            </div>

            <div class="card-body">
                <p>{{ $notification->content }}</p>
            </div>

            <div class="card-footer">
                <a href="/inbox" class="btn-back">
                    <i class="bi bi-arrow-left"></i> Back to Inbox
                </a>
            </div>
        </div>
    </div>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>