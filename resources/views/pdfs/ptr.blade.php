<!DOCTYPE html>
<html>
<head>
<style>


table {
 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  margin-bottom: 50px;
  margin-top: 50px;

}

caption {
  text-align: left;
  color: silver;
  font-weight: bold;
  text-transform: uppercase;
  padding: 5px;
}

thead {
  background: SteelBlue;
  color: white;
}

th,
td {
  border: 2px solid #000000;
  padding: 2px;
}
.tables1{
  width: 100%;
}
.thyellow{
  background-color: #f4df0b;
}
.thblue{
  background-color: #2495db;
}

</style>
</head>
    <body>

      <table class="tables1">
        <tr>
          <th scope="col">FUND CLUSTER</th>
          <th scope="col">FROM OFFICER</th>
          <th scope="col">TO OFFICER</th>
          <th scope="col">DATE</th>
          <th scope="col">TRANSFER TYPE</th>
          <th scope="col">AQUIRED DATE</th>
        </tr>
            @foreach($data as $key => $item)
        <tr>
          <td>{{ $item->fund_cluster }}</td>
          <td>{{ $item->from_officer }}</td>
          <td>{{ $item->to_officer }}</td>
          <td>{{ $item->date }}</td>
          <td>{{ $item->transfer_type }}</td>
          <td>{{ $item->acquired_date }}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>