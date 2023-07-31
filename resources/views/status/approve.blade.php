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
                <th>Printer</th>
                <th>Scanner</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
@foreach ($all_information as $info )
<tr>
    <td>{{ $loop->index +1 }}</td>
    <td>{{ $info->Info_to_user->user_id }}</td>
    <td>{{ $info->Info_to_user->name }}</td>
    <td>{{ $info->ram }}</td>
    <td>{{ $info->ip_address }}</td>
    <td>{{ $info->proccesor }}</td>
    <td>{{ $info->mother_board }}</td>
    <td>{{ $info->Info_to_printer->brand }}</td>
    <td>{{ $info->Info_to_scanner->scanner_brand }}</td>
    <td>{{ $info->status }}</td>
    <td>
        <a class="btn btn-success"  href="{{ route('all_informaton_pdf',$info->id) }}">pdf</a>
    </td>
</tr>

@endforeach


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