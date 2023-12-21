@extends('dashboardAdmin')

@section('content')
<div class="content" style="margin-left: 250px; padding: 20px;">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Manage Menu</h1>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Menu Details
            </div>
            <div class="card-body">
                <form id="menuForm" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="menuName" class="col-sm-2 col-form-label">Menu Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="menuName" name="name" placeholder="Enter menu name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="menuDesc" class="col-sm-2 col-form-label">Menu Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="menuDesc" name="desc" placeholder="Enter menu description" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="menuPrice" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="menuPrice" name="price" placeholder="Enter price" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="menuImage" class="col-sm-2 col-form-label">Menu Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="menuImage" name="image" accept="image/*" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#menuForm').submit(function(event) {
            event.preventDefault();

            // Use AJAX to send form data to the server for saving/updating
            const formData = new FormData(this);
            $.ajax({
                url: '/api/menus', // Replace with your API endpoint
                method: 'POST', // Change method based on your requirement
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log('Menu saved successfully');
                    // Optionally update UI or perform other actions upon success
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    // Handle errors or display error message
                }
            });
        });
    });
</script>

@endsection
