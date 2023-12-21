@extends('dashboardAdmin')
@section('content')
<div class="content" style="margin-left: 250px; padding: 20px;">
    <div class="container-fluid px-4">
        
        <h1 class="mt-4">User Hotel</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">User</li>
        </ol>

        <p>Selamat datang di halaman Kelola User. Di sini Anda dapat menampilkan informasi penting mengenai seluruh user Hotel.</p>

        <!-- <a href="#" class="btn btn-primary mb-3">Add User</a> -->
        <table class="table">
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Name</th>
            <th class="text-center">Date of Birth</th>
            <th class="text-center">Phone Number</th>
            <th class="text-center">Email</th>
            <th class="text-center">Gender</th>
            <th class="text-center">Address</th>
            <th class="text-center">Admin or User</th>
            <th class="text-center">Facebook</th>
            <th class="text-center">Instagram</th>
            <th class="text-center">Website</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td class="text-center">{{ $user->id }}</td>
            <td class="text-center">{{ $user->name }}</td>
            <td class="text-center">{{ $user->date_of_birth }}</td>
            <td class="text-center">{{ $user->phone_number }}</td>
            <td class="text-center">{{ $user->email }}</td>
            <td class="text-center">{{ $user->gender }}</td>
            <td class="text-center">{{ $user->address }}</td>
            <td class="text-center">
                {{ $user->is_admin ? 'Admin' : 'User' }}
            </td>
            <td class="text-center">{{ $user->facebook_user }}</td>
            <td class="text-center">{{ $user->instagram_user }}</td>
            <td class="text-center">{{ $user->website_user }}</td>
            <td class="text-center">
                <form action="{{ url('/admin/user/' . $user->id ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
</div>
@endsection
