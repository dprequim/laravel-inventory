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
          <th scope="col">ITEM NO.</th>
          <th scope="col">UNIT</th>
          <th scope="col">ITEM DESC.</th>
          <th scope="col">QUANTITY</th>
          <th scope="col">BID PRICE</th>
          <th scope="col">UNIT PRICE</th>
          <th scope="col">TOTAL AMOUNT</th> 
        </tr>
            @foreach($data as $key => $item)
        <tr>
          <td>{{ $r->item_no }}</td>
          <td>{{ $r->unit }}</td>
          <td>{{ $r->item_desc }}</td>
          <td>{{ $r->quantity }}</td>
          <td>{{ $r->bid_price }}</td>
          <td>{{ $r->unit_price }}</td>
          <td>{{ $r->total_amount }}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>