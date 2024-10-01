<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobOpportunity;
use Illuminate\Support\Facades\Storage; // <-- Add this line

class JobOpportunityController extends Controller
{
    public function index()
    {
        $jobOpportunities = JobOpportunity::latest()->get();
        return view('admin.job_opportunities.index', compact('jobOpportunities'));
    }

    public function show(JobOpportunity $jobOpportunity)
    {
        $jobOpportunities = JobOpportunity::latest()->get();
        return view('admin.job_opportunities.index', compact('jobOpportunities'));
    }

    public function create()
    {
        return view('admin.job_opportunities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'vacancy' => 'required|integer',
            'experience' => 'required|string|max:255',
            'job_type' => 'required|string|max:255',
            'salary' => 'required|string',
            'deadline' => 'required|date',
            'location' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'required|string',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('job_opportunities', 'public');
        }

        JobOpportunity::create($data);

        return redirect()->route('job-opportunities.index')->with('success', 'Job opportunity added successfully.');
    }

    public function edit(JobOpportunity $jobOpportunity)
    {
        return view('admin.job_opportunities.edit', compact('jobOpportunity'));
    }

    public function update(Request $request, JobOpportunity $jobOpportunity)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'vacancy' => 'required|integer',
            'experience' => 'required|string|max:255',
            'job_type' => 'required|string|max:255',
            'salary' => 'required|string',
            'deadline' => 'required|date',
            'location' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'required|string',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('job_opportunities', 'public');
        }

        $jobOpportunity->update($data);

        return redirect()->route('job-opportunities.index')->with('success', 'Job opportunity updated successfully.');
    }

    public function destroy(JobOpportunity $jobOpportunity)
    {
        if ($jobOpportunity->image) {
            Storage::disk('public')->delete($jobOpportunity->image); // Correct disk usage
        }
        $jobOpportunity->delete();

        return redirect()->route('job-opportunities.index')->with('success', 'Job opportunity deleted successfully.');
    }
}
