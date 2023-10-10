@extends('layouts.Backend_master')
@section('backend_app')

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    </div>
    <div class="d-flex justify-content-between m-4">
        <div>
            <h6 class="mb-0 text-uppercase">User Information List</h6>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('UserUpoload.create') }}">Add User</a>
        </div>
        </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Sl</th>
                <th>User Name</th>
                <th>E-Nothi Id</th>
                <th>Designation</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
         @forelse ($all_user as $info )
         <tr>
             <td>{{ $loop->index +1  }}</td>
             <td>{{ $info->name }}</td>
             <td>{{ $info->user_id }}</td>
             <td>{{ $info->user_to_designation->designation_name }}</td>
             <td>edit</td>

         </tr>

         @empty

         @endforelse

        </tbody>
        <tfoot>

            <tr>
                <th>Sl</th>
                <th>User Name</th>
                <th>E-Nothi Id</th>
                <th>Designation</th>
                <th>action</th>

            </tr>
        </tfoot>
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
