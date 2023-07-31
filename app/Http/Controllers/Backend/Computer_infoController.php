<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\All_User;
use App\Models\Printer;
use App\Models\Scanner;
use App\Models\ComputerInformation;
use Carbon\Carbon;
use PDF;


class Computer_infoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $all_computer=Computerinformation::all();
     return view('Computer.computer_list',compact('all_computer'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $all_user_name=All_User::all();
        return view('Computer.add',compact('all_user_name'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ComputerInformation::insert($request->except('_token') + [

            'created_at'=>Carbon::now(),
            ]);

            // Printer::insert([
            //     'user_id'=>$request->user_id,
            //     'brand'=>"null",
            //     'model'=>"null",
            //     'created_at'=>Carbon::now()
            // ]);

            // Scanner::insert([
            //     'user_id'=>$request->user_id,
            //     'scanner_brand'=>"null",
            //     'scanner_model'=>"null",
            //     'created_at'=>Carbon::now()
            // ]);



            return back()->with('success','Computer Information uploaded successfully');
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

    public function Pending_status()
    {
        $all_information=ComputerInformation::where('status','=',"pending")->get();
        return view('status.pending',compact('all_information'));
    }

    public function Approve_status()
    {
        $all_information=ComputerInformation::where('status','=',"approve")->get();
        return view('status.approve',compact('all_information'));
    }
    public function All_information_pdf($id){
        $info=ComputerInformation::find($id);
        $pdf = PDF::loadView('status.all_info_pdf',compact('info'))->setPaper('a4', 'portrait');
        // $pdf = PDF::loadView('Home.report')->setPaper('a4', 'portrait');
        // return $pdf->download('inronman.pdf');
        return $pdf->stream('status.all_info');

    }
}
