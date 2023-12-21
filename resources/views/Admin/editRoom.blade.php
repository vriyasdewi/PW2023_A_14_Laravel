@extends('dashboardAdmin')
@section('content')

<div class="content" style="margin-left: 250px; padding: 20px;">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Room</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Room</li>
        </ol>
        <p>Selamat datang di halaman Edit Room. Di sini Anda dapat melakukan Edit informasi mengenai Room Hotel.</p>

        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="col mt-3">
                <label for="name_room"><strong>Name Room</strong></label>
                <input type="text" name="name_room" id="name_room" class="form-control" placeholder="Enter room name" required value="{{$room->name_room}}">
            </div>
            <div class="col mt-3">
                <label for="descriptive_room"><strong>Descriptive Room</strong></label>
                <input type="textarea" name="descriptive_room" id="descriptive_room" class="form-control" placeholder="Enter room description" value="{{$room->descriptive_room}}" required>
            </div>
            <div class="col mt-3">
                <label for="price"><strong>Price Room / Night</strong></label>
                <input type="number" name="price" id="price" class="form-control" placeholder="Enter price per night" required value="{{$room->price}}">
            </div>
            <div class="col mt-3">
                <label for="capacity"><strong>Amount of Persons</strong></label>
                <input type="number" name="capacity" id="capacity" class="form-control" placeholder="Enter the number of persons" required value="{{$room->capacity}}">
            </div>
            <div class="col mt-3">
                <label for="available_room"><strong>Available Room</strong></label>
                <input type="number" name="available_room" id="available_room" class="form-control" placeholder="Enter the number of available rooms" required value="{{$room->available_room}}">
            </div>
            <div class="col mt-3">
                <label for="image_room"><strong>Room Image</strong></label>
                <input type="file" name="image_room" id="image_room" class="form-control" accept="image/*" placeholder="Choose Picture">
            </div>
            <div class="modal-buttons text-center mt-5 md-3">
                <button id="save-button" class="btn btn-primary" type="submit">Save</button>
                <button id="close-button" class="btn btn-secondary" onclick="window.location.href='/admin/room'">Close</button>
            </div>
        </form>
    </div>
</div>

@endsection
