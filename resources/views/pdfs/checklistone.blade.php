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
        <th scope="col">Item</th>
        <th scope="col">Property No.</th>
        <th scope="col">ICS No.</th>
        <th scope="col">Date Acquired</th>
        <th scope="col">Amount</th>
        <th scope="col">Property Owner</th>
        <th scope="col">Transfer To</th>
        <th scope="col">Status</th>
        <th scope="col">Location</th>
        <th scope="col">Remarks</th>
        <th scope="col">Date Checked</th>
        </tr>
            @foreach($data as $key => $item)
        <tr>
        <td>{{ $item->item }}</td>
        <td>{{ $item->property_no }}</td>
        <td>{{ $item->ics_no }}</td>
        <td>{{ $item->date_acquired }}</td>
        <td>{{ $item->amount }}</td>
        <td>{{ $item->property_owner }}</td>
        <td>{{ $item->transfer_to }}</td>
        <td>{{ $item->status }}</td>
        <td>{{ $item->location }}</td>
        <td>{{ $item->remarks }}</td>
        <td>{{ $item->date_checked }}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>