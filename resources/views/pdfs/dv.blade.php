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
          <th scope="col">EMPLOYEE NO.</th>
          <th scope="col">BUR NO.</th>
          <th scope="col">ADDRESS</th>
          <th scope="col">DATE</th>
        </tr>
            @foreach($data as $key => $item)
        <tr>
          <td>{{ $item->fund_cluster }}</td>
          <td>{{ $item->employee_no }}</td>
          <td>{{ $item->bur_no }}</td>
          <td>{{ $item->address }}</td>
          <td>{{ $item->date }}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>