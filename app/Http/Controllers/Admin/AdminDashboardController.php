<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //Show Admin Dashboard
    public function adminDashboardShow(){
        return view("admin.dashboard");
    }
}
