<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentContoller extends Controller
{
    private $title = 'students';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.students.index', [
            'title' => $this->title,
            'students' => Student::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.students.action', [
            'title' => $this->title,
            'branches' => \App\Models\Branch::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        Student::create($request->validated());

        return redirect()->route('students.index')->with('success', 'Student created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.students.show', [
            'title' => $this->title,
            'student' => Student::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.students.action', [
            'title' => $this->title,
            'student' => Student::findOrFail($id),
            'branches' => \App\Models\Branch::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, string $id)
    {
        Student::findOrFail($id)->update($request->validated());

        return redirect()->route('students.index')->with('success', 'Student updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::findOrFail($id)->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted.');
    }
}
