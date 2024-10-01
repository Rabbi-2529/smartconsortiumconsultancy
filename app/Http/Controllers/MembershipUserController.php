<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class MembershipUserController extends Controller
{
    /**
     * Display a listing of the users with membership type 2.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve users with user_type set to 2
        $users = User::where('user_type', 2)->get();

        // Fetch all memberships to access membership type data
        $memberships = Membership::all()->keyBy('id');

        return view('admin.memberships_user.index', [
            'users' => $users,
            'memberships' => $memberships
        ]);
    }

    /**
     * Show the form for creating a new user with membership.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $memberships = Membership::all(); // Fetch all memberships for selection
    
        return view('admin.memberships_user.create', [
            'memberships' => $memberships,
            'membershipTypes' => Membership::membershipTypes()
        ]);
    }

    /**
     * Store a newly created user with membership in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate user and membership data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
            'membership_id' => 'required|exists:memberships,id',
            'membership_start_date' => 'nullable|date',
            'membership_end_date' => 'nullable|date|after_or_equal:membership_start_date',
            'status' => 'nullable|integer|in:0,1' // Assuming status is 0 (inactive) or 1 (active)
        ]);

        // Create the user with membership
        User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'phone' => $validated['phone'],
            'membership_id' => $validated['membership_id'],
            'membership_start_date' => $validated['membership_start_date'],
            'membership_end_date' => $validated['membership_end_date'],
            'status' => $validated['status'],
            'user_type' => 2 // Set user_type to 2 for membership users
        ]);

        return Redirect::route('membership-users.index')->with('success', 'User with membership created successfully.');
    }

    /**
     * Show the form for editing the specified user with membership.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $memberships = Membership::all(); // Fetch all memberships for selection

        return view('admin.memberships_user.edit', [
            'user' => $user,
            'memberships' => $memberships,
            'membershipTypes' => Membership::membershipTypes()
        ]);
    }

    /**
     * Update the specified user with membership in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'membership_id' => 'required|exists:memberships,id',
            'membership_start_date' => 'nullable|date',
            'membership_end_date' => 'nullable|date|after_or_equal:membership_start_date',
            'status' => 'nullable|integer|in:0,1',
            'password' => 'nullable|string|min:8|confirmed' // Password is optional during update
        ]);

        $user = User::findOrFail($id);

        // Update user with membership information
        $user->fill([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'membership_id' => $validated['membership_id'],
            'membership_start_date' => $validated['membership_start_date'],
            'membership_end_date' => $validated['membership_end_date'],
            'status' => $validated['status']
        ]);

        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        return Redirect::route('membership-users.index')->with('success', 'User with membership updated successfully.');
    }

    /**
     * Remove the specified user with membership from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete(); // Delete the user

        return Redirect::route('membership-users.index')->with('success', 'User with membership deleted successfully.');
    }
}
