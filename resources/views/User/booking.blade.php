@extends('dashboard')
@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

<style>
.ftco-no-pb {
    padding-bottom: 0 !important;
}
.ftco-no-pt {
    padding-top: 0 !important;
}
.ftco-section {
    padding: 8em 0;
    position: relative;
    width: 100%;
    overflow-x: hidden;
}
.ftco-booking {
    margin-top: -800px;
}
*, *::before, *::after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
section {
    display: block;
}

.booking-form, .last-container {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0.7);
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    z-index: 1;
    background-color: #659dbd;
}

.last-container {
    top: 90%;
    background-color: #fbeec1 ; /* Adjust this value to control the vertical position */
}

img {
    width: 100%;
    ;
}

.icon {
    float: left;
}

.filed-data {
    background-color: #DAAD86;
}

/* Additional CSS for form fields with icons */
.form-field {
    position: relative;
}

.form-field .icon {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 10px; /* Adjust this value for icon spacing */
    z-index: 2; /* Place the icon above the input field */
}

.form-control {
    padding-left: 30px; /* Adjust this value to create space for the icon */
}
.btn {
    background-color: #8d8741; /* Change this color to your desired color */
    color: #fff; /* Text color */
    border: none;
    transition: background-color 0.3s ease;
}
.btn:hover {
    background-color: #fff; /* Change the background color on hover */
}

</style>
<div class="container-page">
<img src="{{ asset('img/place/Hotel3.jpg') }}" class="img">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="#" class="booking-form">
                <div class="row g-0">
                    <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4 filed-data">
                        <div class="form-group ps-4 border-0">
                            <label for="#">Check-in</label>
                            <div class="form-field">
                                <div class="icon"><span class="fa fa-calendar"></span></div>
                                <input type="text" id="from" name="from" class="form-control arrival_date datepicker-input" placeholder="Check-In Date">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4 filed-data">
                        <div class="form-group ps-4">
                            <label for="#">Check-Out</label>
                            <div class="form-field">
                                <div class="icon"><span class="fa fa-calendar"></span></div>
                                <input type="text" id="to" name="to" class="form-control arrival_date datepicker-input" placeholder="Check-Out Date">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4 filed-data">
                        <div class="form-group ps-4">
                            <label for="#">Rooms</label>
                            <div class="form-field">
                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                <select name="" id="" class="form-control">
                                    <option value="">Suite</option>
                                    <option value="">Deluxe Room</option>
                                    <option value="">Regular Room</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4 filed-data">
                        <div class="form-group ps-4">
                            <label for="#">Guests</label>
                            <div class="form-field">
                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                <select name="" id="" class="form-control">
                                    <option value="">1 Person</option>
                                    <option value="">2 Person</option>
                                    <option value="">3 Person</option>
                                    <option value="">4 Person</option>
                                    <option value="">5 Person</option>
                                    <option value="">6-9 Person</option>
                                    <option value="">10+ Person</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg d-flex">
                        <div class="form-group d-flex border-0">
                            <div class="form-field w-100 align-items-center d-flex">
                                <a href="/booking" type="submit" class="d-flex justify-content-center align-items-center align-self-stretch form-control btn py-lg-4 py-xl-0">
                                    <span>Booking Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container last-container">
    <h5>MENGAPA PESAN LANGSUNG DENGAN KAMI: </h5>
    <p>
        - Tarif yang diiklankan sudah termasuk pajak & biaya layanan, sarapan prasmanan setiap hari, layanan antar/jemput di wilayah Jogja (Bandara YIA).
        <br>
        - Tanpa Biaya Pemesanan
        <br>
        - Deposit sama dengan tarif malam pertama
        <br>
        - Fleksibilitas untuk membatalkan reservasi hingga 3 hari sebelum tanggal kedatangan tanpa penalti apa pun*
        * Fleksibilitas pembatalan 3 hari mungkin tidak berlaku untuk penawaran kamar tertentu seperti promosi pemesanan di muka (Harga Tidak Dapat Dikembalikan) dan memerlukan pembayaran penuh pada saat pemesanan.
    </p>
    <h5> Kebijakan Anak:</h5>
    <p> Sarapan gratis untuk maks. 2 anak di bawah 6 tahun</p>
    <h5> Fasilitas Gratis: </h5>
    <p>Akses Internet (Area Umum & Kamar Tamu), Pusat Kebugaran, Pusat Permainan & Area Parkir. </p>
    <h5>Hubungi Serenity Shores Hotel Yogyakarta</h5>
    <p>
        Alamat:
        <br>
        Telepon:
        <br>
        Email:
        <br>
        Website:
    </p>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
$( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  });
</script>
@endsection
