@extends('layouts.Backend_master')
@section('backend_app')

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    </div>
    <!--end breadcrumb-->

   <div class="row">
    <div>  @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show t" role="alert">
      <strong>{{session('success') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
     @endif</div>
    <div class="col-sm-4">
        <h2>Problem List</h2>
        <hr>
        <div>
           <form action="{{ route('setup_problem.store') }}" method="POST">
            @csrf
            <div class="col-sm-12">
                <label for="validationCustom01" class="form-label">Problem Name</label>
                <input type="text" class="form-control" id="validationCustom01" name="problem_name" required >
                @error('problem_name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <hr>
            <div class="col-12">
               <button class="btn btn-primary" type="submit">Submit </button>
           </div>
           </form>
        </div>
    </div>
    <div class="col-sm-8">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_setupProblem as $info )
                <tr>
                    <td>{{ $loop->index +1 }}</td>
                    <td>{{ $info->problem_name }}</td>
                    <td>edit</td>

                </tr>

                @endforeach


            </tbody>

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