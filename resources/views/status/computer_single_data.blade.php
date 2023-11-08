
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
                @if (!is_null($info->Info_to_user))
                {{ $info->Info_to_user->name }}
                @else
                {{ "No User Exit" }}

                @endif</td>
        </tr>
        <tr>
            <td style="text-align: left;">User Id</td>
            <td style="text-align: right;">
                @if (!is_null($info->Info_to_user))
                {{ $info->Info_to_user->user_id }}
                @else
                {{ "No User Exit" }}

                @endif</td>
            </td>
        </tr>
        <tr>
            <td style="text-align: left;">Department</td>
            <td style="text-align: right;">{{ $info->Info_to_department->department_name}}</td>
        </tr>
        <tr>
            <td style="text-align: left;">Computer Id</td>
            <td style="text-align: right;">{{ $info->computer_id}}</td>


        </tr>
        <tr>
            <td style="text-align: left;">Motherboard</td>
            <td style="text-align: right;">{{ $info->mother_board }}</td>
        </tr>
        <tr>
            <td style="text-align: left;">Proccesor</td>
            <td style="text-align: right;">{{ $info->proccesor }}</td>
        </tr>
        <tr>
            <td style="text-align: left;">Ip_address</td>
            <td style="text-align: right;">{{ $info->ip_address }}</td>
        </tr>
        <tr>
            <td style="text-align: left;">Monitor</td>
            <td style="text-align: right;">{{ $info->monitor }}</td>
        </tr>
        <tr>
            <td style="text-align: left;">Tender Memo Number</td>
            <td style="text-align: right;">{{ $info->tender_number }}</td>
        </tr>
        <tr>
            <td style="text-align: left;">Mac Address</td>
            <td style="text-align: right;">{{ $info->mac_address }}</td>
        </tr>
        <tr>
            <td style="text-align: left;">Installation Date</td>
            <td style="text-align: right;">{{ $info->installation_date }}</td>
        </tr>
        <tr>
            <td style="text-align: left;">Ram</td>
            <td style="text-align: right;">{{ $info->ram }}</td>
        </tr>
        <tr>
            <td style="text-align: left;">HDD/SSD</td>
            <td style="text-align: right;">{{ $info->hdd_ssd }}</td>
        </tr>


    </table>
    <div>
        <p style="text-align: last;">{{ $date }}</p>
    </div>

</body>
</html
