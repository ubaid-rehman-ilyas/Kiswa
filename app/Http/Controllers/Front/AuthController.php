<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\MasterAdmin;

class AuthController extends Controller {
    public function showLoginForm() {
        // $password = bcrypt('admin.123');
        // return 123;
        // return view('front.auth.login');
    }

    public function login(Request $request) {
        $user = MasterAdmin::where('email',$request->email)->first();
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if($user)
        {
            if (Hash::check($request->password, $user->password)) {
                return redirect()->route('home');
            }
        }
        
        if (Auth::guard('web')->attempt($credentials)) {
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout() {
        Auth::guard('web')->logout();
        return redirect()->route('front.login');
    }
}
