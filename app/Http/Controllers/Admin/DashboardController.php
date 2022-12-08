<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function getDashboard(){
        return view('admin.dashboard');
    }

    public function manageUsers(){
        return view('admin.users');
    }

    public function manageProcedures(){
        return view('admin.procedures');
    }

    public function manageForms(){
        return view('admin.forms');
    }
}