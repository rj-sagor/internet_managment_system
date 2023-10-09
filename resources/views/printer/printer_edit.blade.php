@extends('layouts.Backend_master')
@section('backend_app')

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    </div>
    <div class="d-flex justify-content-between m-4">
        <div>
            <h6 class="mb-0 text-uppercase">Printer Information Update</h6>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('printer.index') }}">Printer Information List</a>
        </div>
        </div>

   <form action="{{ route('printer.update',$all_printer->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card">
        <div class="card-body">
            <div class="p-4 border rounded">
                <div class="row g-3 needs-validation" novalidate="">
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">User</label>
                        <select  class="js-example-basic-single form-control" name="user_id"  data-placeholder="Chose your user">
                            <option label="Select Department user"></option>
                            @foreach($all_user as $user)
                            <option value="{{$user->id}}"{{ $user->id ==$all_printer->user_id ? "selected" : "" }}>{{$user->name}}</option>
                            @endforeach
                          </select>
                        @error('user_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Department</label>
                        <select  class="js-example-basic-single form-control" name="department_id"  data-placeholder="Chose your user">
                            <option label="Select Department user"></option>
                            @foreach($all_department as $department)
                            <option value="{{$department->id}}"{{ $department->id ==$all_printer->department_id ? "selected" : "" }}>{{$department->department_name}}</option>
                            @endforeach
                          </select>
                        @error('department_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Printer Id</label>
                        <input type="text" class="form-control" id="printer_id" name="printer_id" value="{{ $all_printer->printer_id }}" >
                        @error('printer_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Priter Brand</label>
                        <input type="text" class="form-control" id="brand" name="brand" value="{{ $all_printer->brand }}" >
                        @error('brand')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Printer Model</label>
                        <input type="text" class="form-control" id="model" name="model" value="{{ $all_printer->model }}" >
                        @error('model')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Save</button>
    </div>
</div>
   </form>
    <hr>
    </main>

 @endsection
 @section("Backend_css")
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


@endsection

@section('backend_js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>

@endsection
