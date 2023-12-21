<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Besar 14</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .testimonial-slider {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
        }
        .testimonial-card {
            flex: 0 0 auto;
            width: 400px;
            scroll-snap-align: start;
            padding: 20px;
            margin: 10px;
            border: 1px solid #ccc;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }
        .testimonial-slider:hover .testimonial-card {
            transform: translateX(10px);
        }
        .testimonial-card img {
            max-width: 100%;
            border-radius: 50%;
        }
        .testimonial-card p {
            margin: 10px 0;
        }
        .testimonial-card span {
            font-weight: bold;
        }
        .card-hover {
            transition: background-color 0.2s, box-shadow 0.2s;
            border: none;
        }
        .card-hover img {
            transition: box-shadow 0.2s;
        }
        .card-hover:hover {
            background-color: rgba(34, 34, 34, 1);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }
        .card-hover:hover img {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }
        .card-hover:hover .card-title,
        .card-hover:hover .card-text,
        .card-hover:hover .card-button {
            color: white;
        }
        .card-button {
            background-color: rgba(197, 168, 128, 1);
            color: white;
            border: none;
        }
        .custom-img-container {
            overflow: hidden;
            position: relative;
        }
        .custom-img-container img {
            transition: transform 0.3s;
        }
        .custom-img-container:hover img {
            transform: scale(1.2);
        }
        .custom-img-container {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .custom-img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
        }
        .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .background-image {
            background-image: url('img/place/Hotel1.jpg');
            background-size: cover;
            position: relative;
            height: 500px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .background-image::before {
            content: "";
            background: rgba(0, 0, 0, 0.4);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .cta-buttons {
            margin-top: 40px;
        }
        .cta-button {
            background-color: rgba(197,168,128,255);
            color: #fff;
            padding: 15px 40px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 20px;
            transition: background-color 0.3s ease;
        }
        .nav-link.active {
            text-decoration: underline;
        }
    </style>

</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
        <a href="{{ url('/WelcomeAdmin') }}"class="navbar-brand">Serenity Shores</a>
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/Home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/About') }}">About</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/Rooms') }}">Rooms</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/Restaurant') }}">Restaurant</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/Profile') }}">Profile</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/Login') }}">Login</a></li>
            </ul>

        </div>
    </div>
</nav>

<div class="wrapper" style="z-index: 1;">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        @yield('content')
    </div>
    <!-- Main Footer -->

    <footer class="main-footer" style="background-color: rgba(34,34,34,255); color: #fff; padding: 20px;">

        <div class="float-right d-none d-sm-inline">
            <!-- Any additional content to the right, if needed -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h4>About Serenity Shores Hotel</h4>
                    <p>
                        Discover the perfect blend of tranquility and luxury at Serenity Shores Hotel. Located on the South Shores of Yogyakarta, Indonesia, our hotel offers breathtaking views, world-class amenities, and exceptional service to make your stay truly memorable.
                    </p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h4>Contact Us</h4>
                    <p>
                        Email: info@serenityshoreshotel.com<br>
                        Phone: +123-456-7890<br>
                    </p>
                </div>
            </div>
        </div>
        <div class="text-center">
            <p>&copy; {{ date('Y') }} Serenity Shores Hotel. All rights reserved.</p>
        </div>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var nav = document.querySelector('nav');
    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
            nav.style.backgroundColor = 'rgba(34, 34, 34, 1.0)';
            nav.classList.add('shadow');
        } else {
            nav.style.backgroundColor = '';
            nav.classList.remove('shadow');
        }
    });
</script>

<script>
    function playVideo() {
        window.location.href = "https://www.youtube.com/watch?v=9I2xta0ahIs";
    }
</script>
</body>

</html>
