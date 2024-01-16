<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private $title = 'teachers';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.teachers.index', [
            'title' => $this->title,
            'teachers' => \App\Models\Teacher::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teachers.action', [
            'title' => $this->title,
            'branches' => \App\Models\Branch::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        \App\Models\Teacher::create($request->validated());

        return redirect()->route('teachers.index')->with('success', 'Teacher created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.teachers.show', [
            'title' => $this->title,
            'teacher' => \App\Models\Teacher::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.teachers.action', [
            'title' => $this->title,
            'teacher' => \App\Models\Teacher::findOrFail($id),
            'branches' => \App\Models\Branch::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherRequest $request, string $id)
    {
        \App\Models\Teacher::findOrFail($id)->update($request->validated());

        return redirect()->route('teachers.index')->with('success', 'Teacher updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        \App\Models\Teacher::findOrFail($id)->delete();

        return redirect()->route('teachers.index')->with('success', 'Teacher deleted.');
    }
}
