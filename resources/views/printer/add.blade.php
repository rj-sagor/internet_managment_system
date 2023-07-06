@extends('layouts.Backend_master')
@section('backend_app')

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    </div>
   <form action="{{ route('printer.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="p-4 border rounded">
                <div class="row g-3 needs-validation" novalidate="">
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">User Name</label>
                        <select class="js-example-basic-single form-control" name="user_id" data-placeholder="Choose User Name">
                            <option label="Select Department Id"></option>
                            @foreach($all_user as $userName)
                            <option value="{{$userName->id}}">{{$userName->name}}</option>
                            @endforeach
                          </select>
                        @error('user_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Printer Brand</label>
                        <input type="text" class="form-control" id="validationCustom01" name="brand" >
                        @error('brand')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Printer Brand</label>
                        <input type="text" class="form-control" id="validationCustom01" name="model" >
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
