<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problem;
use App\Models\Department;
use App\Models\All_User;
use App\Models\designation;
use App\Models\ProblemList;
use Carbon\Carbon;
use  Illuminate\Support\Str;




class fontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_problem=Problem::orderBy('created_at', 'DESC')->get();
        // dd($all_problem);
        return view('fontend.problem_list',compact('all_problem'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $all_department=Department::all();
        $all_designation=designation::all();
        $all_problem_list=ProblemList::all();
        $all_user=All_User::all();

        return view('fontend.Add_problem',compact('all_department','all_user','all_designation','all_problem_list'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            "user_id"=>'required',
            "name"=>'required',
            "designation_id"=>'required',
            "department_id"=>'required',
            "room_number"=>'required',
            "problem_id"=>'required',

         ]);
         $randomCode=random_int(100000, 999999);


         Problem::insert($request->except('_token') + [
            "problem_trucking_number"=>$randomCode,

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
