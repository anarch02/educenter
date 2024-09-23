<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.courses.index', [
            'courses' => \App\Models\Course::all(),
            'title' => 'courses'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courses.action', [
            'title' => 'courses',
            'subjects' => \App\Models\Subject::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        $course = Course::create($request->validated());

        return redirect()->route('courses.show', $course->id)->with('message', 'created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.courses.show', [
            'course' =>Course::find($id),
            'title' => 'courses'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd(Course::findOrFail($id));
        return view('admin.courses.action', [
            'course' => Course::findOrFail($id),
            'subjects' => \App\Models\Subject::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseRequest $request, string $id)
    {
        Course::findOrFail($id)->update($request->validated());

        return redirect()->route('courses.show', $id)->with('message', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Course::findOrFail($id)->delete();

        return redirect()->route('courses.index')->with('success', 'Subject deleted.');
    }
}
