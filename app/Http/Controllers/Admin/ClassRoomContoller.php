<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClassRoomRequest;
use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassRoomContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.classrooms.index', [
            'class_rooms' => \App\Models\ClassRoom::all(),
            'title' => 'class_rooms'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.classrooms.action', [
            'title' => 'class_rooms',
            'branches' => \App\Models\Branch::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClassRoomRequest $request)
    {
        $class_room = ClassRoom::create($request->validated());

        return redirect()->route('class_rooms.show', $class_room->id)->with('message', 'created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.classrooms.show', [
            'class_room' => \App\Models\ClassRoom::find($id),
            'title' => 'class_rooms'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.classrooms.action', [
            'class_room' => ClassRoom::findOrFail($id),
            'branches' => \App\Models\Branch::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClassRoomRequest $request, string $id)
    {
        \App\Models\ClassRoom::findOrFail($id)->update($request->validated());

        return redirect()->route('class_rooms.show', $id)->with('message', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        \App\Models\ClassRoom::findOrFail($id)->delete();

        return redirect()->route('class_rooms.index')->with('success', 'Subject deleted.');
    }
}
