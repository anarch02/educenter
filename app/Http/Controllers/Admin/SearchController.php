<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search',[
            'title' => 'Search',
        ]);
    }

    public function search(Request $request)
    {
        dd($request->all());
        $data = $request->validate([
            'search_request' => ['required', 'string', 'max:255'],
        ]);

        $search_request = $data['search_request'];

        $groups = \App\Models\Group::where('name', 'like', "%{$search_request}%")->get();
        $students = \App\Models\Student::where('name', 'like', "%{$search_request}%")->get();
        $branches = \App\Models\Branch::where('name', 'like', "%{$search_request}%")->get();
        $subjecs = \App\Models\Subject::where('name', 'like', "%{$search_request}%")->get();
        $classrooms = \App\Models\Classroom::where('name', 'like', "%{$search_request}%")->get();

        $result = [
            'groups' => $groups,
            'students' => $students,
            'branches' => $branches,
            'subjects' => $subjecs,
            'classrooms' => $classrooms,
        ];

        return view('search', [
            'result' => $result,
        ]);
    }

    public function get_groups(Request $request)
    {
        $data = $request->validate([
            'branch_id' => ['required', 'integer'],
        ]);

        $branch_id = $data['branch_id'];

        $groups = \App\Models\Group::where('branch_id', $branch_id)->get();

        return response()->json($groups);
    }
}
