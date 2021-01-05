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
          <th scope="col">Fund Cluster.</th>
          <th scope="col">Place of Storage.</th>
          <th scope="col">Date.</th>
          <th scope="col">UNIT.</th>
          <th scope="col">Description.</th>
          <th scope="col"></th> 
        </tr>
            @foreach($data as $key => $item)
        <tr>
          <td>{{ $item->fund_cluster }}</td>
          <td>{{ $item->storage_place }}</td>
          <td>{{ $item->date }}</td>
          <td>{{ $item->unit }}</td>
          <td>{{ $item->description }}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>