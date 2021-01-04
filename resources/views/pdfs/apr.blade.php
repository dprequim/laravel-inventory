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
          <th scope="col">OFFICE SECTION.</th>
          <th scope="col">P.R No.</th>
          <th scope="col">CENTER CODE.</th>
          <th scope="col">DATE.</th>
          <th scope="col">PROPERTY No.</th>
          <th scope="col">ITEM DESC.</th> 
        </tr>
            @foreach($data as $key => $item)
        <tr>
          <td>{{ $pr->office_section }}</td>
          <td>{{ $pr->pr_no }}</td>
          <td>{{ $pr->center_code }}</td>
          <td>{{ $pr->date }}</td>
          <td>{{ $pr->property_no }}</td>
          <td>{{ $pr->item_desc }}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>