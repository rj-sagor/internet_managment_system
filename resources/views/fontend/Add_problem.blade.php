
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <title>Fontend</title>
</head>
<body>
<header class="container mx-auto">
    <div class="d-flex justify-content-center align-items-center mt-4 text-center">
        <div class="me-4">
            <img src="{{asset('backend/assets/images/NHA_PNG_LOGO.png')}}" alt="" height="150px">
        </div>
        <div class="ms-4">
            <h4>National Housing Authority</h4>
            <h5>Grihayan Bhaban</h5>
            <h5>82, Segunbagica, Dhaka</h5>
            <h6><a href="www.nha.gov.bd">www.nha.gob.bd</a></h5>
        </div>
    </div>

  <div class="mt-5  d-flex justify-content-center">
    <div class="me-4">
       <a class="btn btn-outline-primary" href="{{ url('userlogin') }}">Problem_list</a>
    </div>
    <div>
        <a class="btn btn-outline-info" href=""> Add Problem </a>
    </div>
  </div>
</header>
<div class="container mx-auto p-4">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show t" role="alert">
  <strong>{{session('success') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
 @endif
</div>
<!-- table section -->
{{-- id submit section --}}
{{-- <div class="container mx-auto">
  <form action="{{ route('userlogin.show') }}" method="get">
    @csrf
    <div class="d-flex">
        <div class="col-md-4 ms-5">
            <label for="validationDefault01" class="form-label">User ID</label>
            <input type="number" class="form-control" id="validationDefault03"  name="user_id">

        </div>
        <div class="mt-4 p-2">
            <button class="btn btn-primary">submit</button>
        </div>
       </div>
  </form>
</div> --}}
<main class="container mx-auto p-5">
    <div class="card">
        <div class="card-body">
            <div class="p-4 border rounded">
               <form action="{{ route('userlogin.store') }}" method="post">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">User ID</label>
                        <input type="text" class="form-control" id="validationDefault01" name="user_id" >
                        @error('user_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="validationDefault02"  name="name">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">User Designation</label>
                        <input type="text" class="form-control" id="validationDefault02" name="designation" >
                        @error('designation')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">User Department</label>
                        <input type="text" class="form-control" id="validationDefault02" name="department" >
                        @error('department')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">User Room Number</label>
                        <input type="text" class="form-control" id="validationDefault02" name="room_number" >
                        @error('room_number')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">User Problem</label>
                        <textarea name="problem" class="form-control" id="validationDefault02" cols="15" rows="5"></textarea>
                        @error('problem')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
               </form>
            </div>
        </div>
    </div>
</main>

<footer class="container mx-auto mt-2">
   <div class="text-center p-5">
    <h3>Copyright Computer cell @ of NHA</h3>
   </div>

</footer>
</body>
</html>
