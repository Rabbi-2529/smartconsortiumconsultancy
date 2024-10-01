<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SocialLink;

class CustomAuthController extends Controller
{
    //
	
    public function loginView()
    {
        // Fetch social links from the database
        $socialLinks = SocialLink::all();
        return view('auth-login', compact('socialLinks'));
    }
    
    public function login(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $request->session()->put('custom_authenticated', true);
            return redirect()->intended('/admin');
        }
    
        // Redirect back with an error message
        return redirect()->route('login')->withErrors(['email' => 'Invalid credentials.'])->withInput();
    }

    public function logout(Request $request)
    {
        $request->session()->forget('custom_authenticated');
        Auth::logout();

        // Flash a message to the session
        $request->session()->flash('success', 'You have been logged out successfully.');

        return redirect()->route('login');
    }


}
