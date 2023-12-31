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
           <li> <a class="dropdown-item showSingle" href="{{ route('computerinfo.create') }}">Computer From</a></li>
           <li><a class="dropdown-item  showSingle" href="{{ route('printer.create') }}">Printer Form</a></li>
           <li> <a class="dropdown-item showSingle" href="{{ route('scanner.create') }}">Scanner Form</a></li>
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


      <div id="div1" class="targetDiv">
        <div class="text-center">
            <h1>Computer Information Form</h1>
        </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('computerinfo.store') }}" method="POST">
                        @csrf
                    <div class="p-4 border rounded">
                        <div class="row g-3 needs-validation" novalidate="">
                            {{-- main form start --}}
                                {{-- <label for="validationCustom01" class="form-label">Computer Id</label> --}}
                                <input type="hidden" class="form-control" id="department_id" name="department_id" >

                                {{-- <label for="validationCustom01" class="form-label">Computer Id</label> --}}
                                <input type="hidden" class="form-control" id="type_id" name="type_id" >

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Computer Id</label>
                                <input type="text" class="form-control" id="Computer_id" name="computer_id" value="৩৮" >
                                @error('monitor')
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
                    <div class="col-12 p-5 text-center mx-auto">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>

                  </form>
                </div>
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


$("#Department_id").change(function () {
    var department =  $("#Department_id").val();
    const myJSON = JSON.parse( department);
    var computer =  $("#Computer_id").val();
    document.getElementById("Computer_id").setAttribute('value', computer.concat(myJSON.department_id));
    document.getElementById("department_id").setAttribute('value', myJSON.id );
    });

    $("#Category_id").change(function () {
    var category =  $("#Category_id").val();
    const myJSON = JSON.parse( category);
    var computer =  $("#Computer_id").val();
    document.getElementById("Computer_id").setAttribute('value', computer.concat(myJSON.category_id));
    document.getElementById("type_id").setAttribute('value', myJSON.id );

    });



    $('.js-example-basic-single').select2();
});
</script>

@endsection
