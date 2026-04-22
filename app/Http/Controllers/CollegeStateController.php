<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Models\CollegeState;
class CollegeStateController extends Controller
{
    public function index()
    {
        $collegeStates = CollegeState::latest()->get();
        return view('admin.views.admin-college-state', compact('collegeStates'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:college_states',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp|max:5048',
            'description' => 'required|string',
            'overview' => 'required|string',
            'status' => 'required|in:active,inactive'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('college-state-images', 'public');
        }


        CollegeState::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $imagePath,
            'description' => $request->description,
            'overview' => $request->overview,
            'status' => $request->status
        ]);

        return back()->with('success', 'College state added successfully!');
    }
    public function update(Request $request, CollegeState $collegeState)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:college_states,slug,' . $collegeState->id,
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5048',
            'description' => 'required|string',
            'overview' => 'required|string',
            'status' => 'required|in:active,inactive'

        ]);

        $imagePath = $collegeState->image;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('college-state-images', 'public');
        }



        $collegeState->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $imagePath,
            'description' => $request->description,
            'overview' => $request->overview,
            'status' => $request->status
        ]);

        return back()->with('success', 'College state updated successfully!');
    }
    public function destroy(CollegeState $collegeState)
    {
        if ($collegeState->image) {
            Storage::disk('public')->delete($collegeState->image);
        }


        $collegeState->delete();

        return back()->with('success', 'College state deleted successfully!');
    }
}
