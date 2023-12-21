@extends('dashboardAdmin')
@section('content')

<div class="content" style="margin-left: 250px; padding: 20px;">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Booking Room</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Room</li>
        </ol>

        <p>Selamat datang di halaman Booking Room. Di sini Anda dapat melakukan kelola ruangan baik dalam hal booking dan manajemen room.</p>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Table Type Room
            </div>
            <div class="card-body">
                <div class="table-container" style="overflow-x: hidden; height: 400px; overflow-y: scroll;">

                    <table class="table">
                        <button id="showModal" class="btn btn-primary mb-3 edit-button">Add Room</button>
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Gambar</th>
                                <th class="text-center">Name Room</th>
                                <th class="text-center">Descriptive Room</th>
                                <th class="text-center">Price Room / Night</th>
                                <th class="text-center">Amount of Persons</th>
                                <th class="text-center">Available Room</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rooms as $room)
                            <tr>
                                <td class="text-center">{{ $room->id }}</td>
                                <td class="text-center"><img src="{{ asset($room->image_room) }}" width="100" height="100"></td>
                                <td class="text-center">{{ $room->name_room }}</td>
                                <td class="text-center">{{ $room->descriptive_room }}</td>
                                <td class="text-center">IDR {{ $room->price }}</td>
                                <td class="text-center">For {{ $room->capacity }} Guest</td>
                                <td class="text-center">{{ $room->available_room }}</td>
                                <td class="text-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="{{ url('/admin/room/' . $room->id ) }}" class="btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <form action="{{ url('/admin/room/' . $room->id ) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Table Room Book
            </div>
            <div class="card-body">
                <div class="table-container" style="overflow-x: hidden; height: 400px; overflow-y: scroll;">
                    <table class="table">
                        <!-- <a href="#" class="btn btn-primary mb-3">Print Data</a> -->
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Nomor Kamar</th>
                                <th class="text-center">First Name</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Check-in Date</th>
                                <th class="text-center">Check-out Date</th>
                                <th class="text-center">Number of Adults</th>
                                <th class="text-center">Number of Children</th>
                                <th class="text-center">Room Selection</th>
                                <th class="text-center">Pesan Tambahan</th>
                                <th class="text-center">Pilihan Payment</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservations as $reservation)
                            <tr>
                                <td class="text-center">{{$reservation->id}}</td>
                                <td class="text-center">{{$reservation->room_number == 0 ? 'Belum Check In' : $reservation->room_number}}</td>
                                <td class="text-center">{{$reservation->name}}</td>
                                <td class="text-center">{{$reservation->phone_number}}</td>
                                <td class="text-center">{{$reservation->email}}</td>
                                <td class="text-center">{{$reservation->check_in}}</td>
                                <td class="text-center">{{$reservation->check_out}}</td>
                                <td class="text-center">{{$reservation->adult_guest}}</td>
                                <td class="text-center">{{$reservation->child_guest}}</td>
                                <td class="text-center">{{$reservation->name_room}}</td>
                                <td class="text-center">{{$reservation->note}}</td>
                                <td class="text-center">{{$reservation->payment}}</td>
                                <td class="text-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="{{ url('/admin/reservation/' . $reservation->id ) }}" class="btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <form action="{{ url('/admin/reservation/' . $reservation->id ) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div>
</div>


<div class="modal" id="modal" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <h2>Form Room</h2>
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="col mt-3">
                    <label for="name_room"><strong>Name Room</strong></label>
                    <input type="text" name="name_room" id="name_room" class="form-control" placeholder="Enter room name" required>
                </div>
                <div class="col mt-3">
                    <label for="descriptive_room"><strong>Descriptive Room</strong></label>
                    <textarea name="descriptive_room" id="descriptive_room" class="form-control" placeholder="Enter room description" required></textarea>
                </div>
                <div class="col mt-3">
                    <label for="price"><strong>Price Room / Night</strong></label>
                    <input type="number" name="price" id="price" class="form-control" placeholder="Enter price per night" required>
                </div>
                <div class="col mt-3">
                    <label for="capacity"><strong>Amount of Persons</strong></label>
                    <input type="number" name="capacity" id="capacity" class="form-control" placeholder="Enter the number of persons" required>
                </div>
                <div class="col mt-3">
                    <label for="available_room"><strong>Available Room</strong></label>
                    <input type="number" name="available_room" id="available_room" class="form-control" placeholder="Enter the number of available rooms" required>
                </div>
                <div class="col mt-3">
                    <label for="image_room"><strong>Room Image</strong></label>
                    <input type="file" name="image_room" id="image_room" class="form-control" accept="image/*" placeholder="Choose Picture" required>
                </div>
                <div class="modal-buttons text-center mt-5 md-3">
                    <button id="save-button" class="btn btn-primary" type="submit">Save</button>
                    <button id="close-button" class="btn btn-secondary" onclick="window.location.href='/admin/room'">Close</button>
                </div>
            </form>
        </div>
    </div>


    <script>
        const showModalButton = document.getElementById("showModal");
        const modal = document.getElementById("modal");
        const closeModalButton = document.getElementById("close-button");

        document.addEventListener("click", (e) => {
            if (e.target.classList.contains("edit-button")) {
                const roomId = e.target.getAttribute("data-id");
                modal.style.display = "block";
            }
        });

        closeModalButton.addEventListener("click", () => {
            modal.style.display = "none";
        });
    </script>


    @endsection
