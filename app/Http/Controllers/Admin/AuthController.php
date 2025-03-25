<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\MasterAdmin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {
    public function showLoginForm() {
        // $password = bcrypt('admin.123');
        // return $password;
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard')->with([
                'msg' => 1,
                'alert_data' => 'Welcome'
            ]);
        }

        return back()->with([
            'msg' => 2,
            'alert_data' => 'Invalid Credentials'
        ]);
    }
    
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with([
            'msg' => 1,
            'alert_data' => 'Logged out successfully!'
        ]); // Redirect to login after logout
    }
}