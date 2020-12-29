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
          <th scope="col">ITEM No.</th>
          <th scope="col">ITEM DESCRIP.</th>
          <th scope="col">QUANTITY.</th>
          <th scope="col">UNIT.</th>
          <th scope="col">UNIT PRICE.</th> 
        </tr>
            @foreach($data as $key => $item)
        <tr>
          <td>{{ $item->item_no }}</td>
          <td>{{ $item->item_desc }}</td>
          <td>{{ $item->quantity }}</td>
          <td>{{ $item->unit }}</td>
          <td>{{ $item->unit_price }}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>