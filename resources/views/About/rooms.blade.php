@extends('dashboard')
@section('content')

<div class="content">
    <div class="background-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url(img/place/Hotel1.jpg); background-size: cover; background-position: center; position: relative;">
        <div class="content text-center" style="position: relative; z-index: 1;">
            <h1 class="text-white" style="font-size: 40px; font-family: 'Lucida Bright', sans-serif; font-weight: bold; margin-top: -50px;">Room & Suites</h1>
            <h2 class="text-white custom-h2" style="font-size: 60px; font-family: 'Lucida Bright', sans-serif; font-weight: bold; margin-top: 10px;">Seaside Serenity Awaits</h2>
        </div>
        @if(!Auth::user()->is_admin)
            <div class="hotel1" style="position: relative; z-index: 1;">
                <div class="cta-buttons">
                    <a href="#your-room" class="cta-button" style="text-decoration: none;">Get Your Room</a>
                </div>
            </div>
        @endif
    </div>

    <div  class="bg-subtle" style="padding-top: 60px; padding-bottom: 70px;">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="position-relative text-center">
                <h2 class="title" style="font-size: 50px; font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Make Your Order</h2>
                <p class="title" style="font-size: 20px;  font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Choose your favorite room and immediately book a room on the available booking form.</p>
            </div>
        </div>

<div class="container mt-4" style="max-width: 90%;">
    <div class="row">
        @foreach($rooms as $room)
            <div class="col-md-4 mb-4">
                <div class="card text-center card-hover">
                    <img src="{{ asset($room->image_room) }}" class="card-img-top img-fluid aspect-ratio" alt="Suite Room">
                    <div class="card-body">
                        <h3 class="card-title" style="font-size: 30px;  font-family: 'Lucida Bright', sans-serif; font-weight: bold;">{{$room->name_room}}</h3>
                        <p class="card-text">{{$room->descriptive_room}}</p>
                        <div style="text-align: right;">
                            <h3 class="card-text" style="font-size: 20px;">
                                <span class="badge badge-secondary">IDR {{ Number::currency($room->price, 'IDR') }}</span>
                            </h3>
                            <h3 class="card-text" style="font-size: 20px;">
                                <span class="badge badge-secondary">For {{ $room->capacity }} Adult</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
    </div>

    @if(!Auth::user()->is_admin)
        @if(Auth::user())
            <div id="your-room" class="bg-subtle" style="background-color: rgb(248, 244, 244);">
                <div class="container d-flex justify-content-center align-items-center">
                    <div class="position-relative mt-5 md-2">
                        <div class="card bg-white mt-4 mb-5">
                            <div class="card-body">
                                <form method="post" class="php-email-form">
                                    @csrf
                                    <h2 class="text-center custom-h2" style="font-size: 20; font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Book Your Room</h2>
                                    <p class="tagline mt-4">"Embark on a Journey to Exclusive Hotel Services: Share Your Info and Log In to Experience Luxury!"</p>
                                    <div class="row gy-3 mt-3">
                                        <input name="user_id" value="{{Auth::id()}}" hidden="">
                                        <div class="col-md-6">
                                            <label for="first_name"><strong>Name</strong></label>
                                            <input type="text" disabled class="form-control" value="{{Auth::user()->name}}" placeholder="Enter your first name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone"><strong>Phone</strong></label>
                                            <input type="tel" class="form-control" placeholder="Enter your phone number" value="{{Auth::user()->phone_number}}" disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email"><strong>Email</strong></label>
                                            <input type="text" class="form-control" placeholder="Enter your email" value="{{Auth::user()->email}}" disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="check_in"><strong>Check-In Date</strong></label>
                                            <input type="date" name="check_in" id="check_in" class="form-control" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="check_out"><strong>Check-Out Date</strong></label>
                                            <input type="date" name="check_out" id="check_out" class="form-control" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="adult_guest"><strong>Number of Adults</strong></label>
                                            <input type="number" name="adult_guest" id="adult_guest" class="form-control" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="child_guest"><strong>Number of Children</strong></label>
                                            <input type="number" name="child_guest" id="child_guest" class="form-control" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="room_id"><strong>Select Room (Suite/Regular/Deluxe)</strong></label>
                                            <select name="room_id" id="room_id" class="form-control" required>
                                                @foreach($rooms as $room)
                                                    <option value="{{$room->id}}">{{$room->name_room}} - {{Number::currency($room->price, 'IDR')}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="note"><strong>Pesan Tambahan</strong></label>
                                            <textarea name="note" id="note" class="form-control" placeholder="Pesan tambahan (opsional)"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label><strong>Payment Option</strong></label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment" id="payment" value="online" required>
                                                <label class="form-check-label" for="payment">
                                                    Payment Online
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment" id="payment" value="reception" required>
                                                <label class="form-check-label" for="payment">
                                                    Payment in Hotel Reception
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-outline-secondary card-button mt-4" type="submit" style="border: 2px solid rgba(197, 168, 128, 1);">Book Room</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div id="your-room" class="bg-subtle" style="background-color: rgb(248, 244, 244);">
                <div class="container d-flex justify-content-center align-items-center">
                    <div class="position-relative mt-5 md-2">
                        <div class="card bg-white mt-4 mb-5">
                            <div class="card-body">
                                <h2 class="text-center custom-h2" style="font-size: 20; font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Book Your Room</h2>
                                <p>Please log in first to book</p>
                                <a href="{{ route('login') }}">
                                    Login
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
</div>
@endsection
