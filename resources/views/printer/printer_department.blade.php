@extends('layouts.Backend_master')
@section('backend_app')

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    </div>
    <div class="d-flex justify-content-between m-4">
        <div>
            <h4 class="mb-0 text-uppercase">Printer List</h4>
        </div>
        <div>
            <a class="btn btn-info" href=""><i class="fa-solid fa-print"></i> print</a>
         </div>

        <div class="d-flex justify-content-between ">

            <div>
                <div class="dropdown me-3">
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                     Department
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach ($all_department as $printer)
                        <li><a class="dropdown-item" href="{{ route('printer.show',$printer->department_id) }}">{{ $printer->printer_to_department->department_name}}</a></li>

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
                <th>printer Name</th>
                <th>printer Model</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
         @forelse ($department as $printer )
         <tr>
             <td>{{ $loop->index +1  }}</td>
             <td>
                @if (!is_null($printer->printer_to_user))
                {{ $printer->printer_to_user->name}}
                @else
                {{ "No User Exit" }}
                @endif
        </td>
             <td>{{ $printer->printer_to_department->department_name}}</td>
             <td>{{ $printer->brand}}</td>
             <td>{{ $printer->model }}</td>
             <td>
                <a href="{{ route('printer.edit',$printer->id) }}"><i class="fas fa-edit"></i></a>
             </td>
         </tr>

         @empty
         @endforelse
        </tbody>

    </table>
</main>
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
    $('#example').DataTable();
});
</script>

@endsection
