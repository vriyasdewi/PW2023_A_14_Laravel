
@extends('dashboard')
@section('content')

    <div class="content">
        <div class="background-image w-100 vh-100 d-flex justify-content-center align-items-center"
            style="background-image: url(img/place/Hotel1.jpg); background-size: cover; background-position: center; position: relative;">
            <div class="content text-center" style="position: relative; z-index: 1;">
                <h1 class="text-white"
                    style="font-size: 40px;  font-family: 'Lucida Bright', sans-serif; font-weight: bold; margin-top: -50px;">
                    Welcome Back</h1>
                <h2 class="text-white custom-h2"
                    style="font-size: 60px; font-family: 'Lucida Bright', sans-serif; font-weight: bold; margin-top: 10px;">
                    Seaside Serenity Awaits</h2>
            </div>
            <div class="hotel1" style="position: relative; z-index: 1;">
                <div class="cta-buttons">
                    <a href="#login-go" class="cta-button" style="text-decoration: none;">Get Started</a>
                </div>
            </div>
        </div>

        <div id="login-go" class="bg-subtle" style="padding-top: 60px; padding-bottom: 70px;">
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row justify-content-between gy-4">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                        <div class="content">
                            <h2 class="custom-h2"
                                style="font-size: 30; font-family: 'Lucida Bright', sans-serif; font-weight: bold;">
                                Embrace the Extraordinary: A Warm Return to Our Hotel Paradise!</h2>
                            <p>Serenity Shores, where paradise meets perfection. Our breathtaking beachfront haven
                                offers you a world of opulence, where every moment is a treasure. Be enchanted by the
                                serene, panoramic ocean views and the gentle whispers of the sea breeze that caress your
                                soul.
                            <p>Our elegantly appointed rooms, world-class amenities, and dedicated staff ensure you're
                                cocooned in relaxation and luxury. Your journey at Serenity Shores begins with an
                                embrace of tranquility, where the ordinary transforms into extraordinary.</p>
                        </div>
                    </div>

                    <div class="col-lg-5" data-aos="fade">
                        <div class="card bg-white">
                            <div class="card-body">
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <h2 class="custom-h2"
                                        style="font-size: 20; font-family: 'Lucida Bright', sans-serif; font-weight: bold;">
                                        Please Login Your Account</h2>
                                    <p class="tagline mt-4">"Embark on a Journey to Exclusive Hotel Services: Share Your
                                        Info and Log In to Experience Luxury!"</p>
                                    <div class="row gy-3 mt-3">
                                        <div class="col-md-12 mt-3">
                                            <label for="email"><strong>Email</strong></label>
                                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                                placeholder="someone@example.com" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="password"><strong>Password</strong></label>
                                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                                placeholder="Enter your password" required autocomplete="current-password">
                                            @error('password')
                                            <span>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <div class="sent-message mt-3">If you don't have an account, you can
                                                register first!
                                            </div>
                                            <button class="btn btn-outline-secondary card-button mt-4" role="submit"
                                                    style="border: 2px solid rgba(197, 168, 128, 1);">Log In
                                            </button>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="{{ route('register') }}"
                                            class="btn btn-outline-secondary card-button mt-4" role="button"
                                            style="background-color: transparent; border: 2px solid rgba(197, 168, 128, 1); color: rgba(197, 168, 128, 1);">Register </a>
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
