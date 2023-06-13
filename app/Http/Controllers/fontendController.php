<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problem;
use Carbon\Carbon;



class fontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_problem=Problem::all();
        return view('fontend.problem_list',compact('all_problem'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fontend.Add_problem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            "user_id"=>'required',
            "name"=>'required',
            "designation"=>'required',
            "department"=>'required',
            "room_number"=>'required',
            "problem"=>'required',

         ]);

         Problem::insert($request->except('_token') + [

            'created_at'=>Carbon::now(),
            ]);

            return back()->with('success','Data saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $get_data=All_information::find($id);
        // return view('fontend.Add_problem',compact('get_data'));
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
