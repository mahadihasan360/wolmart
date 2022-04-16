<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    /**
     * Show Admin Login Form
     */
    public function showAdminLoginForm(){
        return view("admin.login");
    }

    /**
     * Admin Login Redirect
     */
    public function AdminLoginRedirect(){
        return redirect() -> route("admin.login.form");
    }

    /**
     * Admin Login
     */
    public function adminLoginSystem(Request $request){

        if(Auth::guard("admin") -> attempt(["email" => $request -> email,"password" => $request -> password])){  
            return redirect() -> route("admin.dashboard");
        }else{
            return redirect() -> route("admin.login");
        }
    }

    /**
     * Admin Logout
     */
    public function adminLogout(){
        Auth::guard("admin") -> logout();
        return redirect() -> route("admin.login");
    }
}
