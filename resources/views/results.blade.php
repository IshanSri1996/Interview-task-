<!DOCTYPE html>
<html>
<style>
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<body>


<table>
  <tr>
    <th>Name</th>
    <th>Weight</th>
  </tr>
  <tr>
@foreach ($stwgs as $stwg)
    <td>{{ $stwg['name'] }}</td>
    <td>{{ $stwg['weight'] }}</td>
  </tr>
@endforeach
</table> 


</body>
</html>