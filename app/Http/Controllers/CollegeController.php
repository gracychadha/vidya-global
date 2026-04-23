<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\CollegeState;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CollegesImport;

class CollegeController extends Controller
{
    /**
     * LIST PAGE
     */
    public function index()
    {
        $colleges = College::with('state')->latest()->get();
        $states = CollegeState::where('status', 'active')->get();

        return view('admin.views.admin-college', compact('colleges', 'states'));
    }

    /**
     * STORE (ADD COLLEGE)
     */
    public function store(Request $request)
    {
        $request->validate([
            'state_id' => 'required|exists:college_states,id',
            'name' => 'required|string|max:255',
            'slug' => 'nullable|unique:colleges,slug',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'email' => 'nullable|email',
            'type' => 'nullable|string|max:100',
            'naac_grade' => 'nullable|string|max:10',
            'address' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        // AUTO SLUG
        $slug = $request->slug ?: Str::slug($request->name);

        // HANDLE IMAGE
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('colleges', 'public');
        }

        College::create([
            'state_id' => $request->state_id,
            'name' => $request->name,
            'slug' => $slug,
            'image' => $imagePath,
            'email' => $request->email,
            'type' => $request->type,
            'naac_grade' => $request->naac_grade,
            'address' => $request->address,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'College added successfully');
    }

    /**
     * UPDATE
     */
    public function update(Request $request, $id)
    {
        $college = College::findOrFail($id);

        $request->validate([
            'state_id' => 'required|exists:college_states,id',
            'name' => 'required|string|max:255',
            'slug' => 'nullable|unique:colleges,slug,' . $college->id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'email' => 'nullable|email',
            'type' => 'nullable|string|max:100',
            'naac_grade' => 'nullable|string|max:10',
            'address' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        // SLUG
        $slug = $request->slug ?: Str::slug($request->name);

        // IMAGE UPDATE
        if ($request->hasFile('image')) {
            // delete old
            if ($college->image && Storage::disk('public')->exists($college->image)) {
                Storage::disk('public')->delete($college->image);
            }

            $college->image = $request->file('image')->store('colleges', 'public');
        }

        $college->update([
            'state_id' => $request->state_id,
            'name' => $request->name,
            'slug' => $slug,
            'email' => $request->email,
            'type' => $request->type,
            'naac_grade' => $request->naac_grade,
            'address' => $request->address,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'College updated successfully');
    }

    /**
     * DELETE
     */
    public function destroy($id)
    {
        $college = College::findOrFail($id);

        // delete image
        if ($college->image && Storage::disk('public')->exists($college->image)) {
            Storage::disk('public')->delete($college->image);
        }

        $college->delete();

        return redirect()->back()->with('success', 'College deleted successfully');
    }

    /**
     * (OPTIONAL) IMPORT
     */
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv'
        ]);

        Excel::import(new CollegesImport, $request->file('file'));

        return redirect()->back()->with('success', 'Colleges imported successfully');
    }
}