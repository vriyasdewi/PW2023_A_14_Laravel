@extends('dashboardAdmin')

@section('content')
<div class="content" style="margin-left: 250px; padding: 20px;">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Manage Orders</h1>

        <div class="card mb-4">
            <div class="card-header">
                Edit Order Details
            </div>
            <div class="card-body">
                <form id="orderForm" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="selectMenu" class="col-sm-2 col-form-label">Menu</label>
                        <div class="col-sm-10" style="width:max-content">
                            <select class="form-select" id="selectMenu" name="id_menu" required>
                                <!-- Dropdown options will be populated dynamically here -->
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="selectUser" class="col-sm-2 col-form-label">User</label>
                        <div class="col-sm-10" style="width:max-content">
                            <select class="form-select" id="selectUser" name="id_menu" required>
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
                    <div class="row mb-3">
                        <label for="menuStatus" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <input type="input" class="form-control" id="status" name="status" placeholder="status" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-end">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    const orderId = window.location.pathname.split('/').pop();

    $(document).ready(function() {
        // Fetch order details for editing
        $.ajax({
            url: `/api/orders/${orderId}`,
            method: 'GET',
            success: function(response) {
                if (response.data) {
                    const order = response.data;

                    // Populate form fields with order details
                    $('#selectMenu').val(order.id_menu);
                    $('#selectUser').val(order.id_user);
                    $('#quantity').val(order.quantity);
                    $('#roomNumber').val(order.roomNumber);
                    $('#status').val(order.status);
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


        $.ajax({
            url: '/api/users',
            method: 'GET',
            success: function(response) {
                if (response.data) {
                    const users = response.data;
                    const selectMenuDropdown = $('#selectUser'); // Replace with your dropdown ID

                    users.forEach(user => {
                        const option = `<option value="${user.id}">${user.name}</option>`;
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

        // Submit form data on Save button click
        $('#orderForm').submit(function(event) {
            event.preventDefault(); // Prevent default form submission behavior

            // Collect updated order details from the form
            const updatedOrder = {
                id_menu: $('#selectMenu').val(),
                id_user: $('#selectUser').val(),
                quantity: $('#quantity').val(),
                roomNumber: $('#roomNumber').val(),
                status: $('#status').val()
            };

            // Send PUT request to update order
            $.ajax({
                url: `/api/orders/${orderId}`,
                method: 'PUT',
                data: updatedOrder,
                success: function(response) {
                    console.log('Order updated successfully:', response);
                    // Redirect to a success page or handle as needed
                },
                error: function(xhr, status, error) {
                    console.error('Error updating order:', error);
                    // Handle error cases
                }
            });
        });
    });
</script>
@endsection
