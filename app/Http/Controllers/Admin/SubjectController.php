<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubjectRequest;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    private $title = 'subjects';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.subjects.index', [
            'title' => $this->title,
            'subjects' => \App\Models\Subject::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.subjects.action', [
            'title' => $this->title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubjectRequest $request)
    {
        $subject = \App\Models\Subject::create($request->validated());

        return redirect()->route('subjects.show', $subject->id)->with('message', 'created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.subjects.show', [
            'title' => $this->title,
            'subject' => \App\Models\Subject::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.subjects.action', [
            'title' => $this->title,
            'subject' => \App\Models\Subject::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubjectRequest $request, string $id)
    {
        \App\Models\Subject::findOrFail($id)->update($request->validated());

        return redirect()->route('subjects.show', $id)->with('message', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        \App\Models\Subject::findOrFail($id)->delete();

        return redirect()->route('subjects.index')->with('success', 'Subject deleted.');
    }
}
