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
          <th scope="col">SUPPLIER.</th>
          <th scope="col">ADDRESS.</th>
          <th scope="col">TIN.</th>
          <th scope="col">P.O. No.</th>
          <th scope="col">DATE.</th>
          <th scope="col">PROPERTY No.</th>
          <th scope="col">UNIT.</th>
        </tr>
            @foreach($data as $key => $item)
        <tr>
          <td>{{ $item->supplier }}</td>
          <td>{{ $item->address }}</td>
          <td>{{ $item->tin }}</td>
          <td>{{ $item->po_no }}</td>
          <td>{{ $item->date }}</td>
          <td>{{ $item->property_no }}</td>
          <td>{{ $item->unit }}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>