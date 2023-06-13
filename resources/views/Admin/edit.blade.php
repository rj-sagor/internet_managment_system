@extends('layouts.Backend_master')
@section('backend_app')

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    </div>
    <!--end breadcrumb-->
    <div class="row">
        <div class="col-xl-9 mx-auto">

              </div>
            {{-- form start --}}
            <form action="{{route('admin.update',$info->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="d-flex justify-content-between">
            <div>
                <h6 class="mb-0 text-uppercase">Personal Information</h6>
            </div>
            <div>
                <a class="btn btn-primary" href="">Information List</a>
            </div>
            </div>

            <hr>
            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded">
                        <div class="row g-3 needs-validation" novalidate="">
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">ID</label>
                                <input type="number" class="form-control" id="validationCustom01" name="profile_id" value="{{ $info->profile_id }}" >

                            </div>



                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Name</label>
                                <input type="text" class="form-control" id="validationCustom01" name="name" value="{{ $info->name }}"  >

                            </div>



                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="validationCustom01"  name="designation" value="{{ $info->designation }}" >

                            </div>


                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Room Number</label>
                                <input type="text" class="form-control" id="validationCustom01" name="room_number" value="{{ $info->room_number }}" >

                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Department</label>
                                <input type="text" class="form-control" id="validationCustom01" name="department" value="{{ $info->department }}"  >

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h6 class="mb-0 text-uppercase">Computer Information</h6>
            <hr>
            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded">
                        <div class="row g-3 needs-validation" novalidate="">
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Monitor</label>
                                <input type="text" class="form-control" id="validationCustom01" name="monitor" value="{{ $info->monitor }}" >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Mother Board</label>
                                <input type="text" class="form-control" id="validationCustom01" name="mother_board" value="{{ $info->mother_board }}"  >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Proccesor</label>
                                <input type="text" class="form-control" id="validationCustom01" name="proccesor"  value="{{ $info->proccesor }}" >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Ip Address</label>
                                <input type="text" class="form-control" id="validationCustom01"  name="ip_address" value="{{ $info->ip_address }}"  >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Mac Addess</label>
                                <input type="text" class="form-control" id="validationCustom01"  name="mac_address" value="{{ $info->mac_address }}" >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Installation Date</label>
                                <input type="text" class="form-control" id="validationCustom01" name="installation_date" value="{{ $info->installation_date }}" >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Ram</label>
                                <input type="text" class="form-control" id="validationCustom01" name="ram"  value="{{ $info->ram }}" >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">OS system</label>
                                <input type="text" class="form-control" id="validationCustom01" name="os_system"  value="{{ $info->os_system }}" >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">HDD/SSD</label>
                                <input type="text" class="form-control" id="validationCustom01"  name="hdd_ssd"  value="{{ $info->hdd_ssd }}" >


                        </div>
                    </div>
                </div>
            </div>
            <hr>
             <div class="col-12">
                <button class="btn btn-primary" type="submit">Update </button>
            </div>
            {{-- form end --}}

        </form>

        </div>
    </div>
    <!--end row-->
</main>

@endsection
