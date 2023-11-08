
<!DOCTYPE html>
<html>
<head>
<style>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
    </div>
<table>
  <tr>
    <th>Sl</th>
    <th>Scanner Id</th>
    <th>Scanner Details</th>
    <th>User Name</th>
    <th>Department</th>
  </tr>
  @foreach ($info as $data )

      <tr>
        <td>{{ $loop->index+1  }}</td>
        <td>{{ $data->scanner_id }}</td>
        <td>{{ $data->scanner_brand }}-{{ $data->scanner_model }}</td>
        <td>
            @if (!is_null($data->Info_to_user))
            {{ $data->Info_to_user->name }} <br>
            {{ $data->Info_to_user->user_id }}

            @else
            {{ "No User Exit" }}
            @endif
    </td>
    <td>
        @if (!is_null($data->Info_to_department))
        {{ $data->Info_to_department->department_name }} <br>
        @else
        {{ "No User Exit" }}

        @endif
</td>
  </tr>
  @endforeach



</table>

</body>
</html
