@extends('layouts.Backend_master')

@section('backend_app')
<main class="page-content">

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
      <div class="col">
        <div class="card radius-10">
          <div class="card-body">

                  <div>
                      <p class="mb-0 text-secondary">Total Computer</p>
                  </div>
                  <div class="widget-icon-large bg-gradient-purple text-white mt-3 text-aligne-center"><i class="bi bi-basket2-fill"> {{ $user }}</i>
                  </div>


          </div>
        </div>
       </div>
       <div class="col">
        <div class="card radius-10">
          <div class="card-body">

                  <div>
                      <p class="mb-0 text-secondary">Total Printer</p>
                  </div>
                  <div class="widget-icon-large bg-gradient-purple text-white mt-3 text-aligne-center"><a class="text-white" href="{{ route('printer.index') }}"><i class="bi bi-basket2-fill"> {{ $all_printer }}</i></a>
                  </div>


          </div>
        </div>
       </div>
       <div class="col">
        <div class="card radius-10">
          <div class="card-body">

                  <div>
                      <p class="mb-0 text-secondary">Total Scanner</p>
                  </div>
                  <div class="widget-icon-large bg-gradient-purple text-white mt-3 text-aligne-center"><a class="text-white" href="{{ route('scanner.index') }}"><i class="bi bi-basket2-fill"> {{ $all_scanner }}</i></a>
                  </div>


          </div>
        </div>
       </div>
       <div class="col">
        <div class="card radius-10">
          <div class="card-body">

                  <div>
                      <p class="mb-0 text-secondary">Total Problem</p>
                  </div>
                  <div class="widget-icon-large bg-gradient-purple text-white mt-3 text-aligne-center"><a class="text-white" href="{{ route('admin_Problem_list.index') }}"><i class="bi bi-basket2-fill"> {{ $all_problem }}</i></a>
                  </div>


          </div>
        </div>
       </div>

@endsection




