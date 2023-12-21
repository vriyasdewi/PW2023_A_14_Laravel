@extends('dashboardAdmin')
@section('content')

<div class="content" style="margin-left: 250px; padding: 20px;">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Room Book</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Room</li>
        </ol>
        <p>Selamat datang di halaman Edit Room yang telah berstatus Book. Di sini Anda dapat melakukan Edit informasi mengenai Room terkait.</p>

    <form method="post" class="php-email-form">
        @csrf
        <div class="row gy-3 mt-3">

        <div class="col-md-6">
            <label for="first_name"><strong>Name</strong></label>
            <input disabled type="text" name="first_name" class="form-control" placeholder="Enter your first name" required value="{{$reservation->name}}">
        </div>
        <div class="col-md-6">
            <label for="phone"><strong>Phone</strong></label>
            <input type="tel" name="phone" class="form-control" placeholder="Enter your phone number" required value="{{$reservation->phone_number}}" disabled>
        </div>
        <div class="col-md-6">
            <label for="email"><strong>Email</strong></label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required value="{{$reservation->email}}" disabled>
        </div>
        <div class="col-md-6">
            <label for="check_in"><strong>Check-In Date</strong></label>
            <input type="date" name="check_in" id="check_in" class="form-control" required value="{{$reservation->check_in}}" >
        </div>
        <div class="col-md-6">
            <label for="check_out"><strong>Check-Out Date</strong></label>
            <input type="date" name="check_out" id="check_out" class="form-control" required value="{{$reservation->check_out}}" >
        </div>
        <div class="col-md-6">
            <label for="adult_guest"><strong>Number of Adults</strong></label>
            <input type="number" name="adult_guest" id="adult_guest" class="form-control" required value="{{$reservation->adult_guest}}" >
        </div>
        <div class="col-md-6">
            <label for="child_guest"><strong>Number of Children</strong></label>
            <input type="number" name="child_guest" id="child_guest" class="form-control" required value="{{$reservation->child_guest}}" >
        </div>
        <div class="col-md-6">
            <label for="room_id"><strong>Select Room (Suite/Regular/Deluxe)</strong></label>
            <select name="room_id" id="room_id" class="form-control" required value="{{$reservation->room_id}}">
                @foreach($rooms as $room)
                    <option value="{{$room->id}}">{{$room->name_room}} - {{Number::currency($room->price, 'IDR')}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12">
            <label for="note"><strong>Pesan Tambahan</strong></label>
            <input name="note" id="note" class="form-control" placeholder="Pesan tambahan (opsional)" value="{{$reservation->note}}" >
        </div>
        <div class="col-md-12">
            <label><strong>Payment Option</strong></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="payment_online" value="online" @if($reservation->payment == 'online') checked @endif>
                <label class="form-check-label" for="payment_online">
                    Payment Online
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="payment_reception" value="reception" @if($reservation->payment == 'reception') checked @endif>
                <label class="form-check-label" for="payment_reception">
                    Payment in Hotel Reception
                </label>
            </div>
        </div>

          <p class="col-md-12 mt-5 text-center"><strong>Please Input The Key Number of Room For Administration Check In</strong></p>


            <div class="col-md-12">
            <label for="keyRoom"><strong>Room Number of Key Room</strong></label>
            <input type="number" name="room_number" class="form-control" placeholder="Number of Key Room" required value="{{$reservation->room_number}}">
        </div>

          <div class="col-md-12 mt-5 text-center">
                <button id="save-button" class="btn btn-primary" type="submit">Save</button>
                <button id="close-button" class="btn btn-secondary" onclick="window.location.href='/admin/room'">Close</button>
            </div>

    </div>
</form>

<div>
</div>

@endsection

