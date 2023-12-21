@extends('dashboard')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">


<div class="content">
    <div class="background-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url(img/place/Hotel1.jpg); background-size: cover; background-position: center; position: relative;">
        <div class="content text-center" style="position: relative; z-index: 1;">
            <h1 class="text-white" style="font-size: 40px;  font-family: 'Lucida Bright', sans-serif; font-weight: bold; margin-top: -50px;">Hotel and Resort</h1>
            <h2 class="text-white custom-h2" style="font-size: 60px; font-family: 'Lucida Bright', sans-serif; font-weight: bold; margin-top: 10px;">Seaside Serenity Awaits</h2>
        </div>
        <div class="hotel1" style="position: relative; z-index: 1;">
        <div class="cta-buttons">
            <a href="#" class="cta-button" style="text-decoration: none;" onclick="playVideo()">Take a Tour</a>
            <a href="#hotel-experience" class="cta-button" style="border: 2px solid #fff; background: transparent; text-decoration: none;">Learn More</a>
        </div>
    </div>
</div>


<div class="container">
    <div class="row text-center">
        <div class="col-md-1"></div>
        <div class="col-md-12">
        <div class="card" style="margin-top: -50px; margin-bottom: -50px; border-radius: 10px; background-color: rgba(34, 34, 34, 1.0);">
            <div class="card-body" style="padding: 30px;">
                    <div class="row text-center">
                        <div class="col-md-3">
                            <input type="date" class="form-control" placeholder="Check-in Date">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control" placeholder="Check-out Date">
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option selected>Select Room</option>

                                <option>Room Suite</option>
                                <option>Room Regular</option>
                                <option>Room Deluxe</option>

                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">

                                <option selected>Number of Adults</option>
                                <option>1 Person</option>
                                <option>2 Person</option>
                                <option>3 Person</option>
                                <option>4 Person</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-warning" type="submit">Available</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>



<div class="bg-subtle" style="background-color: rgb(248, 244, 244);">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="position-relative mt-5 md-2">
            <div class="position-relative mt-5 md-2">
            <h6 class="section-title text-start" style="font-size: 20px; font-family: 'Lucida Bright', sans-serif; font-weight: bold;">About Us</h6>
            <h1 class="mb-4" style="font-family: 'Lucida Bright', sans-serif; font-weight: bold; ">Welcome to <span class="text text-uppercase">Serenity</span></h1>
                <p class="mb-4">Serenity Shores, where tranquility meets luxury. We are dedicated to providing an exceptional, environmentally-conscious, and harmonious coastal experience. Our commitment to sustainability, breathtaking natural beauty, and impeccable service defines us. Welcome to Serenity Shores, where every moment is a cherished memory waiting to be made</p>
                <div class="row g-3 pb-4">
                    <div class="col-md-4 col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="border border-dark  rounded p-2">
                            <div class="border border-dark  rounded text-center p-2">
                                <i class="fa fa-hotel fa-2x text-war mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">55</h2>
                                <p class="mb-0">Rooms</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="border border-dark  rounded p-2">
                            <div class="border  border-dark  rounded text-center p-2">
                                <i class="fa fa-users-cog fa-2x text mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">57</h2>
                                <p class="mb-0">Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="border border-dark  rounded p-2">
                            <div class="border  border-dark  rounded text-center p-2">
                                <i class="fa fa-users fa-2x text mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">1094</h2>
                                <p class="mb-0">Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2 cta-button" href="#detail-photo" style="margin-bottom: 50px;">Explore More</a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row g-3">
                <div class="col-6 text-end">
                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('img/place/Hotel2.jpg') }}" style="margin-top: 25%;">
                </div>
                <div class="col-6 text-start">
                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s"src="{{ asset('img/place/Hotel3.jpg') }}">
                </div>
                <div class="col-6 text-end">
                    <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('img/place/Hotel4.jpg') }}">
                </div>
                <div class="col-6 text-start">
                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('img/place/Hotel5.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</div>

    <div id="hotel-experience" class="bg-subtle " style="background-color: #FFFF;">

            <div class="container d-flex justify-content-center align-items-center">
            <div class="position-relative mt-5 md-2">
                    <h2 class="mt-3 md-3" style="font-size: 50px; font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Hotel Experience</h2>
                </div>
            </div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="position-relative text-center mt-4 md-2">
                    Terinspirasi oleh keindahan Samudra Hindia, Serenity Shores Yogyakarta menawarkan pemandangan Pantai Yang menenangkan,
                    santapan yang memanjakan, kamar-kamar yang elegan, dan keramahtamahan luar biasa yang diwujudkan dengan Layanan Spa yang memanjakan.
                    Terletak di Pantai Selatan Jogja, namun hanya beberapa menit alam lainnya,
                    hotel ini berjarak 15 km dari Yogyakarta International Airport (YIA).
                    <br>
                    Serenity Shores Hotel Yogyakarta adalah tempat yang sempurna untuk liburan yang Menenangkan dan mewah,
                    pertemuan pribadi, serta acara dan pertemuan yang terorganisir dengan baik.
                </div>
            </div>
            <br>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="custom-img-container">
                                <img src="{{ asset('img/place/spa.jpg') }}" class="card-img-top img-fluid aspect-ratio custom-img" alt="...">
                            </div>
                            <br>
                            <h3 class="title" style="font-size: 30px;  font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Spa Ekslusif</h3>
                            <p>Terletak pada ruangan terbuka pada lantai 3 dengan pemandangan langsung menghadap ke laut.
                                Spa Eksklusif Serenity Shores memberikan pengalaman spa yang menenangkan dan meyegarkan.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="custom-img-container">
                                <img src="{{ asset('img/place/restoPantai.jpg') }}" class="img-fluid aspect-ratio custom-img" alt="...">
                            </div>
                            <br>
                            <h3 class="title" style="font-size: 30px;  font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Restoran Pantai</h3>
                            <p>Terletak pada hamparan pantai dengan pemandangan laut yang menakjubkan.
                                Menghadirkan suasana makan yang berbeda.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="custom-img-container">
                                <img src="{{ asset('img/place/pool.jpg') }}" class="card-img-top img-fluid aspect-ratio custom-img" alt="...">
                            </div>
                            <br>
                            <h3 class="title" style="font-size: 30px;  font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Kolam Renang</h3>
                            <p>Kolam renang yang di desain menghadap langsung ke Pantai.
                                Berenang dengan view yang indah menjadi salah satu keunggulan dari kolam renang kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

    <div id="detail-photo" class="bg-subtle" style="background-color: rgb(248, 244, 244);">

    <div class="container d-flex justify-content-center align-items-center">
        <div class="position-relative mt-5 md-2">
            <h2 class="mt-3 md-3 text-center" style="font-size: 50px; font-family: 'Lucida Bright', sans-serif; font-weight: bold; margin-bottom: 30px;">Detail Photo</h2>
            <P class="text-center ">Embark on an extraordinary journey of luxury and comfort with our exquisite hotel. Discover a world where elegance meets relaxation, and every detail has been meticulously crafted to ensure an unforgettable experience. Join us in exploring the finer intricacies of our hotel, where personalized service, stunning views, and unparalleled amenities await. Let us be your gateway to a world of opulence – come and delve into the details that make our hotel an oasis of delight.</P>
        </div>
    </div>

    <div class="container d-flex justify-content-center align-items-center">
    <div id="imageSlider" class="carousel slide" data-ride="carousel" style="max-width: 1000px; max-height: 700px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/place/Hotel2.jpg" alt="Image 1" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/place/Hotel3.jpg" alt="Image 2" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/place/Hotel4.jpg" alt="Image 3" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/place/Hotel5.jpg" alt="Image 4" class="d-block w-100">
            </div>
        </div>
        <a class="carousel-control-prev" href="#imageSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#imageSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>
        <br>

        <div class="bg-subtle" style="background-color: #FFFF;">
<div class="container d-flex justify-content-center align-items-center mt-5 md-2">

    <div class="position-relative">
    <h2 class="md-2" style="font-size: 50px; font-family: 'Lucida Bright', sans-serif; font-weight: bold; margin-top: 3rem;">Room & Suites</h2>

    </div>
</div>
<br>
<br>
<div class="container" style="max-width: 90%;">
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center card-hover">
                <img src="{{ asset('img/room/suiteRoom.jpg') }}" class="card-img-top img-fluid aspect-ratio" alt="Suite Room">
                <div class="card-body">
                    <h3 class="card-title" style="font-size: 30px;  font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Suite Room</h3>
                    <p class="card-text">Selamat datang di dunia kemewahan yang tidak terlupakan di dalam kamar tipe suite kami. Dalam suite kami,
                        Anda akan menemukan ruang istimewa yang terdiri dari kamar tidur yang nyaman dan area tamu yang luas.
                        Setiap detail telah dirancang untuk memanjakan tamu. Suite adalah pilihan ideal bagi mereka yang mencari privasi dan kenyamanan ekstra selama perjalanan mereka. Nikmati momen-momen berharga di sini.</p>

                    <a href="{{ url('/Rooms') }}" class="btn btn-outline-secondary card-button" role="button">BOOK NOW</a>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center card-hover">
                <img src="{{ asset('img/room/regularRoom.jpg') }}" class="card-img-top img-fluid aspect-ratio" alt="Regular Room">
                <div class="card-body">
                    <h3 class="card-title" style="font-size: 30px;  font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Regular Room</h3>
                    <p class="card-text">Kamar tipe regular kami adalah tempat yang cocok untuk beristirahat setelah seharian beraktivitas. Dengan desain yang nyaman,
                        kamar ini dilengkapi dengan fasilitas yang mencukupi, termasuk tempat tidur yang nyaman dan fasilitas mandi dasar. Ini adalah pilihan yang ideal untuk tamu yang mencari akomodasi yang bersahabat dan terjangkau tanpa mengorbankan kenyamanan.</p>
                    <a href="{{ url('/Rooms') }}" class="btn btn-outline-secondary card-button" role="button">BOOK NOW</a>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center card-hover">
                <img src="{{ asset('img/room/deluxeRoom.jpg') }}" class="card-img-top img-fluid aspect-ratio" alt="Deluxe Room">
                <div class="card-body">
                    <h3 class="card-title" style="font-size: 30px;  font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Deluxe Room</h3>
                    <p class="card-text">Selamat datang di dunia kenyamanan istimewa di kamar tipe deluxe kami. Kamar tipe deluxe menawarkan lebih banyak ruang dan fasilitas yang luar biasa. Anda dapat menikmati pemandangan indah, interior yang mewah, serta fasilitas tambahan seperti minibar yang lengkap dan ruang duduk yang nyaman. Ini adalah pilihan yang sempurna bagi tamu yang menginginkan pengalaman menginap yang istimewa dan kenyamanan yang lebih tinggi selama perjalanan mereka.</p>

                    <a href="{{ url('/Rooms') }}" class="btn btn-outline-secondary card-button" role="button">BOOK NOW</a>

                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>

<div class="bg-subtle" style="background-image: url('images/hero_3.jpg'); background-attachment: fixed; background-size: 100% 100%;">
<div class="container">
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
        <h2 class="text-white mt-5 md-3" style="font-size: 50px; font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Restaurant Serenity</h2>
    <p class="text-white">Restaurant Serenity is the ultimate dining destination for those seeking a high-quality culinary experience in a serene and soothing environment. Our establishment offers a diverse menu, featuring delicious dishes from a variety of world cuisines, ensuring that there's something to satisfy every palate. What truly sets Restaurant Serenity apart is our friendly and professional staff, who provide exceptional service, making each visit a truly memorable dining experience.</p>
    </div>
</div>

<div class="food-menu-tabs">

    <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
        <li class="nav-item"><a class="nav-link active letter-spacing-2" id="mains-tab" data-toggle="tab" href="#mains" role="tab" aria-controls="mains" aria-selected="true">Main Course</a></li>
        <li class="nav-item"><a class="nav-link letter-spacing-2" id="desserts-tab" data-toggle="tab" href="#desserts" role="tab" aria-controls="desserts" aria-selected="false">Sweet Dessert</a></li>
        <li class="nav-item"><a class="nav-link letter-spacing-2" id="drinks-tab" data-toggle="tab" href="#drinks" role="tab" aria-controls="drinks" aria-selected="false">Drinks Freezing</a></li>
    </ul>

    <div class="tab-content py-5" id="myTabContent">
        <div class="tab-pane fade show active text-left" id="mains" role="tabpanel" aria-labelledby="mains-tab">

            <div class="row">
            <div class="col-md-6">
                <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 250.000</span>
                <h3 class="text-white text-white">Grilled Salmon Steak</a></h3>
                <p class="text-white text-opacity-7">A succulent salmon steak, marinated with herbs and spices, grilled to perfection. Served with a side of lemon butter sauce, roasted vegetables, and garlic mashed potatoes.</p>
            </div>

            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 50.000</span>
                <h3 class="text-white"><a href="#" class="text-white">Beef Tenderloin Medallions</a></h3>
                <p class="text-white text-opacity-7">Tender slices of beef tenderloin, cooked to your desired doneness. Accompanied by a rich red wine reduction sauce, sautéed wild mushrooms, and creamy truffle-infused mashed potatoes.</p>
            </div>

            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 44.000</span>
                <h3 class="text-white"><a href="#" class="text-white">Chicken Parmesan</a></h3>
                <p class="text-white text-opacity-7">Breaded and crispy chicken breast, topped with marinara sauce and melted mozzarella cheese. Served over a bed of al dente spaghetti with a side of garlic bread.</p>
            </div>
            </div>

            <div class="col-md-6">
            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 250.000</span>
                <h3 class="text-white text-white">Grilled Salmon Steak</a></h3>
                <p class="text-white text-opacity-7">A succulent salmon steak, marinated with herbs and spices, grilled to perfection. Served with a side of lemon butter sauce, roasted vegetables, and garlic mashed potatoes.</p>
            </div>

            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 50.000</span>
                <h3 class="text-white"><a href="#" class="text-white">Beef Tenderloin Medallions</a></h3>
                <p class="text-white text-opacity-7">Tender slices of beef tenderloin, cooked to your desired doneness. Accompanied by a rich red wine reduction sauce, sautéed wild mushrooms, and creamy truffle-infused mashed potatoes.</p>
            </div>

            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 44.000</span>
                <h3 class="text-white"><a href="#" class="text-white">Chicken Parmesan</a></h3>
                <p class="text-white text-opacity-7">Breaded and crispy chicken breast, topped with marinara sauce and melted mozzarella cheese. Served over a bed of al dente spaghetti with a side of garlic bread.</p>
            </div>
            </div>
        </div>
        </div>
        <div class="tab-pane fade text-left" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">
        <div class="row">
        <div class="col-md-6">
            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 250.000</span>
                <h3 class="text-white text-white">Grilled Salmon Steak</a></h3>
                <p class="text-white text-opacity-7">A succulent salmon steak, marinated with herbs and spices, grilled to perfection. Served with a side of lemon butter sauce, roasted vegetables, and garlic mashed potatoes.</p>
            </div>

            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 50.000</span>
                <h3 class="text-white"><a href="#" class="text-white">Beef Tenderloin Medallions</a></h3>
                <p class="text-white text-opacity-7">Tender slices of beef tenderloin, cooked to your desired doneness. Accompanied by a rich red wine reduction sauce, sautéed wild mushrooms, and creamy truffle-infused mashed potatoes.</p>
            </div>

            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 44.000</span>
                <h3 class="text-white"><a href="#" class="text-white">Chicken Parmesan</a></h3>
                <p class="text-white text-opacity-7">Breaded and crispy chicken breast, topped with marinara sauce and melted mozzarella cheese. Served over a bed of al dente spaghetti with a side of garlic bread.</p>
            </div>
            </div>

            <div class="col-md-6">
            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 250.000</span>
                <h3 class="text-white text-white">Grilled Salmon Steak</a></h3>
                <p class="text-white text-opacity-7">A succulent salmon steak, marinated with herbs and spices, grilled to perfection. Served with a side of lemon butter sauce, roasted vegetables, and garlic mashed potatoes.</p>
            </div>

            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 50.000</span>
                <h3 class="text-white"><a href="#" class="text-white">Beef Tenderloin Medallions</a></h3>
                <p class="text-white text-opacity-7">Tender slices of beef tenderloin, cooked to your desired doneness. Accompanied by a rich red wine reduction sauce, sautéed wild mushrooms, and creamy truffle-infused mashed potatoes.</p>
            </div>

            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 44.000</span>
                <h3 class="text-white"><a href="#" class="text-white">Chicken Parmesan</a></h3>
                <p class="text-white text-opacity-7">Breaded and crispy chicken breast, topped with marinara sauce and melted mozzarella cheese. Served over a bed of al dente spaghetti with a side of garlic bread.</p>
            </div>
            </div>
        </div>
        </div>
        <div class="tab-pane fade text-left" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
        <div class="row">
        <div class="col-md-6">
            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 250.000</span>
                <h3 class="text-white text-white">Grilled Salmon Steak</a></h3>
                <p class="text-white text-opacity-7">A succulent salmon steak, marinated with herbs and spices, grilled to perfection. Served with a side of lemon butter sauce, roasted vegetables, and garlic mashed potatoes.</p>
            </div>

            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 50.000</span>
                <h3 class="text-white"><a href="#" class="text-white">Beef Tenderloin Medallions</a></h3>
                <p class="text-white text-opacity-7">Tender slices of beef tenderloin, cooked to your desired doneness. Accompanied by a rich red wine reduction sauce, sautéed wild mushrooms, and creamy truffle-infused mashed potatoes.</p>
            </div>

            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 44.000</span>
                <h3 class="text-white"><a href="#" class="text-white">Chicken Parmesan</a></h3>
                <p class="text-white text-opacity-7">Breaded and crispy chicken breast, topped with marinara sauce and melted mozzarella cheese. Served over a bed of al dente spaghetti with a side of garlic bread.</p>
            </div>
            </div>
            <div class="col-md-6">
            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 250.000</span>
                <h3 class="text-white text-white">Grilled Salmon Steak</a></h3>
                <p class="text-white text-opacity-7">A succulent salmon steak, marinated with herbs and spices, grilled to perfection. Served with a side of lemon butter sauce, roasted vegetables, and garlic mashed potatoes.</p>
            </div>

            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 50.000</span>
                <h3 class="text-white"><a href="#" class="text-white">Beef Tenderloin Medallions</a></h3>
                <p class="text-white text-opacity-7">Tender slices of beef tenderloin, cooked to your desired doneness. Accompanied by a rich red wine reduction sauce, sautéed wild mushrooms, and creamy truffle-infused mashed potatoes.</p>
            </div>

            <div class="food-menu mb-5">
                <span class="d-block text-primary h4 mb-3">IDR 44.000</span>
                <h3 class="text-white"><a href="#" class="text-white">Chicken Parmesan</a></h3>
                <p class="text-white text-opacity-7">Breaded and crispy chicken breast, topped with marinara sauce and melted mozzarella cheese. Served over a bed of al dente spaghetti with a side of garlic bread.</p>
            </div>
            </div>
        </div>
        </div>
        <a href="{{ url('/Restaurant') }}" class="btn btn-outline-secondary card-button mt-3" role="submit" style="border: 2px solid rgba(197, 168, 128, 1);">Order Meal</a>
    </div>
    </div>
</div>


<div class="bg-subtle" style="background-color: rgb(248,244,244);">
<div class="container d-flex justify-content-center align-items-center">
<div class="position-relative mt-5 md-2">
<h2 class="mt-3 md-3 text-center text-center" style="font-size: 50px; font-family: 'Lucida Bright', sans-serif; font-weight: bold; margin-bottom: 30px;">What They Say?</h2>
    </div>
        <div class="testimonial-slider">
            <div class="testimonial-card">
                <img src="testimonial1.jpg" alt="Testimonial 1">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <span>John Doe</span>
            </div>
            <div class="testimonial-card">
                <img src="testimonial2.jpg" alt="Testimonial 2">
                <p>Quisque fermentum metus quis lorem varius, sit amet tincidunt.</p>
                <span>Jane Smith</span>
            </div>
            <div class="testimonial-card">
                <img src="testimonial1.jpg" alt="Testimonial 1">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <span>John Doe</span>
            </div>
            <div class="testimonial-card">
                <img src="testimonial2.jpg" alt="Testimonial 2">
                <p>Quisque fermentum metus quis lorem varius, sit amet tincidunt.</p>
                <span>Jane Smith</span>
            </div>
        </div>
    </div>
</div>

<div class="bg-subtle with-overlay" style="background-image: url('img/place/Hotel1.jpg'); background-attachment: fixed; background-size: 100% 100%; padding: 150px 0; position: relative;">
<div class="dark-overlay" style="background-color: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
<div class="container">
    <div class="row align-items-center">
    <div class="col-12 col-md-6 text-center mb-4 mb-md-2 text-md-left">
        <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
    </div>
    <div class="col-12 col-md-6 text-center text-md-right">
        <a href="{{ url('/Rooms') }}" class="cta-button" style="border: 2px solid #fff; background: transparent; text-decoration: none;">Book Now</a>
    </div>

    </div>
</div>

@endsection


