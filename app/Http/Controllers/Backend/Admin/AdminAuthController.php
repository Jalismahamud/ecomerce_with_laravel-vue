<?php

namespace App\Http\Controllers\Backend\Admin;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm(Request $request)
    {
        return Inertia::render('Admin/Auth/Login');
    }

    public function login(Request $request)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password, 'isAdmin' => true])) {
            return redirect()->back()->with('error', 'Invalid Credentials. Try Again.');
        }

        return redirect()->route('admin.dashboard')->with('success', 'Login successful.');
    }

    public function logout(Request $request)
    {
        dd('runnig');
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect()->route('admin.login');
    }
}
