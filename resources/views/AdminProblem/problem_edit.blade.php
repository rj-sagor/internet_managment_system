@extends('layouts.Backend_master')
@section('backend_app')

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    </div>
    <div class="d-flex justify-content-between m-4">
        <div>
            <h6 class="mb-0 text-uppercase">Problem List</h6>
        </div>

        </div>

   <form action="{{ route('admin_Problem_list.update',$problem->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card">
        <div class="card-body">
            <div class="p-4 border rounded">
                <div class="row g-3 needs-validation" novalidate="">
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="Computer_id" name="name" value="{{ $problem->name }}" >
                        @error('monitor')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                       </div>

                       <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">E-Nothi-Id</label>
                        <input type="text" class="form-control" id="Computer_id" name="user_id" value="{{ $problem->user_id }}" >
                        @error('monitor')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                       </div>

                       <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Problem trucking Number</label>
                        <input type="text" class="form-control" id="Computer_id" name="problem_trucking_number" value="{{ $problem->problem_trucking_number }}" >
                        @error('monitor')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                       </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Department</label>
                        <select  class="js-example-basic-single form-control" name="department_id"  data-placeholder="Chose your user">
                            <option label="Select Department user"></option>
                            @foreach($all_department as $department)
                            <option value="{{$department->id}}"{{ $department->id ==$problem->department_id ? "selected" : "" }}>{{$department->department_name}}</option>
                            @endforeach
                          </select>
                        @error('user_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Designation</label>
                        <select  class="js-example-basic-single form-control" name="designation_id"  data-placeholder="Chose your user">
                            <option label="Select Department user"></option>
                            @foreach($all_designation as $designation)
                            <option value="{{$designation->id}}"{{ $designation->id ==$problem->designation_id ? "selected" : "" }}>{{$designation->designation_name}}</option>
                            @endforeach
                          </select>
                        @error('user_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>


                       <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Problem Name</label>
                        <select  class="js-example-basic-single form-control" name="problem_id"  data-placeholder="Chose your user">
                            <option label="Select Department user"></option>
                            @foreach($problem_list as $problem_list)
                            <option value="{{$problem_list->id}}"{{ $problem_list->id ==$problem->problem_id ? "selected" : "" }}>{{$problem_list->problem_name}}</option>
                            @endforeach
                          </select>
                        @error('user_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                       <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Servicing Cost</label>
                        <input type="text" class="form-control" id="Computer_id" name="service_cost" value="{{ $problem->service_cost }}"  >
                        @error('monitor')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                       </div>

                       <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Servicing Date</label>
                        <input type="date" class="form-control" id="Computer_id" name="service_date" value="{{ $problem->service_date }}" >
                        @error('monitor')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                       </div>
                       <div class="col-md-4">
                        <label for="form-control" class="font-bold">Servicing Details</label>
                      <div>
                        <textarea name="service_details"  id="" cols="40" rows="5"></textarea>
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
