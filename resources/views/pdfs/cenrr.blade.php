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
          <th scope="col">EMPLOYEE NAME</th>
          <th scope="col">EMPLOYEE No.</th>
          <th scope="col">OFFICE</th>
          <th scope="col">DIVISION</th>
          <th scope="col">DATE</th>
          <th scope="col">UNIT AMOUNT</th> 
        </tr>
            @foreach($data as $key => $item)
        <tr>
          <td>{{ $item->employee_name }}</td>
          <td>{{ $item->employee_no }}</td>
          <td>{{ $item->office }}</td>
          <td>{{ $item->division }}</td>
          <td>{{ $item->date }}</td>
          <td>{{ $item->unit_amount }}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>