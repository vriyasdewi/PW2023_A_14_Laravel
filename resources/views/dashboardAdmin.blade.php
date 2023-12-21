<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 15px 25px;
            text-decoration: none;
            font-size: 20px;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        .sidebar a.active {
            background-color: #555;
        }

        .profile-picture {
            text-align: center;
            padding: 20px;
        }

        .logout-button {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            background-color: #555;
        }

        .logout-button a {
            display: block;
            padding: 10px;
        }
        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 100;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            width: 700px;
            max-width: 100%;
        }
    </style>
</head>
<body>
<div class="content-wrapper">
    @yield('content')
</div>

<div class="sidebar">
    <div class="profile-picture">

        <h2 style="color: white;">Serenity Shores</h2>
    </div>
    <a href="{{ url('/admin') }}">Beranda</a>
    <a href="{{ url('/admin/room') }}">Booking Room</a>
    <a href="{{ url('/Order') }}">Meal Order</a>
    <a href="{{ url('/admin/user') }}">User Hotel</a>
    <div class="logout-button">
        <a href="{{ url('/') }}">Back To Home</a>
    </div>
</div>
</body>
</html>
