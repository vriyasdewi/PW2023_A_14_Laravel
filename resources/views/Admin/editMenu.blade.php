@extends('dashboardAdmin')

@section('content')
<div class="content" style="margin-left: 250px; padding: 20px;">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Menu</h1>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Menu Details
            </div>
            <div class="card-body">
                <form id="edit-menu-form" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Menu Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter menu name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="menuDesc" class="col-sm-2 col-form-label">Menu Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="desc" name="desc" placeholder="Enter menu description" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="menuPrice" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="menuImage" class="col-sm-2 col-form-label">Menu Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-end">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    const menuId = window.location.pathname.split('/').pop();

    $(document).ready(function() {
        // Fetch order details for editing
        $.ajax({
            url: `/api/menus/${menuId}`,
            method: 'GET',
            success: function(response) {
                if (response.data) {
                    const menu = response.data;

                    // Populate form fields with order details
                    $('#name').val(menu.name);
                    $('#desc').val(menu.desc);
                    $('#price').val(menu.price);
                } else {
                    console.log('No order data found.');
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });

        $('#edit-menu-form').submit(function(event) {
            event.preventDefault();

            const formData = new FormData(); // Create FormData object

            // Append fields to FormData
            formData.append('name', $('#name').val());
            formData.append('desc', $('#desc').val());
            formData.append('price', $('#price').val());

            // Check if image is present
            const image = $('#image')[0].files[0];
            if (image) {
                formData.append('image', image); // Append image to FormData
            }

            // Make AJAX request to update the menu
            $.ajax({
                url: `/api/menus/${menuId}`,
                method: 'PUT',
                data: formData,
                processData: false, // Don't process the data
                contentType: false, // Don't set content type (allows file uploads)
                success: function(response) {
                    console.log('Menu updated successfully');
                    // Optionally perform actions upon successful update
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    // Handle errors or display an error message
                }
            });
        });
    });
</script>

@endsection
