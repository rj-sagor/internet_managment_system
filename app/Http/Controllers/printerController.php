<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\All_User;
use App\Models\Printer;
use App\Models\Department;
use Carbon\Carbon;

class printerController extends Controller
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
        $all_department=Printer::select('department_id')->groupBy('department_id')->get();
        $all_printer=Printer::all();
       return view('printer.add',compact('all_user','all_printer','all_department'));
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
        Printer::insert($request->except('_token') + [

            'created_at'=>Carbon::now(),
            ]);

            return back()->with('success','Department uploaded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $department_id)
    {
        $department=Printer::where('department_id',$department_id)->get();
        $all_department=Printer::select('department_id')->groupBy('department_id')->get();
        return view('printer.printer_department',compact('department','all_department'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $all_printer=Printer::find($id);
        $all_department=Department::all();
        $all_user=All_User::all();
        return view('printer.printer_edit',compact('all_printer','all_department','all_user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Printer::find($id)->update($request->except('_token') + [

            'updated_at'=>Carbon::now(),
            ]);
            return redirect()->route('printer.index')->with('success','Printer Info update successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
