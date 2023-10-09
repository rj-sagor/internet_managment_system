<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\All_User;
use App\Models\Printer;
use App\Models\Scanner;
use App\Models\category;
use App\Models\Department;
use App\Models\ComputerInformation;
use Carbon\Carbon;
use PDF;


class Computer_infoController extends Controller
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
     $all_department=Department::all();
     $all_depart=ComputerInformation::select('department_id')->groupBy('department_id')->get();
     $all_category=category::all();
     $all_computer=ComputerInformation::all();
     return view('Computer.computer_list',compact('all_department','all_category','all_computer','all_depart'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $all_department=Department::all();
     $all_category=category::all();
        $all_user_name=All_User::all();
        return view('Computer.add',compact('all_department','all_category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'monitor'=>'required',
            'mother_board'=>'required',
            'proccesor'=>'required',
            'ip_address'=>'required',
            'mac_address'=>'required',
            'installation_date'=>'required',
            'ram'=>'required',
            'os_system'=>'required',
            'os_system'=>'required',
            'hdd_ssd'=>'required',
        ]);
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



            return redirect()->route('computerinfo.index')->with('success','Computer Information uploaded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $department_id)
    {

     $department=ComputerInformation::where('department_id',$department_id)->get();
     $all_depart=ComputerInformation::select('department_id')->groupBy('department_id')->get();

        return view('Computer.department',compact('department','all_depart'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $all_computer=ComputerInformation::find($id);
        $all_user=All_User::all();
        $all_department=Department::all();
        return view('Computer.edit',compact('all_computer','all_user','all_department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $user_data=ComputerInformation::find($id);
        // $user=$user_data->user_id;
        // if($user==null){
            ComputerInformation::find($id)->update($request->except('_token') + [

                'updated_at'=>Carbon::now(),
                ]);
                return back()->with('success','Information uploaded successfully');




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
    public function All_information_pdf(){
        $info=ComputerInformation::all();
        $pdf = PDF::loadView('status.all_info_pdf',compact('info'))->setPaper('a4', 'portrait');
        return $pdf->stream('status.all_info');
    }

    public function pendding_edit($id){
        return view ('status.pendding_edit');

    }

    public function singleData($id){
        $info=ComputerInformation::find($id);
        $date =  Carbon::now();
        $pdf = PDF::loadView('status.computer_single_data',compact('info','date'))->setPaper('a4', 'portrait');
        return $pdf->stream('status.all_info');

    }
}
