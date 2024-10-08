<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BranchRequest;
use App\Models\Branch;
use App\Models\City;
use App\Models\Region;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    private array $table = [
        'name',
        'address',
    ];
    private string $route = 'branches';

    private string $title = 'Branches';

    public function index()
    {
        return view('admin.branches.index', [
            'branches' => Branch::all(),
            'table' => $this->table,
            'title' => $this->title,
            'route' => $this->route,
            'regions' => Region::get(['id', 'name']),
            'cities' => City::get(['id', 'name']),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.branches.action', [
            'title' => $this->title,
            'regions' => \App\Models\Region::all(),
            'cities' => \App\Models\City::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BranchRequest $request)
    {
        $branch = Branch::create($request->validated());

        return redirect()->route('branches.show', $branch->id)->with('message', 'created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.branches.show', [
            'branch' => Branch::findOrFail($id),
            'title' => $this->title,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.branches.action', [
            'branch' => Branch::findOrFail($id),
            'title' => $this->title,
            'regions' => \App\Models\Region::all(),
            'cities' => \App\Models\City::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BranchRequest $request, string $id)
    {
        $branch = Branch::findOrFail($id)->update($request->validated());

        return redirect()->route('branches.show', $id)->with('message', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $branch = Branch::findOrFail($id)->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Branch deleted.'
        ]);
    }
}
