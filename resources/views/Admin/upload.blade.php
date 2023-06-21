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
            <form action="{{route('admin.store')}}" method="post">
                @csrf
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
                                <input type="number" class="form-control" id="validationCustom01" name="profile_id"  >
                                @error('profile_id')
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
                                <input type="text" class="form-control" id="validationCustom01"  name="designation" >
                                @error('designation')
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
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Department</label>
                                <input type="text" class="form-control" id="validationCustom01" name="department"  >
                                @error('department')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
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
            <hr>
             <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit </button>
            </div>
            {{-- form end --}}

        </form>

        </div>
    </div>
    <!--end row-->
</main>

@endsection
