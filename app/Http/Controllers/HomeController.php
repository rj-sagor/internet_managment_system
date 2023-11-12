<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\All_User;
use App\Models\Printer;
use App\Models\Scanner;
use App\Models\Problem;
use App\Models\ComputerInformation;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_printer=Printer::where('brand','!=',"null")->count();
        $all_scanner=Scanner::where('scanner_brand','!=',"null")->count();
        $all_problem=Problem::count();
        // $count=1;
        // if ( $all_printer== 'null') {
        //     # code...
        // } else {
        //     $count++;
        // }

        $user=ComputerInformation::count();
        return view('home',compact('user','all_printer','all_scanner','all_problem'));
    }
}
