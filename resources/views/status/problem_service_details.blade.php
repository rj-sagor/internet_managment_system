
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
  table {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid black;
  }

  th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }
</style>
</head>
<body>
    <div>
        <div>
        </div>
        <div style="text-align: center">
            <p style="font-size: 20px">National Housing Authority</p>
            <p>Grihayon bhabon <br>
            82,Segunbagica,Dhaka-1000</p>
        </div>
        <br>
        <br>
    </div>

    <table border="1" style="width: 100%;">
        <tr>
            <td style="text-align: left;">User Name</td>
            <td style="text-align: right;">
               {{ $info->name }}</td>
        </tr>
        <tr>
            <td style="text-align: left;">User Id</td>
            <td style="text-align: right;">
              {{ $info->user_id }}
            </td>
        </tr>
        <tr>
            <td style="text-align: left;">Trucking Number</td>
            <td style="text-align: right;">
              {{ $info->problem_trucking_number }}
            </td>
        </tr>
        {{-- <tr>
            <td style="text-align: left;">Department</td>
            <td style="text-align: right;">{{ $info->Info_to_department->department_name}}</td>
        </tr> --}}
        <tr>
            <td style="text-align: left;">Designation</td>
            <td style="text-align: right;">{{ $info->problem_to_designation->designation_name}}</td>


        </tr>
        <tr>
            <td style="text-align: left;">Department</td>
            <td style="text-align: right;">{{ $info->problem_to_department->department_name }}</td>
        </tr>
        <tr>
            <td style="text-align: left;">Room Number</td>
            <td style="text-align: right;">{{ $info->room_number }}</td>
        </tr>
        <tr>
            <td style="text-align: left;">Problem</td>
            <td style="text-align: right;">{{ $info->problem_to_problem->problem_name }}</td>
        </tr>
        <tr>
            <td style="text-align: left;">Service Cost</td>
            <td style="text-align: right;"> @if (!is_null($info->service_cost))
                {{ $info->service_cost }}
                @else
                {{ "No servicing" }}

                @endif</td>
        </tr>
        <tr>
            <td style="text-align: left;">Service Date</td>
            <td style="text-align: right;">@if (!is_null($info->service_date))
                {{ $info->service_date }}
                @else
                {{ "No servicing Date" }}

                @endif</td>
        </tr>
        <tr>
            <td style="text-align: left;">Servicing Details</td>
            <td style="text-align: right;">@if (!is_null($info->service_details))
                {{ $info->service_details }}
                @else
                {{ "No Details available" }}

                @endif</td>
        </tr>

        <tr>
            <td style="text-align: left;">Status</td>
            <td style="text-align: right;">{{ $info->status }}</td>
        </tr>


    </table>
    <div>
        {{-- <p style="text-align: last;">{{ $date }}</p> --}}
    </div>

</body>
</html
