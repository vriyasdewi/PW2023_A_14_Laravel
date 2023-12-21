@extends('dashboardAdmin')
@section('content')
<div class="content" style="margin-left: 250px; padding: 20px;">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Meal Order</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Meal</li>
        </ol>

        <p>Selamat datang di halaman Beranda. Di sini Anda dapat menampilkan informasi penting tentang dashboard Anda.</p>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Table Restaurant Menu
            </div>
            <div class="card-body">
                <div class="table-container" style="height: 400px; overflow-y: scroll;">
                    <table class="table">
                        <a href="{{ route('menu_management') }}" class="btn btn-primary mb-3">Add Menu</a>
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Gambar</th>
                                <th class="text-center">Name Menu</th>
                                <th class="text-center">Menu Description</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="menuData">
                            <!-- This is where the data will be populated -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Table Restaurant Order List
            </div>
            <div class="card-body">
                <div class="table-container" style="height: 400px; overflow-y: scroll;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Nama Pelanggan</th>
                                <th class="text-center">Nomor Kamar</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="orderData">
                            <!-- This is where the room book data will be populated -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $.ajax({
            url: '/api/menus', // Replace with your API endpoint for fetching menu data
            method: 'GET',
            success: function(response) {
                if (response.data) {
                    const menus = response.data;
                    const menuData = $('#menuData');

                    menus.forEach(menu => {
                        // Create a row for each menu
                        const row = `
                            <tr>
                                <td class="text-center">${menu.id}</td>
                                <td class="text-center"><img src="${menu.image}" alt="Menu Image" style="max-width: 150px"></td>
                                <td class="text-center">${menu.name}</td>
                                <td class="text-center">${menu.desc}</td>
                                <td class="text-center">${menu.price}</td>
                                <td class="text-center">
                                    <div class="row">
                                        <div class="col-6">
                                        <a href="#" class="btn btn-primary mb-3 edit-menu-link" data-menu-id="${menu.id}">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <button id="delete-btn-menu"  class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        `;
                        menuData.append(row);
                    });

                    $('#menuData').on('click', '.edit-menu-link', function(event) {
                    event.preventDefault();
                    const menuId = $(this).data('menu-id');
                    const editUrl = `/editMenu/${menuId}`;
                    window.location.href = editUrl;
                    });

                } else {
                    // Handle case where no menu data is returned
                    console.log('No menu data found.');
                }
            },
            error: function(xhr, status, error) {
                // Handle error cases
                console.error(error);
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Function to fetch orders and users
        const fetchOrdersAndUsers = async () => {
            try {
                // Fetch orders
                const ordersResponse = await fetch('/api/orders');
                const ordersData = await ordersResponse.json();

                if (!ordersResponse.ok) {
                    console.error('Error fetching orders');
                    return;
                }

                const orders = ordersData.data;

                // Fetch users
                const usersResponse = await fetch('/api/users');
                const usersData = await usersResponse.json();

                if (!usersResponse.ok) {
                    console.error('Error fetching users');
                    return;
                }

                const users = usersData.data;

                // Map user IDs to user data for easier access
                const userMap = {};
                users.forEach(user => {
                    userMap[user.id] = user;
                });

                const orderData = $('#orderData');

                orders.forEach(order => {
                    const userData = userMap[order.id_user];
                    const editUrl = `/editOrder/${order.id}`;

                    const row = `
                    <tr data-order-id="${order.id}">
                        <td>${order.id}</td>
                        <td>${userData.name}</td>
                        <td>${order.roomNumber}</td>
                        <td>${order.quantity}</td>
                        <td>${order.status}</td>
                        <td>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-primary mb-3 edit-order-link" data-order-id="${order.id}">Edit</a>
                                </div>
                                <div class="col-6">
                                    <button class="delete-btn-order btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                `;
                    orderData.append(row);
                });

                $('#orderData').on('click', '.edit-order-link', function(event) {
                    event.preventDefault();
                    const orderId = $(this).data('order-id');
                    const editUrl = `/editOrder/${orderId}`;
                    window.location.href = editUrl;
                });
                // Delete button functionality
                $('.delete-btn-order').on('click', async function() {
                    const orderId = $(this).closest('tr').data('order-id');

                    try {
                        const deleteResponse = await fetch(`/api/orders/${orderId}`, {
                            method: 'DELETE'
                        });

                        if (deleteResponse.ok) {
                            // Remove the deleted row from the table
                            $(`tr[data-order-id="${orderId}"]`).remove();
                        } else {
                            console.error('Error deleting order');
                        }
                    } catch (error) {
                        console.error('Error deleting order:', error);
                    }
                });

            } catch (error) {
                console.error('Error:', error);
            }
        };

        // Fetch orders and users on document ready
        fetchOrdersAndUsers();
    });
</script>

@endsection
