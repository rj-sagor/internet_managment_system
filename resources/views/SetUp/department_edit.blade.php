@extends('layouts.Backend_master')
@section('backend_app')

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    </div>
    <div>
        <h4>Desgination Edit</h4>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
            <div class="p-4 border rounded">
                <form action="{{ route('Setup.update',$all_depart->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="row g-3 needs-validation " novalidate="">

                        <div class="col-md-4 mx-auto">
                            <label for="validationCustom01" class="form-label">Department</label>
                            <input type="text" class="form-control" id="validationCustom01" name="department_name" value="{{ $all_depart->department_name }}" >
                            @error('department_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </div>

                        <div class="col-md-4 mx-auto">
                            <label for="validationCustom01" class="form-label">Department Id</label>
                            <input type="text" class="form-control" id="validationCustom01" name="department_id" value="{{ $all_depart->department_id }}" >
                            @error('department_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </div>

                </div>
               <div class="d-flex justify-content-center mt-5 ">
                <button type="submit" class="btn btn-primary ">update</button>
               </div>

                </form>

            </div>
        </div>
    </div>


    {{-- modal end --}}


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


@endsection
