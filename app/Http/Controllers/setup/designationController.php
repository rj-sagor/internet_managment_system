<?php

namespace App\Http\Controllers\setup;

use App\Http\Controllers\Controller;
use App\Models\designation;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Validation\Rules\Unique;

class designationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $All_desig=designation::all();
        return view('designation.add',compact('All_desig'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'designation_name'=>'unique:designations,designation_name',
        ]);
        designation::insert($request->except('_token') + [

            'created_at'=>Carbon::now(),
            ]);

            return back()->with('success','Designation uploaded successfully');
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
        $all_desig=designation::find($id);
        return view('designation.edit',compact('all_desig'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        designation::find($id)->update($request->except('_token') + [

            'updated_at'=>Carbon::now(),
            ]);
            return redirect()->route('setup_designation.index')->with('success','Printer Info update successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
