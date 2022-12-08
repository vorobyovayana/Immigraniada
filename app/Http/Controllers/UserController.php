<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    //
    public static function listUsers()
    {
        $viewData = array();
        $viewData['users'] = User::all();

        return $viewData;
    }

    public function singleUser($id)
    {
        $user = User::findorFail($id);

        return $user;
    }

    public function createUser(Request $formData)
    {
        $newUser = new User();

        $newUser->name = $formData->input('name');
        $newUser->email = $formData->input('email');
        $newUser->password = $formData->input('password');
        $newUser->immigrationPath = $formData->input('immigrationPath');
        if ($formData['role'] != null){
            $newUser->role = '1';
        } else {
            $newUser->role = '0';
        }
        $newUser->save();

        return back();
    }

    public function edit($id) {

        $user = User::findorFail($id);

        $viewData = array();
        $viewData["user"] = $user;

        return view('admin.edituser')
        ->with('viewData',$viewData);
    }

    public function updateUser(Request $formData, $id)
    {
        $userToUpdt = User::findorFail($id);

        $userToUpdt->name = $formData->input('name');
        $userToUpdt->email = $formData->input('email');
        $userToUpdt->password = $formData->input('password');
        $userToUpdt->immigrationPath = $formData->input('immigrationPath');
        $userToUpdt->role = $formData->input('role');

        $userToUpdt->save();
        
        $viewData['users'] = UserController::listUsers();
        return view('admin.users')->with('viewData', $viewData);
    }

    public function deleteUser($id) {
        User::destroy($id);
        return back();
    }
}
