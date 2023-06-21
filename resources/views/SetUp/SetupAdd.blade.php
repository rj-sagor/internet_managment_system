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
            <form action="{{ route('Setup.store') }}" method="post">
                @csrf
                <div class="d-flex justify-content-between">
            <div>
                <h6 class="mb-0 text-uppercase">Department setup</h6>
            </div>
            <div>

            </div>
            </div>

            <hr>
            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded">
                        <div class="row g-3 needs-validation" novalidate="">

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Department_Name</label>
                                <input type="text" class="form-control" id="validationCustom01" name="department_name"  >
                                @error('department_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">DepartMent Id</label>
                                <input type="text" class="form-control" id="validationCustom01"  name="department_id" >
                                @error('department_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <hr>
             <div class="col-12">
                <button class="btn btn-primary" type="submit">প্রসাশন </button>
            </div>
            {{-- form end --}}

        </form>

        </div>
    </div>
    <!--end row-->
</main>

@endsection
