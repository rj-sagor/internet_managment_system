@extends('layouts.Backend_master')
@section('backend_app')

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    </div>
    <div class="d-flex justify-content-between m-4">
        <div>
            <h6 class="mb-0 text-uppercase">Printer Infornation Upload</h6>
        </div>
       {{-- form div --}}
       {{-- <div class="buttons">
        <a id="showall">All</a>
        <a class="btn btn-info showSingle" target="1">Computer From</a>
        <a class="btn btn-info  showSingle" target="2">Printer Form</a>
        <a class="btn  btn-info showSingle" target="3">Scanner Form</a>
      </div> --}}
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Form List
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
           {{-- <li> <a id="showall">All</a></li> --}}
           <li> <a class="dropdown-item showSingle" href="{{ route('computerinfo.create') }}" >Computer From</a></li>
           <li><a class="dropdown-item  showSingle" href="{{ route('printer.create') }}">Printer form</a></li>
           <li> <a class="dropdown-item showSingle" >Scanner Form</a></li>
        </ul>
      </div>



        <div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                 All Information List
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="{{ route('computerinfo.index') }}">Computer List</a></li>
                  <li><a class="dropdown-item" href="{{ route('printer.index') }}">Printer List</a></li>
                  <li><a class="dropdown-item" href="{{ route('scanner.index') }}">Scanner List</a></li>
                </ul>
              </div>
        </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Department</label>
                <select id="Department_id" class="js-example-basic-single form-control"  data-placeholder="Chose your department">
                    <option label="Select Department Id"></option>
                    @foreach($all_department as $department)
                    <option value="{{$department}}">{{$department->department_name}}</option>
                    @endforeach
                  </select>
                @error('department_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>

            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Category</label>
                <select id="Category_id" class="js-example-basic-single form-control" data-placeholder="Chose your department">
                    <option label="Select Department Id"></option>
                    @foreach($all_category as $category)
                    <option value="{{$category}}">{{$category->category_name}}</option>
                    @endforeach
                  </select>
                @error('type_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>

        </div>
        <hr>
    {{-- div computer from selection --}}



       <div class="text-center">
        <h2>Printer Information Form</h2>
       </div>
      <div class="d-flex justify-content-center">
     <form action="{{ route('printer.store') }}" method="POST">
        @csrf
        <div class="row ">
            <div class="col-md-6 ms-4">
                <label for="inputCity" class="form-label">Printer_id</label>
                <input type="text" class="form-control" id="printer_id" name="printer_id" value="38" required>
              </div>
              <input type="hidden" class="form-control" id="printer_department_id" name="department_id" >
              <input type="hidden" class="form-control" id="printer_type_id" name="type_id" required>
              <div class="col-md-4 ms-4">
                <label for="inputCity" class="form-label">Printer Brand</label>
                <input type="text" class="form-control" id="brand" name="brand" required>
              </div>
              <div class="col-md-6 ms-4">
                <label for="inputCity" class="form-label">Printer Model</label>
                <input type="text" class="form-control" id="model" name="model" required>
              </div>

          </div>
          <div class="col-12 mt-5 text-center mx-auto">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
     </form>
      </div>
      </div>



       </div>

    </main>

 @endsection
 @section("Backend_css")
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


@endsection

@section('backend_js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function() {

    // printer section start
    $("#Department_id").change(function () {
    var department =  $("#Department_id").val();
    const myJSON = JSON.parse( department);
    var printer =  $("#printer_id").val();
    document.getElementById("printer_id").setAttribute('value', printer.concat(myJSON.department_id));
    document.getElementById("printer_department_id").setAttribute('value', myJSON.id );
    });

    $("#Category_id").change(function () {
    var category =  $("#Category_id").val();
    const myJSON = JSON.parse( category);
    var printer =  $("#printer_id").val();
    document.getElementById("printer_id").setAttribute('value', printer.concat(myJSON.category_id));
    document.getElementById("printer_type_id").setAttribute('value', myJSON.id );

    });
    // printer section end
    // scanner section start


    $('.js-example-basic-single').select2();
});
</script>

@endsection
