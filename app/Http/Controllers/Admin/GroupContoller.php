<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GroupRequest;
use App\Models\Branch;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupContoller extends Controller
{
    public $title = 'groups';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.groups.index', [
            'title' => $this->title,
            'groups' => Group::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.groups.action', [
            'title' => $this->title,
            'branches' => Branch::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GroupRequest $request)
    {
        Group::create($request->validated());

        return redirect()->route('groups.index')->with('success', 'Group created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.groups.show', [
            'title' => $this->title,
            'group' => Group::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.groups.action', [
            'title' => $this->title,
            'group' => Group::findOrFail($id),
            'branches' => Branch::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Group::findOrFail($id)->update($request->validated());

        return redirect()->route('groups.index')->with('success', 'Group updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Group::findOrFail($id)->delete();

        return redirect()->route('groups.index')->with('success', 'Group deleted.');
    }
}
