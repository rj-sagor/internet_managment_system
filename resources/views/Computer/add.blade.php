@extends('layouts.Backend_master')
@section('backend_app')

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    </div>
   <form action="{{ route('computerinfo.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="p-4 border rounded">
                <div class="row g-3 needs-validation" novalidate="">
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">User Name</label>
                        <select class="js-example-basic-single form-control" name="user_id" data-placeholder="Choose User Name">
                            <option label="Select Department Id"></option>
                            @foreach($all_user_name as $userName)
                            <option value="{{$userName->id}}">{{$userName->name}}</option>
                            @endforeach
                          </select>
                        @error('user_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Monitor</label>
                        <input type="text" class="form-control" id="validationCustom01" name="monitor" >
                        @error('monitor')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Mother Board</label>
                        <input type="text" class="form-control" id="validationCustom01" name="mother_board"  >
                        @error('mother_board')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Proccesor</label>
                        <input type="text" class="form-control" id="validationCustom01" name="proccesor"  >
                        @error('proccesor')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Ip Address</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="ip_address" >

                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Mac Addess</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="mac_address" >
                        @error('mac_address')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Installation Date</label>
                        <input type="date" class="form-control" id="validationCustom01" name="installation_date"  >
                        @error('installation_date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Ram</label>
                        <input type="text" class="form-control" id="validationCustom01" name="ram"  >
                        @error('ram')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">OS system</label>
                        <input type="text" class="form-control" id="validationCustom01" name="os_system"  >
                        @error('os_system')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">HDD/SSD</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="hdd_ssd" >
                        @error('hdd_ssd')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Price</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="price" >
                        @error('price')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Tender Memo Number</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="tender_number" >
                        @error('tender_number')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Tendar Date</label>
                        <input type="date" class="form-control" id="validationCustom01"  name="tendar_date" >
                        @error('tendar_date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Comments</label>
                        <textarea name="comments" id="" cols="35" rows="5"></textarea>
                        @error('comments')
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
