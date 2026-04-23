<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class CourseController extends Controller
{
    public function index()
    {
        $course = Course::latest()->get();
        return view('admin.views.admin-course', compact('course'));
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
            $imagePath = $request->file('image')->store('course-images', 'public');
        }


        Course::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $imagePath,
            'description' => $request->description,
            'overview' => $request->overview,
            'status' => $request->status
        ]);

        return back()->with('success', 'Course added successfully!');
    }
    public function update(Request $request, Course $item)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:college_states,slug,' . $item->id,
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5048',
            'description' => 'required|string',
            'overview' => 'required|string',
            'status' => 'required|in:active,inactive'

        ]);

        $imagePath = $item->image;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('course-images', 'public');
        }



        $item->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $imagePath,
            'description' => $request->description,
            'overview' => $request->overview,
            'status' => $request->status
        ]);

        return back()->with('success', 'Course updated successfully!');
    }
    public function destroy(Course $item)
    {
        if ($item->image) {
            Storage::disk('public')->delete($item->image);
        }


        $item->delete();

        return back()->with('success', 'Course deleted successfully!');
    }
}
