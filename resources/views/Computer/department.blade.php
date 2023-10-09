@extends('layouts.Backend_master')
@section('backend_app')

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    </div>
    <div class="d-flex justify-content-between m-4">
        <div>
            <h6 class="mb-0 text-uppercase">computer Information List</h6>
        </div>
        <div class="d-flex justify-content-between ">
            <div>
                <div class="dropdown me-3">
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                     Department
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach ($all_depart as $computer)
                        <li><a class="dropdown-item" href="{{ route('computerinfo.show',$computer->department_id) }}">{{ $computer->Info_to_department->department_name}}</a></li>

                        @endforeach


                    </ul>
                  </div>

            </div>

            <a class="btn btn-primary" href="{{ route('computerinfo.index') }}">All_computer_list</a>
        </div>
        </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Sl</th>
                <th>User Name</th>
                <th>Department</th>
                <th>Computer Id</th>
                <th>Motherboard</th>
                <th>Proccesor</th>
                <th>Ip_address</th>
                <th>Monitor</th>
                <th>Tender Memo Number</th>
                <th>Mac Address</th>
                <th>Installation Date</th>
                <th>Ram</th>
                <th>HDD/SSD</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
         @forelse ($department as $computer )
         <tr>
             <td>{{ $loop->index +1  }}</td>
             <td>
                @if (!is_null($computer->Info_to_user))
                {{ $computer->Info_to_user->name}}

                @else
                {{ "No User Exit" }}

                @endif
        </td>
             <td>{{ $computer->Info_to_department->department_name}}</td>
             <td>{{ $computer->computer_id}}</td>
             <td>{{ $computer->mother_board }}</td>
             <td>{{ $computer->proccesor }}</td>
             <td>{{ $computer->ip_address }}</td>
             <td>{{ $computer->monitor }}</td>
             <td>{{ $computer->tender_number }}</td>
             <td>{{ $computer->mac_address }}</td>
             <td>{{ $computer->installation_date }}</td>
             <td>{{ $computer->ram }}</td>
             <td>{{ $computer->hdd_ssd }}</td>
             <td>
                <a href="{{ route('computerinfo.edit',$computer->id) }}"><i class="fas fa-edit"></i></a>
                <a href="{{ route('single_data_pdf',$computer->id) }}"><i class="fa fa-print" aria-hidden="true"></i></a>
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
