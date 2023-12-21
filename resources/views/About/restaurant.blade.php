@extends('dashboard')
@section('content')

<style>
    img {
        height: 200px;
    }

    section {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .transparent-container {
        background-color: rgba(255, 255, 255, 0.1);
    }
</style>

<div class="content">
    <div class="background-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url(img/place/Hotel1.jpg); background-size: cover; background-position: center; position: relative;">
        <div class="content text-center" style="position: relative; z-index: 1;">
            <h1 class="text-white" style="font-size: 40px; font-family: 'Lucida Bright', sans-serif; font-weight: bold; margin-top: -50px;">Restaurant Serenity</h1>
            <h2 class="text-white custom-h2" style="font-size: 60px; font-family: 'Lucida Bright', sans-serif; font-weight: bold; margin-top: 10px;">Seaside Serenity Awaits</h2>
        </div>
        <div class="hotel1" style="position: relative; z-index: 1;">
            <div class="cta-buttons">
                <a href="#meal" class="cta-button" style="text-decoration: none;">Get Your Meal</a>
            </div>
        </div>
    </div>

    <div id="meal" class="bg-subtle" style="padding-bottom: 70px;">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="position-relative">

            </div>
        </div>
    </div>
</div>

<section>
    <div class="container transparent-container">
        <h2 class="title text-center" style="font-size: 50px; font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Our Menu</h2>
        <hr>
        <br>
        <div class="row" id="menuContainer">
        </div>
        <div class="container transparent-container">
            <h2 class="title text-center" style="font-size: 50px; font-family: 'Lucida Bright', sans-serif; font-weight: bold;">Order Form</h2>
            <hr>
            <br>
            <div class="card mb-4">
                <div class="card-header">
                    Order Details
                </div>
                <div class="card-body">
                    <form id="orderForm" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label for="menuName" class="col-sm-2 col-form-label">Select Menu :</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="selectMenu" name="id_menu" required>
                                    <!-- Dropdown options will be populated dynamically here -->
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="menuDesc" class="col-sm-2 col-form-label">Quantity</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="The item Quantity" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="menuPrice" class="col-sm-2 col-form-label">Room Number</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="roomNumber" name="roomNumber" placeholder="The Room Number To Delivered to" required>
                            </div>
                        </div>
                        <input type="hidden" id="userId" name="id_user" value="{{ Auth::user()->id }}">
                        <div class="row mb-3">
                            <div class="col-sm-12 text-end">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $.ajax({
        url: '/api/menus',
        method: 'GET',
        success: function(response) {
            if (response.data) {
                const menus = response.data;
                const menuContainer = $('#menuContainer');
                let itemCount = 0; // Counter to track items

                menus.forEach(menu => {
                    if (itemCount % 3 === 0) {
                        // If itemCount is a multiple of 3, start a new row
                        menuContainer.append('<div class="row">');
                    }

                    const card = `
                        <div class="col col-md-4 mb-4">
                            <div class="card card-sm">
                                <img src="${menu.image}" class="card-img-top" alt="${menu.name}">
                                <div class="card-body">
                                    <h5 class="card-title">${menu.name}</h5>
                                    <p class="card-text">${menu.desc}</p>
                                    <p class="card-text">Price: Rp. ${menu.price}</p>
                                </div>
                            </div>
                        </div>
                    `;

                    menuContainer.append(card);
                    itemCount++;

                    if (itemCount % 3 === 0) {
                        // If itemCount reaches 3 items, close the row
                        menuContainer.append('</div>');
                    }
                });

                if (itemCount % 3 !== 0) {
                    // Close the row if itemCount is not a multiple of 3 (for remaining items)
                    menuContainer.append('</div>');
                }
            } else {
                // Handle case where no data is returned
                console.log('No menu data found.');
            }
        },
        error: function(xhr, status, error) {
            // Handle error cases
            console.error(error);
        }
    });
</script>


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

<script>
    $(document).ready(function() {
        $.ajax({
            url: '/api/menus',
            method: 'GET',
            success: function(response) {
                if (response.data) {
                    const menus = response.data;
                    const selectMenuDropdown = $('#selectMenu'); // Replace with your dropdown ID

                    menus.forEach(menu => {
                        const option = `<option value="${menu.id}">${menu.name}</option>`;
                        selectMenuDropdown.append(option);
                    });
                } else {
                    // Handle case where no data is returned
                    console.log('No menu data found.');
                }
            },
            error: function(xhr, status, error) {
                // Handle error cases
                console.error(error);
            }
        });

        // Add the logic for submitting the form here (order creation on button click)
        $('#orderForm').submit(function(event) {
        event.preventDefault();
        const formData = new FormData(this);

        $.ajax({
            url: '/api/orders',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Order added successfully:', response);
                window.location.href = '/profile'; // Redirect to profile view
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                // Handle errors or display an error message
            },
            complete: function() {
                console.log('Request completed.'); // Log completion to check order of execution
            }
        });
    });
    });
</script>


@endsection
