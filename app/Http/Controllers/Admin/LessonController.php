<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LessonRequest;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.lessons.index', [
            'lessons' => \App\Models\Lesson::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.lessons.action');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LessonRequest $request)
    {
        Lesson::create($request->all());

        return redirect()->route('lessons.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.lessons.show', [
            'lesson' => Lesson::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.lessons.action', [
            'lesson' => Lesson::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LessonRequest $request, string $id)
    {
        Lesson::findOrFail($id)->update($request->all());

        return redirect()->route('lessons.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Lesson::findOrFail($id)->delete();

        return redirect()->route('lessons.index');
    }
}
