<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdsController extends Controller
{
    /**
     * Display a listing of the ads.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->user_type === 1) {
            // Admin: Show all ads
            $ads = Ad::all();
        } else {
            // Non-admin: Show only ads created by the current user
            $ads = Ad::where('user_id', $user->id)->get();
        }

        return view('admin.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new ad.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ads.create');
    }

    /**
     * Store a newly created ad in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
            'website' => 'required|url|max:255',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('ads', 'public');
        }

        Ad::create([
            'user_id' => Auth::id(),
            'image' => $imagePath ?? null,
            'title' => $validated['title'],
            'website' => $validated['website'],
        ]);

        return redirect()->route('ads.index')->with('success', 'Ad created successfully!');
    }

    /**
     * Show the form for editing the specified ad.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad::findOrFail($id);
        $user = Auth::user();

        if ($user->user_type !== 1 && $ad->user_id !== $user->id) {
            return redirect()->route('ads.index')->with('error', 'Unauthorized access.');
        }

        return view('admin.ads.edit', compact('ad'));
    }

    /**
     * Update the specified ad in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
            'website' => 'required|url|max:255',
        ]);

        $ad = Ad::findOrFail($id);
        $user = Auth::user();

        if ($user->user_type !== 1 && $ad->user_id !== $user->id) {
            return redirect()->route('ads.index')->with('error', 'Unauthorized access.');
        }

        if ($request->hasFile('image')) {
            if ($ad->image) {
                \Storage::disk('public')->delete($ad->image);
            }
            $imagePath = $request->file('image')->store('ads', 'public');
        } else {
            $imagePath = $ad->image;
        }

        $ad->update([
            'image' => $imagePath,
            'title' => $validated['title'],
            'website' => $validated['website'],
        ]);

        return redirect()->route('ads.index')->with('success', 'Ad updated successfully!');
    }

    /**
     * Remove the specified ad from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad = Ad::findOrFail($id);
        $user = Auth::user();

        if ($user->user_type !== 1 && $ad->user_id !== $user->id) {
            return redirect()->route('ads.index')->with('error', 'Unauthorized access.');
        }

        if ($ad->image) {
            \Storage::disk('public')->delete($ad->image);
        }

        $ad->delete();

        return redirect()->route('ads.index')->with('success', 'Ad deleted successfully!');
    }
}
