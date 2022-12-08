@include('partials.dashboard-header')
@include('partials.dashboard-footer')

<div>
    <form method="POST" action="{{ route('user.create') }}">
        @csrf
        <br><table class="striped">
            <tr>
                <td>User Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td>Immigration Path</td>
                <td><input type="text" name="immigrationPath" placeholder="Do not add if admin"></td>
            </tr>
            <tr>
                <td>Admin</td>
                <td><input type="checkbox" name="role"></td>
            </tr>
        </table>
        <br><input type="submit" value="Add User" class="btn btn-outline-secondary">
</div>

<div style="width: 90%; padding: 10px;">
    <br><b>User list</b>
    <table class="table table-hover table-dark table-sm">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Immigration Path</th>
                <th scope="col">Role</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($viewData['users']['users'] as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['immigrationPath'] }}</td>
                <td>{{ $user['role'] }}</td>
                <td><a href=" {{ route('user.edit', $user['id']) }}">Edit</a></td>
                <td><a href=" {{ route('user.delete', $user['id']) }}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>