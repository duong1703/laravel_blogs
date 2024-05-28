<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Models\admin\LoginAdmin;
use Illuminate\Http\Request;
use Hash;
use Log;
use Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin/login');
    }

    public function loginPost(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $user = LoginAdmin::where('email', $email)->first();

        if ($user) {
            if (Hash::check($password, $user->password)) {
                $request->session()->put('name', $user->name);
                Log::info('User logged in successfully: ' . $user->email);
                return redirect()->route('home');
            } else {
                Log::warning('Password mismatch for user: ' . $email);
                return redirect()->back()->withInput($request->only('email'))->withErrors([
                    'password' => 'Password không chính xác.',
                ]);
            }
        } else {
            Log::warning('No user found with email: ' . $email);
            return redirect()->back()->withInput($request->only('email'))->withErrors([
                'email' => 'Email không chính xác.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/views/admin/login');
    }
}