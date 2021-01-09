<!DOCTYPE html>
<html>
<head>
<style>
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
  border: 0.5px solid #000000;
  padding: 2px;
}
.tables1{
  width: 100%;
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
}
.tables2{
  width: 100%;
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
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
    <h1 style="text-align: center;">PURCHASED ORDER</h1>
    <br>
    <br>
    <p style="text-align: center;">Republic of Philippines</p>
    <h4 style="text-align: center;">UNIVERSITY OF SOUTHEASTERN PHILIPPINES</h4>
    <p style="text-align: center;">Obrero Campus, Bo, Obrero, Davao City</p>
      <div class="table-responsive">
      <table class="tables1">
        <tr>
          @foreach($data as $key => $item)
          <th scope="col" style="text-align: left;">SUPPLIER:&nbsp;&nbsp;&nbsp;{{ $item->supplier }}
          <br>ADDRESS:&nbsp;&nbsp;&nbsp;{{ $item->address }}
          <br>TIN:&nbsp;&nbsp;&nbsp;{{ $item->tin }}</th>
          <th scope="col" style="text-align: left;">P.O. No.
          <br>DATE.
          <br>PROPERTY No.</th>
          @endforeach
        </tr>
      </table>
      <table class="tables1">
        <tr>
          @foreach($data as $key => $item)          
          <th scope="col" style="text-align: left;">Gentlemen:
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $item->gentlemen}}
           @endforeach 
        </tr>      
      </table>
      <table class="tables2">
        <tr>
          <th scope="col" style="font-size: 14">Property No</th>
          <th scope="col" style="font-size: 14">Unit</th>
          <th scope="col" style="font-size: 14">Description</th>
          <th scope="col" style="font-size: 14">Quantity.</th>
          <th scope="col" style="font-size: 14">Unit Cost.</th>
          <th scope="col" style="font-size: 14">Amount.</th>
        </tr>
            @foreach($data as $key => $item)
        <tr class="border-right">
          <td style="text-align:center;">{{ $item->property_no }}</td>
          <td style="text-align:center;">{{ $item->unit }}</td>
          <td style="text-align:center;">{{ $item->description }}</td>
          <td style="text-align:center;">{{ $item->quantity }}</td>
          <td style="text-align:center;">{{ $item->unit_cost }}</td>
          <td style="text-align:center;">{{ $item->amount }}</td>
        </tr>
      @endforeach
    </table>
  </div>
  </body>
</html>