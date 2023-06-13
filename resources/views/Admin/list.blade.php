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
                <th>ID</th>
                <th>Name</th>
                <th>Ram</th>
                <th>Ip Address</th>
                <th>Proccesor </th>
                <th>Mother board </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
         @forelse ($information as $info )
         <tr>
             <td>{{ $info->name }}</td>
             <td>{{ $info->name }}</td>
             <td>{{ $info->name }}</td>
             <td>{{ $info->name }}</td>
             <td>{{ $info->name }}</td>
             <td>{{ $info->name }}</td>
             <td>{{ $info->name }}</td>
             <td>
                <a href="{{ route('admin.edit',$info->id) }}"><i class="fas fa-edit"></i></a>
             </td>
         </tr>

         @empty

         @endforelse

        </tbody>
        <tfoot>

            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>

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
