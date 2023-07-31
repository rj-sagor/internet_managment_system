<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\All_User;
use App\Models\Servicing;
use Carbon\Carbon;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_service=Servicing::all();
        return view('Service.service_list',compact('all_service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $all_user=All_User::all();
        return view('Service.serviceAdd',compact('all_user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Servicing::insert($request->except('_token') + [

            'created_at'=>Carbon::now(),
            ]);

            return back()->with('success','Department uploaded successfully');
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
