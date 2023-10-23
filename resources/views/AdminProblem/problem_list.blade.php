@extends('layouts.Backend_master')
@section('backend_app')
<main class="page-content">
    <div>
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">

          <div class="p-4">
            <form action="{{ route('admin_Problem_list.index') }}" method="get">
                <div class="row">
                   <div class="col-md-5 form-group">
                       <label for="">Date From</label>
                       <input type="date" name="date_from" class="form-control" value="{{ $request->date_from }}">
                    </div>
                    <div class="col-md-5 form-group">
                       <label for="">Date From</label>
                       <input type="date" name="date_to" class="form-control" value="{{ $request->date_to }}">
                    </div>
                    <div class="col-md-2 form-group" style="margin-top:25px;">
                       <input type="submit" class="btn btn-primary" value="Search">
                    </div>
                </div>
           </form>
          </div>

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Trucking Number</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Room Number </th>
                        <th>Problem</th>
                        <th>service Cost</th>
                        <th>service date</th>
                        <th>service details</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                 @forelse ($employees as $info )
                 <tr>
                     <td>{{ $loop->index+1 }}</td>
                     <td>{{ $info->user_id }}</td>
                     <td>{{ $info->name }}</td>
                     <td>
                        <a href="{{ route('admin_Problem_list.edit',$info->id) }}">{{ $info->problem_trucking_number }}</a>
                    </td>
                     <td>{{ $info->problem_to_designation->designation_name }}</td>
                     <td>{{ $info->problem_to_department->department_name }}</td>
                     <td>{{ $info->room_number }}</td>
                     <td>{{ $info->problem_to_problem->problem_name }}</td>
                     <td>{{ $info->service_cost}}</td>
                     <td>{{ $info->service_date }}</td>
                     <td>{{ $info->service_details }}</td>
                     <td>{{ $info->status}}</td>
                     <td>
                        <a href="{{ route('admin_Problem_list.edit',$info->id) }}"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('service.details',$info->id) }}"><i class="fas fa-print"></i></a>
                     </td>

                 </tr>

                 @empty

                 @endforelse

                </tbody>
                <tfoot>

                </tfoot>
            </table>

        </div>
    </div>
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
