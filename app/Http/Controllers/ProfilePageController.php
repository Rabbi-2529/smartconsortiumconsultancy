<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfilePageController extends Controller
{
    /**
     * Show the profile page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    /**
     * Update the user's profile information.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */public function updateProfile(Request $request)
{
    // Validate request
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
        'address' => 'nullable|string|max:255',
        'city' => 'nullable|string|max:255',
        'state' => 'nullable|string|max:255',
        'postal_code' => 'nullable|string|max:20',
        'website' => 'nullable|url|max:255',
        'phone_number' => 'nullable|string|max:20',
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'bio' => 'nullable|string',
    ]);

    // Get the currently authenticated user
    $user = Auth::user();
    
    // Update user information
    $user->first_name = $request->input('first_name');
    $user->last_name = $request->input('last_name');
    $user->email = $request->input('email');
    $user->address = $request->input('address');
    $user->city = $request->input('city');
    $user->state = $request->input('state');
    $user->postal_code = $request->input('postal_code');
    $user->website = $request->input('website');
    $user->phone_number = $request->input('phone_number');
    $user->bio = $request->input('bio');

    // Handle profile image upload if present
    if ($request->hasFile('profile_image')) {
        $image = $request->file('profile_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload/profile_images'), $imageName);
        $user->profile_image = 'upload/profile_images/' . $imageName;
    }

    $user->save();

    return redirect()->back()->with('success', 'Profile updated successfully.');
}
    /**
     * Update the user's password.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully.');
    }
}