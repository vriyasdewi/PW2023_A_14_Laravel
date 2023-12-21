@extends('dashboard')
@section('content')

<section class="section-background" style="background-color: rgb(244, 244, 244);">
<br>
<br>
<br>

<div class="container py-5">
<h2 class="custom-h2 mb-4 mt-3 md-2" style="font-size: 20; font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Edit Profile</h2>
    <form method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <div class="form-group">
                  <input type="text" required class="form-control" name="name" value="{{Auth::user()->name}}">
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <div class="form-group">
                  <input type="email" required class="form-control" name="email" value="{{Auth::user()->email}}">
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <div class="form-group">
                  <input type="tel" required class="form-control" name="phone_number" value="{{Auth::user()->phone_number}}">
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Tanggal Lahir</p>
              </div>
              <div class="col-sm-9">
                <div class="form-group">
                  <input type="date" required class="form-control" name="date_of_birth" value="{{Auth::user()->date_of_birth}}">
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-9">
                <div>
                  <input type="radio" id="male" name="gender" value="male" @if(Auth::user()->gender == 'male') checked @endif>
                  <label for="male">Man</label>
                </div>
                <div>
                  <input type="radio" id="female" name="gender" value="female" @if(Auth::user()->gender == 'female') checked @endif>
                  <label for="female">Woman</label>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <div class="form-group">
                  <textarea required class="form-control" name="address">{{Auth::user()->address}}</textarea>
                </div>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Profile Picture</p>
              </div>
              <div class="col-sm-9">
              <input type="file" name="image_user" id="image_user" class="form-control" accept="image/*" placeholder="Choose Picture">
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Website</p>
              </div>
              <div class="col-sm-9">
                <div class="form-group">
                  <input type="text" class="form-control" name="website_user" value="{{Auth::user()->website_user}}">
                </div>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Instagram</p>
              </div>
              <div class="col-sm-9">
                <div class="form-group">
                  <input type="text" class="form-control" name="instagram_user" value="{{Auth::user()->instagram_user}}">
                </div>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Facebook</p>
              </div>
              <div class="col-sm-9">
                <div class="form-group">
                  <input type="text" class="form-control" name="facebook_user" value="{{Auth::user()->facebook_user}}">
                </div>
              </div>
            </div>
            <hr>

            <div class="row mt-4">
              <div class="col-sm-3 pl-2 ml-1">
                <button type="submit" class="btn btn-outline-secondary card-button ms-1">Save</button>
                <a class="btn btn-outline-secondary card-button ms-1" href="/profile">Cancel</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</section>

<script type="text/javascript">
        var nav = document.querySelector('nav');
        nav.style.backgroundColor = 'rgba(34, 34, 34, 1.0)';
        nav.classList.add('shadow');
    </script>
    <script>
  function changeUserDetails() {

    window.location.href = '/EditProfile';
  }
</script>

@endsection
