@extends('dashboard')
@section('content')

<section class="section-background" style="background-color: rgb(244, 244, 244);">
<br>
<br>
<br>

<div class="container py-5">
<h2 class="custom-h2 text-center mt-3 md-2" style="font-size: 20; font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Hello {{Auth::user()->name}}</h2>
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="{{ asset(Auth::user()->image_user ?? 'images/avatar.jpg') }}" alt="avatar"
              class="rounded-circle img-fluid border b-solid " style="width: 150px;">
            <h5 class="my-3">{{Auth::user()->name}}</h5>
            <p class="text-muted mb-1">User ID: {{Auth::id()}}</p>
            <p class="text-muted mb-4">{{Auth::user()->address}}</p>
            <div class="d-flex justify-content-center mb-2">
            <button type="button" class="btn btn-outline-secondary card-button ms-1" onclick="changeUserDetails()">Change User Details</button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <p class="mb-0">{{Auth::user()->website_user ?? '-'}}</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                <p class="mb-0">{{Auth::user()->instagram_user ?? '-'}}</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                <p class="mb-0">{{Auth::user()->facebook_user ?? '-'}}</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::user()->name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::user()->email}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::user()->phone_number}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Tanggal Lahir</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::user()->date_of_birth}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::user()->gender}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::user()->address}}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">History</span> Room Booking History
                </p>
                  @foreach($reservations as $reservation)
                      <p class="mt-4 mb-0">{{$reservation->name_room}} - {{$reservation->adult_guest}} Guest</p>
                      <p class="mt-0 mb-0 small">Check In: {{\Carbon\Carbon::parse($reservation->check_in)->format('Y-m-d')}}, Check Out: {{\Carbon\Carbon::parse($reservation->check_out)->format('Y-m-d')}}</p>
                      <p class="mt-0 mb-0 small">Pembayaran: {{$reservation->payment}}</p>
                  @endforeach
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Menu</span> Order History
                </p>
                <div id="orderHistory">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
        var nav = document.querySelector('nav');
        nav.style.backgroundColor = 'rgba(34, 34, 34, 1.0)';
        nav.classList.add('shadow');
    </script>
    <script>
  function changeUserDetails() {

    window.location.href = '/profile/edit';
  }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
 const id_user = "{{ Auth::user()->id }}";
$(document).ready(function() {
    // Make an AJAX request to fetch the user's order history
    $.ajax({
        url: `/api/ordersByUser/${id_user}`,
        method: 'GET',
        success: function(response) {
            if (response.data) {
                const orders = response.data;
                const orderHistory = $('#orderHistory');

                orders.forEach(order => {
                    // Fetch menu details based on order's menu_id
                    $.ajax({
                        url: `/api/menus/${order.id_menu}`, // Replace with your API endpoint to fetch menu details
                        method: 'GET',
                        success: function(menuResponse) {
                            if (menuResponse.data) {
                                const menuData = menuResponse.data;
                                const orderDetails = `<p>${menuData.name} <br />
                                Quantity: ${order.quantity} ||
                                Room Number: ${order.roomNumber}</p>`;
                                orderHistory.append(orderDetails);
                            } else {
                                console.error('Error fetching menu data');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                });
            } else {
                console.log('No order data found.');
            }
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});

</script>

@endsection
