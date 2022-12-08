<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function getDashboard(){
        return view('admin.dashboard');
    }

    public function manageUsers(){
        $viewData = array();
        $viewData['users'] = UserController::listUsers();
        return view('admin.users')->with('viewData', $viewData);
    }

    public function manageProcedures(){
        return view('admin.procedures');
    }

    public function manageForms(){
        return view('admin.forms');
    }
}