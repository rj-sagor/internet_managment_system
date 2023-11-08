
<!DOCTYPE html>
<html>
<head>

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
    </div>

<table>
  <tr>
    <th>Sl</th>
    <th>Computer Id</th>
    <th>Computer Information</th>
    <th>User Name</th>
    <th>Department</th>
  </tr>
  @foreach ($info as $data )
      <tr>
        <td>{{ $loop->index+1  }}</td>
        <td>{{ $data->computer_id }}</td>
        <td>{{ $data->monitor }}-{{ $data->mother_board }}-{{ $data->proccesor }}-{{ $data->ram }}-{{ $data->ip_address }} <br>
            {{ $data->hdd_ssd }}-{{ $data->mac_address }}-{{ $data->tender_date }}</td>
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
