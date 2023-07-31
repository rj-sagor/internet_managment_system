@extends('layouts.Backend_master')
@section('backend_app')

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    </div>
    <!--end breadcrumb-->
    <div class="row">
        <div class="col-xl-9 mx-auto">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show t" role="alert">
          <strong>{{session('success') }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
         @endif
              </div>
            {{-- form start --}}
            <form action="{{ route('UserUpoload.store') }}" method="post">
                @csrf
                <div class="d-flex justify-content-between">
            <div>
                <h6 class="mb-0 text-uppercase">Personal Information</h6>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('UserUpoload.index') }}">User List</a>
            </div>
            </div>

            <hr>
            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded">
                        <div class="row g-3 needs-validation" novalidate="">
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Department</label>
                                <select class="js-example-basic-single form-control" name="department_id" data-placeholder="Choose category">
                                    <option label="Select Department Name"></option>
                                    @foreach($All_Department as $department)
                                    <option value="{{$department->id}}">{{$department->department_name}}</option>
                                    @endforeach
                                  </select>
                                @error('department_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div>

                            {{-- <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Department_ID</label>
                                <select class="js-example-basic-single form-control" name="department_id" data-placeholder="Choose category">
                                    <option label="Select Department Id"></option>
                                    @foreach($All_Department as $department)
                                    <option value="{{$department->id}}">{{$department->department_id}}</option>
                                    @endforeach
                                  </select>
                                @error('department_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div> --}}

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">E-Nothi Id</label>
                                <input type="text" class="form-control" id="validationCustom01" name="user_id"  >
                                @error('user_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Name</label>
                                <input type="text" class="form-control" id="validationCustom01" name="name"  >
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div>


                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Designation</label>
                                <select class="js-example-basic-single form-control" name="designation_id" data-placeholder="Choose category">
                                    <option label="Select Department Name"></option>
                                    @foreach($All_desig as $designation)
                                    <option value="{{$designation->id}}">{{$designation->designation_name}}</option>
                                    @endforeach
                                  </select>
                                @error('designation_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div>


                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Room Number</label>
                                <input type="text" class="form-control" id="validationCustom01" name="room_number" >
                                @error('room_number')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <hr>
             <div class="col-12">
                <button class="btn btn-primary" >save </button>
            </div>
            {{-- form end --}}

        </form>

        </div>
    </div>
    <!--end row-->
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
