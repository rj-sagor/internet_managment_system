<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\All_information;
use Carbon\Carbon;


class AdminController extends Controller
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
        $information=All_information::all();
        return view('Admin.list',compact('information'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.upload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "profile_id"=>'required',
            "name"=>'required',
            "designation"=>'required',
            "room_number"=>'required',
            "monitor"=>'required',
            "mother_board"=>'required',
            "proccesor"=>'required',
            "mac_address"=>'required',
            "installation_date"=>'required',
            "ram"=>'required',
            "os_system"=>'required',
            "hdd_ssd"=>'required',
        ]);
        All_information::insert($request->except('_token') + [

            'created_at'=>Carbon::now(),
            ]);

            return back()->with('success','Information uploaded successfully');

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
        $info=All_information::find($id);
        return view('Admin.edit',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        All_information::find($id)->update($request->except('_token') + [

            'updated_at'=>Carbon::now(),
            ]);

            return redirect()->route('admin.index')->with('success','Information uploaded successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
