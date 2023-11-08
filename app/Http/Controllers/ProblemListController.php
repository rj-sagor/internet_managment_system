<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Problem;
use App\Models\Department;
use App\Models\Designation;
use App\Models\ProblemList;
use App\Models\status;
use Carbon\Carbon;
use PDF;

class ProblemListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $employees = Problem::orderBy('id', 'desc')
            ->when(
                $request->date_from && $request->date_to,
                function (Builder $builder) use ($request) {
                    $builder->whereBetween(
                        DB::raw('DATE(created_at)'),
                        [
                            $request->date_from,
                            $request->date_to,
                        ]
                    );
                }
            )->paginate(100);

        return view('AdminProblem.problem_list', compact('employees', 'request'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $problem=Problem::find($id);
        $all_department=Department::all();
        $all_designation=Designation::all();
        $problem_list=ProblemList::all();

        return view('AdminProblem.problem_edit',compact('problem','all_department','all_designation','problem_list',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Problem::find($id)->update($request->except('_token') + [

            'updated_at'=>Carbon::now(),
            ]);
            return redirect()->route('admin_Problem_list.index')->with('success','Information uploaded successfully');

        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function service($id){
        $info=Problem::find($id);
        $pdf = PDF::loadView('status.problem_service_details',compact('info'))->setPaper('a4', 'portrait');
        return $pdf->stream('status.problem_service_details');

    }

    public function other(Request $request)
    {
        $employees = Problem::orderBy('id', 'desc')
            ->when(
                $request->date_from && $request->date_to,
                function (Builder $builder) use ($request) {
                    $builder->whereBetween(
                        DB::raw('DATE(created_at)'),
                        [
                            $request->date_from,
                            $request->date_to
                        ]
                    );
                }
            )->paginate(5);

        return view('AdminProblem.text', compact('employees', 'request'));
    }
}
