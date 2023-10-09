<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\All_User;
use App\Models\Scanner;
use App\Models\Department;
use Carbon\Carbon;
use PDF;

class scannerController extends Controller
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
        $all_department=Scanner::select('department_id')->groupBy('department_id')->get();
        $all_scanner=Scanner::all();
        return view('scanner.scanner_add',compact('all_user','all_scanner','all_department'));
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

            return redirect()->route('scanner.index')->with('success','Department uploaded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $department_id)
    {

        $department=Scanner::where('department_id',$department_id)->get();
        $all_department=Scanner::select('department_id')->groupBy('department_id')->get();

           return view('scanner.scanner_department',compact('department','all_department'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $all_scanner=Scanner::find($id);
        $all_department=Department::all();
        $all_user=All_User::all();
        return view('scanner.scanner_edit',compact('all_scanner','all_department','all_user'));
    }

    public function update(Request $request, string $id)
    {
        Scanner::find($id)->update($request->except('_token') + [

            'updated_at'=>Carbon::now(),
            ]);
            return redirect()->route('scanner.index')->with('success','Printer Info update successfully');

    }

    public function destroy(string $id)
    {
        //
    }

    public function scanner_pdf(){
         $info=Scanner::all();
        $pdf = PDF::loadView('status.scanner_info_pdf',compact('info'))->setPaper('a4', 'portrait');
        return $pdf->stream('status.all_info');
    }
    public function scanner_department_pdf($department_id)
    {
        $department=Scanner::where('department_id',$department_id)->get();
        $pdf = PDF::loadView('status.scanner_info_pdf',compact('department'))->setPaper('a4', 'portrait');
        return $pdf->stream('status.all_info');
    }
}
