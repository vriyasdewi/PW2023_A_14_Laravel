@extends('dashboard')
@section('content')

<div class="content">
    <div class="background-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url(img/place/Hotel1.jpg); background-size: cover; background-position: center; position: relative;">
        <div class="content text-center" style="position: relative; z-index: 1;">
            <h1 class="text-white" style="font-size: 30px;  font-family: 'Lucida Bright', sans-serif; font-weight: bold; margin-top: -50px;">Join The Luxury Experience!</h1>
            <h2 class="text-white custom-h2" style="font-size: 60px; font-family: 'Lucida Bright', sans-serif; font-weight: bold; margin-top: 10px;">Seaside Serenity Awaits</h2>
        </div>
        <div class="hotel1" style="position: relative; z-index: 1;">
        <div class="cta-buttons">
            <a href="#register-go" class="cta-button" style="text-decoration: none;">Let's Join</a>
        </div>
</div>
</div>

<div id="register-go"  class="bg-subtle" style="padding-top: 60px; padding-bottom: 70px;">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row justify-content-between gy-4">
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                <div class="content">
                    <h2 class="custom-h2" style="font-size: 30; font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Your journey to extraordinary stays begins now!</h2>
                    <p>Creating your account with Serenity Shores isn't just about booking a room; it's about immersing yourself in the heartwarming embrace of a beachside paradise. As a registered member, you unlock the power to tailor your stay to your desires, from reserving the perfect room with an ocean view to receiving personalized recommendations for local adventures.
                    <p>Our commitment to your comfort and satisfaction goes beyond the ordinary, and it's all at your fingertips once you become a part of our Serenity Shores community. Join us, and let the harmonious symphony of lapping waves and the gentle caress of the sea breeze redefine your notion of a perfect beachside getaway. Your extraordinary experience awaits – create an account with us today and become part of the Serenity Shores family.</p>
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade">
    <div class="card bg-white">
        <div class="card-body">
        <form action="{{route('register')}}" method="post" class="php-email-form">
            @csrf
                <h2 class="custom-h2" style="font-size: 20; font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Please Create Your Account</h2>
                <p class="tagline mt-4">"Embark on a Journey to Exclusive Hotel Services: Share Your Info and Log In to Experience Luxury!"</p>
                <div class="row gy-3 mt-3">
                <div class="col-md-12 mt-3">
                        <label for="name"><strong>Name</strong></label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="col-md-12">
                        <label for="date_of_birth"><strong>Date of Birth </strong></label>
                        <input type="date" name="date_of_birth" class="form-control" placeholder="Date of Birth">
                    </div>
                    <div class="col-md-12">
                        <label for="phone"><strong>Phone Number</strong></label>
                        <input type="number" id="phone" class="form-control" name="phone" placeholder="Enter your phone number" required>
                    </div>
                    <div class="col-md-12">
                        <label for="email"><strong>Email</strong></label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="col-md-12">
                        <label for="gender"><strong>Gender</strong></label>
                        <div>
                            <input type="radio" id="male" name="gender" value="Man">
                            <label for="male">Man</label>
                        </div>
                        <div>
                            <input type="radio" id="female" name="gender" value="Woman">
                            <label for="female">Woman</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="address"><strong>Address</strong></label>
                        <input type="text" id="address" class="form-control" name="address" placeholder="Enter your address">
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="sent-message mt-3">You have filled in your personal data and you can enjoy our services. Please log in first!</div>
                        <button type="submit" class="btn btn-outline-secondary card-button mt-4" style="border: 2px solid rgba(197, 168, 128, 1);">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
