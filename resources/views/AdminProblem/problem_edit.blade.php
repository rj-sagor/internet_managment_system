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
            <form action="{{ route('admin_Problem_list.update',$problem->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="d-flex justify-content-between">
            <hr>
            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded">
                        <div class="row g-3 needs-validation" novalidate="">
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Id</label>
                                <input type="number" class="form-control" id="validationCustom01" name="user_id" value="{{ $problem->user_id}}" >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Name</label>
                                <input type="text" class="form-control" id="validationCustom01" name="name" value="{{ $problem->name }}"  >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="validationCustom01" name="designation"  value="{{ $problem->designation }} ">

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Department</label>
                                <input type="text" class="form-control" id="validationCustom01"  name="department" value="{{ $problem->department }}"  >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Room Number</label>
                                <input type="text" class="form-control" id="validationCustom01"  name="room_number" value="{{ $problem->room_number }}" >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Problem</label>
                                <input type="text" class="form-control" id="validationCustom01" name="problem" value="{{ $problem->problem }}" >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Status</label>
                                <input type="text" class="form-control" id="validationCustom01" name="status"  value="{{ $problem->status }}" >

                            </div>

                            {{-- <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Comments</label>
                                <input type="text" class="form-control" id="validationCustom01" name="comment"  value="" >

                            </div> --}}
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
