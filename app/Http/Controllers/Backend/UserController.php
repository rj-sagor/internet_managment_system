<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\All_User;
use App\Models\designation;
use Carbon\Carbon;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $all_user=All_User::all();
     return view('Admin_Upload.user_info.user_list',compact('all_user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $All_Department=Department::All();
        $All_desig=designation::All();
        return view('Admin_Upload.user_info.add',compact('All_Department','All_desig'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'user_id'=>'required|unique:all__users,user_id',
            'name'=>'required',
            'designation_id'=>'required',

        ]);

        All_User::insert($request->except('_token') + [

            'created_at'=>Carbon::now(),
            ]);

            return redirect()->route('UserUpoload.index')->with('success','User Information Succesfully uploaded successfully');
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
        $all_user=All_User::find($id);
        $All_desig=designation::All();

        return view('Admin_Upload.user_info.user_edit',compact('all_user','All_desig'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        All_User::find($id)->update($request->except('_token') + [

            'updated_at'=>Carbon::now(),
            ]);
            return redirect()->route('UserUpoload.index')->with('success','User uploaded successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
