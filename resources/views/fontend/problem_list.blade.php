
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
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
            <h6><a href="www.nha.gov.bd">www.nha.gob.bd</a></h6>
        </div>
    </div>

  <div class="mt-5  d-flex justify-content-center">
    <div class="me-4">
        <a class="btn btn-outline-primary">Problem_list</a>
    </div>
    <div>
        <a class="btn btn-outline-info" href="{{ route('userlogin.create') }}"> Add Problem </a>
    </div>
  </div>
</header>
<!-- table section -->
<main class="container mx-auto mt-5">
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>SL</th>
                <th>ID</th>
                <th>Name</th>
                <th>Trucking Number</th>
                <th>Designation</th>
                <th>Room Number</th>
                <th>Problem</th>
                <th>Upload Date</th>
                <th>status</th>
                <th>action</th>
            </tr>
        </thead>
       <tbody>
        @foreach ($all_problem as $problem )
        <tr>
            <td>{{ $loop->index+1  }}</td>
            <td>{{ $problem->user_id  }}</td>
            <td>{{ $problem->name  }}</td>
            <td>{{ $problem->problem_trucking_number  }}</td>
            <td>{{ $problem->problem_to_designation->designation_name  }}</td>
            <td>{{ $problem->room_number  }}</td>
            <td>{{ $problem->problem_to_problem->problem_name  }}</td>
            <td>{{ $problem->created_at  }}</td>
            <td>{{ $problem->problem_to_status->status_name  }}</td>
            <td>
                   <a href=""><i class="fas fa-edit"></i></a>
            </td>
        </tr>
        @endforeach

       </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
</main>

<footer class="container mx-auto mt-2">
   <div class="text-center p-5">
    <h3>Copyright Computer cell @ of NHA</h3>
   </div>

</footer>
</body>
</html>
