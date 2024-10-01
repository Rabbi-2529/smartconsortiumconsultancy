<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MembershipController extends Controller
{
    /**
     * Display a listing of the memberships.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $memberships = Membership::all();
        return view('admin.memberships.index', compact('memberships'));
    }

    /**
     * Show the form for creating a new membership.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $existingMemberships = Membership::pluck('membership_type', 'id')->toArray();
        return view('admin.memberships.create', compact('existingMemberships'));
    }

    /**
     * Store a newly created membership in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'membership_type' => 'required|integer|in:1,2,3',
            'status' => 'required|integer|in:0,1,2',
            'price' => 'required|numeric|min:0',
        ]);

        // Check if membership type already exists
        if (Membership::where('membership_type', $validated['membership_type'])->exists()) {
            return Redirect::back()->withErrors(['membership_type' => 'This membership type already exists.']);
        }

        // Create the membership
        Membership::create($validated);

        // Reorder the membership IDs
        $this->reorderMembershipIDs();

        return Redirect::route('memberships.index')->with('success', 'Membership created successfully.');
    }

    /**
     * Display the specified membership.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $membership = Membership::findOrFail($id);
        return view('admin.memberships.show', compact('membership'));
    }

    /**
     * Show the form for editing the specified membership.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $membership = Membership::findOrFail($id);
        $existingMemberships = Membership::pluck('membership_type', 'id')->toArray();
        return view('admin.memberships.edit', compact('membership', 'existingMemberships'));
    }

    /**
     * Update the specified membership in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'membership_type' => 'required|integer|in:1,2,3',
            'status' => 'required|integer|in:0,1,2',
            'price' => 'required|numeric|min:0',
        ]);

        // Check if membership type already exists
        $existingMembership = Membership::where('membership_type', $validated['membership_type'])
                                        ->where('id', '!=', $id)
                                        ->exists();

        if ($existingMembership) {
            return Redirect::back()->withErrors(['membership_type' => 'This membership type already exists.']);
        }

        $membership = Membership::findOrFail($id);
        $membership->update($validated);

        return Redirect::route('memberships.index')->with('success', 'Membership updated successfully.');
    }

    /**
     * Remove the specified membership from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $membership = Membership::findOrFail($id);
        $membership->delete();

        // Reorder the membership IDs
        $this->reorderMembershipIDs();

        return Redirect::route('memberships.index')->with('success', 'Membership deleted successfully.');
    }

    /**
     * Reorder membership IDs starting from 1.
     *
     * @return void
     */
    protected function reorderMembershipIDs()
    {
        $memberships = Membership::orderBy('id')->get();
        $counter = 1;

        foreach ($memberships as $membership) {
            $membership->update(['membership_type' => $counter]);
            $counter++;
        }
    }
}
