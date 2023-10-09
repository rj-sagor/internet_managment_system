@extends('layouts.Backend_master')
@section('backend_app')

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    </div>
    <div class="d-flex justify-content-between m-4">
        <div>
            <h6 class="mb-0 text-uppercase">Computer Infornation Upload</h6>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('computerinfo.index') }}">Computer Information List</a>
        </div>
        </div>

   <form action="{{ route('computerinfo.update',$all_computer->id) }}" method="POST">
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
                            <option value="{{$user->id}}"{{ $user->id ==$all_computer->user_id ? "selected" : "" }}>{{$user->name}}</option>
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
                            <option value="{{$department->id}}"{{ $department->id ==$all_computer->department_id ? "selected" : "" }}>{{$department->department_name}}</option>
                            @endforeach
                          </select>
                        @error('user_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    {{-- <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">User</label>
                        <select  class="js-example-basic-single form-control" name="user_id"  data-placeholder="Chose your user">
                            <option label="Select Department user"></option>
                            @foreach($all_user as $user)
                            <option value="{{$user->id}}"{{ $user->id ==$all_computer->user_id ? "selected" : "" }}>{{$user->name}}</option>
                            @endforeach
                          </select>
                        @error('user_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div> --}}

                    {{-- <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Department</label>
                        <input type="text" class="form-control" id="department_id" name="department_id" value="{{ $all_computer->Info_to_department->department_name }}" >
                        @error('monitor')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Category</label>
                        <input type="text" class="form-control" id="type_id" name="type_id" value="{{ $all_computer->Info_to_category->category_name}}" >
                        @error('monitor')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div> --}}

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Computer Id</label>
                        <input type="text" class="form-control" id="Computer_id" name="computer_id" value="{{ $all_computer->computer_id }}" >
                        @error('monitor')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Monitor</label>
                        <input type="text" class="form-control" id="validationCustom01" name="monitor" value="{{ $all_computer->monitor }}" >
                        @error('monitor')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Mother Board</label>
                        <input type="text" class="form-control" id="validationCustom01" name="mother_board"v value="{{ $all_computer->mother_board }}" >
                        @error('mother_board')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Proccesor</label>
                        <input type="text" class="form-control" id="validationCustom01" name="proccesor" value="{{ $all_computer->proccesor }}" >
                        @error('proccesor')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Ip Address</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="ip_address"  value="{{ $all_computer->ip_address }}">

                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Mac Addess</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="mac_address" value="{{ $all_computer->mac_address }}" >
                        @error('mac_address')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Installation Date</label>
                        <input type="date" class="form-control" id="validationCustom01" name="installation_date" value="{{ $all_computer->installation_date }}" >
                        @error('installation_date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Ram</label>
                        <input type="text" class="form-control" id="validationCustom01" name="ram" value="{{ $all_computer->ram }}" >
                        @error('ram')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">OS system</label>
                        <input type="text" class="form-control" id="validationCustom01" name="os_system" value="{{ $all_computer->os_system}}" >
                        @error('os_system')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">HDD/SSD</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="hdd_ssd" value="{{ $all_computer->hdd_ssd }}" >
                        @error('hdd_ssd')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Price</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="price" value="{{ $all_computer->price }}" >
                        @error('price')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Tender Memo Number</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="tender_number" value="{{ $all_computer->tender_number }}" >
                        @error('tender_number')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Tendar Date</label>
                        <input type="date" class="form-control" id="validationCustom01"  name="tendar_date" value="{{ $all_computer->tendar_date }}" >
                        @error('tendar_date')
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
