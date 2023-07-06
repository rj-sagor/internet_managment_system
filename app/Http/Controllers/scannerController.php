<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\All_User;
use App\Models\Scanner;
use Carbon\Carbon;

class scannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $all_user=All_User::all();
      return view('scanner.scanner_add',compact('all_user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Scanner::insert($request->except('_token') + [

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
