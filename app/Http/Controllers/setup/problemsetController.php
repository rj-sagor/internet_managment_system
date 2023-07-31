<?php

namespace App\Http\Controllers\setup;

use App\Http\Controllers\Controller;
use App\Models\ProblemList;
use Illuminate\Http\Request;
use Carbon\Carbon;

class problemsetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_setupProblem=ProblemList::all();
        return view('ProblemList.uploadList',compact('all_setupProblem'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'problem_name'=>'unique:problem_lists,problem_name',
        ]);
        ProblemList::insert($request->except('_token') + [

            'created_at'=>Carbon::now(),
            ]);

            return back()->with('success','Problem uploaded successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
