<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        
         return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|string|max:100',
            'mentor' => 'required|string|max:100',
            'fees' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/courses'), $filename);
            $validatedData['image'] = 'images/courses/' . $filename;
        }

            // $validatedData['image'] = $request->file('image')->store('courses', 'public');

        $course = Course::create($validatedData);
        return redirect()->route('courses.create')->with('success', 'Course created successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        // dd($course);
        return view('admin.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        // dd($course);
        return view('admin.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|string|max:100',
            'mentor' => 'required|string|max:100',
            'fees' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // if($request->hasfile('image')){
        //     $validatedData['image'] = $request->file('image')->store('images/courses', 'public');
        // }
        if($request->hasfile('image')){
             // Delete old image if it exists
        if ($course->image && file_exists(public_path($course->image))) {
            unlink(public_path($course->image));
        }    


            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/courses'), $filename);
            $validatedData['image'] = 'images/courses/' . $filename;
        }
        $course->update($validatedData);
        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
