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
          <th scope="col">TYPE</th>
          <th scope="col">ENGINE NO</th>
          <th scope="col">ACQ DATE</th>
          <th scope="col">LAST REPAIR DATE</th>
          <th scope="col">BRAND NAME</th>
          <th scope="col">PROPERTY</th>
        </tr>
            @foreach($data as $key => $item)
        <tr>
          <td>{{ $item->type }}</td>
          <td>{{ $item->engine_no }}</td>
          <td>{{ $item->acq_date }}</td>
          <td>{{ $item->lastrepair_date }}</td>
          <td>{{ $item->brand_name }}</td>
          <td>{{ $item->property_no }}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>