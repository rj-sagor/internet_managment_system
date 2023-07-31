@extends('layouts.Backend_master')
@section('backend_app')

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Sl</th>
               <th>name</th>
               <th>User ID</th>
               <th>Service Details</th>
               <th>amount</th>
                <th>Comments</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
         @forelse ($all_service as $service )
         <tr>
             <td>{{ $loop->index +1 }}</td>
             <td>{{ $service->service_to_user->name }}</td>
             <td>{{ $service->service_to_user->user_id }}</td>
             <td>{{ $service->servicing_details }}</td>
             <td>{{ $service->amount }}</td>
             <td>{{ $service->comment }}</td>

             <td>
                <a href=""><i class="fas fa-edit"></i></a>
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
