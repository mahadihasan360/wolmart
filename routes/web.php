<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Admin
 */
Route::get("admin/dashboard",[AdminDashboardController::class, "adminDashboardShow"]) -> middleware("admin") -> name("admin.dashboard");
Route::get("admin/login",[AdminLoginController::class, "showAdminLoginForm"]) -> name("admin.login.form");
Route::get("admin",[AdminLoginController::class, "AdminLoginRedirect"]);
Route::post("admin/login",[AdminLoginController::class, "adminLoginSystem"]) -> name("admin.login");
Route::get("admin/logout",[AdminLoginController::class, "adminLogout"]) -> name("admin.logout");


/**
 * Admin Role Crud
 */
route::resource("role",RoleController::class);