<?php

namespace App\Http\Controllers;

use App\Models\UpcomingEvent;
use Illuminate\Http\Request;

class UpcomingEventController extends Controller
{
    public function index()
    {
        $events = UpcomingEvent::all();
        return view('admin.upcoming_events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.upcoming_events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'image' => 'nullable|image|max:2048',
            'location' => 'required|string|max:255',
            'video' => 'nullable|string|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('event_images', 'public');
        }

        UpcomingEvent::create($data);

        return redirect()->route('upcoming_events.index')->with('success', 'Event added successfully.');
    }

    public function show(UpcomingEvent $upcomingEvent)
    {
        return view('admin.upcoming_events.show', compact('upcomingEvent'));
    }

    public function edit(UpcomingEvent $upcomingEvent)
    {
        return view('admin.upcoming_events.edit', compact('upcomingEvent'));
    }

    public function update(Request $request, UpcomingEvent $upcomingEvent)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'image' => 'nullable|image|max:2048',
            'location' => 'required|string|max:255',
            'video' => 'nullable|string|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('event_images', 'public');
        }

        $upcomingEvent->update($data);

        return redirect()->route('upcoming_events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy(UpcomingEvent $upcomingEvent)
    {
        if ($upcomingEvent->image) {
            \Storage::disk('public')->delete($upcomingEvent->image);
        }

        $upcomingEvent->delete();

        return redirect()->route('upcoming_events.index')->with('success', 'Event deleted successfully.');
    }
}