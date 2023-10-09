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
     @endif
    </div>
    <div class="d-flex justify-content-end mb-4 ">
        <button type="submit" class="btn btn-info add_designation">Add Status</button>
    </div>
    {{-- modal start --}}
<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="designation_Show" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="{{ route('setup_status.store') }}" method="POST">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Add Status</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="col-sm-12">
                    <label for="validationCustom01" class="form-label">Status</label>
                    <input type="text" class="form-control" id="validationCustom01" name="status_name" required="">
                    @error('status_name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
      </form>
    </div>
  </div>

    {{-- modal end --}}

    <div class="col-sm-12">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Status Name Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_status as $info )
                <tr>
                    <td>{{ $loop->index +1 }}</td>
                    <td>{{ $info->status_name }}</td>
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
        $(document).on('click','.add_designation',function(){
            $('#designation_Show').modal('show')
        });
    $('#example').DataTable();
});
</script>

@endsection
