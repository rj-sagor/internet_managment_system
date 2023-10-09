@extends('layouts.Backend_master')
@section('backend_app')

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    </div>
    <div class="d-flex justify-content-between m-4">
        <div>
            <h4 class="mb-0 text-uppercase">Scanner List</h4>
        </div>
        <div>
            <a class="btn btn-info" href="{{ route('scanner.all_information.print_pdf')}}"><i class="fa-solid fa-print"></i> print</a>
         </div>
        <div class="d-flex justify-content-between ">
            <div>
                <div class="dropdown me-3">
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                     Department
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach ($all_department as $scanner)
                        <li><a class="dropdown-item" href="{{ route('scanner.show',$scanner->department_id) }}">{{ $scanner->scanner_to_department->department_name}}</a></li>

                        @endforeach


                    </ul>
                  </div>

            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                 All Information List
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="{{ route('computerinfo.index') }}">Computer List</a></li>
                  <li><a class="dropdown-item" href="{{ route('printer.index') }}">Printer List</a></li>
                  <li><a class="dropdown-item" href="{{ route('scanner.index') }}">Scanner List</a></li>
                </ul>
              </div>
        </div>
        </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Sl</th>
                <th>User name</th>
                <th>Department</th>
                <th>Scanner Name</th>
                <th>Scanner Model</th>

                <th>Action</th>

            </tr>
        </thead>
        <tbody>
         @forelse ($all_scanner as $scanner )
         <tr>
             <td>{{ $loop->index +1  }}</td>
             <td>
                @if (!is_null($scanner->scanner_to_user))
                {{ $scanner->scanner_to_user->name}}

                @else
                {{ "No User Exit" }}

                @endif
        </td>
             <td>{{ $scanner->scanner_to_department->department_name}}</td>
             <td>{{ $scanner->scanner_brand}}</td>
             <td>{{ $scanner->scanner_model }}</td>
             <td>
                <a href="{{ route('scanner.edit',$scanner->id) }}"><i class="fas fa-edit"></i></a>
             </td>

         </tr>

         @empty

         @endforelse

        </tbody>

    </table>
</main>
@if(Session('success'))
    <div class="toast" style="position: absolute; top: 0; right: 0; " data-delay="2000">
        <div class="toast-header">

          <strong class="mr-auto">{{ config('app.name') }}</strong>

          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body">
         {{ Session('success') }}
        </div>
      </div>

@endif
@endsection
@section("Backend_css")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

@endsection

@section('backend_js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('.toast').toast('show')
    $('#example').DataTable();
});
</script>

@endsection
