@include('partials.dashboard-header')
@include('partials.dashboard-footer')

<form method="POST" action="{{ route('user.update',$viewData['user']->id) }}">
    @csrf
    <table class="striped">
        <tr>
            <td>User Name</td>
            <td><input type="text" name="name" value="{{ $viewData['user']->name }}"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="{{ $viewData['user']->email }}"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password" value=""></td>
        </tr>
        <tr>
            <td>Immigration Path</td>
            <td><input type="text" name="immigrationPath" value="{{ $viewData['user']->immigrationPath }}"></td>
        </tr>
        <tr>
            <td>Role (0 = User; 1 = Admin)</td>
            <td><input type="text" name="role" value="{{ $viewData['user']->role }}"></td>
        </tr>

        <tr>
            <td colspan=2><input type="submit" value="Update User" class="btn btn-outline-secondary">
            </td>
        </tr>
    </table>