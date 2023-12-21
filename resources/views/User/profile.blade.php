@extends('dashboard')
@section('content')

<style>
  .section-background {
  background-image: url('img/place/Hotel1.jpg');
  background-size: cover; 
  background-repeat: no-repeat; 
  background-attachment: fixed;
}

.custom-navbar {
    background-color: rgba(34, 34, 34, 1.0);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
}

section{
  width: 100%;
  height: 900px;
}
</style>

<section class="section-background">
  <br>
  <br>
  <br>
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid border b-solid" style="width: 150px;">
            <h5 class="my-3">John Smith</h5>
            <p class="text-muted mb-1">User ID: 12323123</p>
            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-outline-primary ms-1">Change User Details</button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <p class="mb-0">https://SerenityShores.com</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                <p class="mb-0">jhon_smith</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                <p class="mb-0">the_mrJohn</p>
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
                <p class="text-muted mb-0">Johnatan Smith</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">example@example.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(097) 234-5678</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Tanggal Lahir</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">04-12-1995</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Laki-Laki</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
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
                <p class="mb-1" style="font-size: .77rem;">Regular Room - 6 Person</p>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Regular Room - 3 Person </p>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Regular Room - 4 Person</p>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Deluxe Room -4 Person</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Menu</span> Order History
                </p>
                <p class="mb-1" style="font-size: .77rem;">Nasi Goreng - 5 Porsi</p>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mie Goreng - 2 Porsi </p>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mocktail - 6 Porsi</p>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Cocktail - 4 Porsi</p>
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
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.style.backgroundColor = 'rgba(34, 34, 34, 1.0)';
                nav.classList.add('shadow');
            } else {
                nav.style.backgroundColor = 'rgba(34, 34, 34, 1.0)';
                nav.classList.add('shadow');
            }
        });
    </script>

@endsection