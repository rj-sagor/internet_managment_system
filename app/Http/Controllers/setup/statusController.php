<?php

namespace App\Http\Controllers\setup;

use App\Http\Controllers\Controller;
use App\Models\status;
use Illuminate\Http\Request;
use Carbon\Carbon;

class statusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_status=status::all();
        return view('setup_status.add',compact('all_status'));
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
            'status_name'=>'unique:statuses,status_name',
        ]);
        status::insert($request->except('_token') + [

            'created_at'=>Carbon::now(),
            ]);

            return back()->with('success','status uploaded successfully');
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
