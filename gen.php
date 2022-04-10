<?php 
include('list.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Random Generator</title>
	<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #ff0053;
  color: white;
}

</style>
</head>

<body style="background-color: #cdc800;">

<h2>Character:</h2>

<table style="width:100%">
  <tr>
    <th>Area:</th>
    <td><?php print_r($continent[$selectCon])?></td>
  </tr>
  <tr>
    <th>Gender:</th>
    <td><?php print_r($character[$selectC])?></td>
  </tr>
  <tr>
    <th>Occupation:</th>
    <td><?php print_r($job[$selectjob])?></td>
  </tr>
  <tr>
    <th>Zodiac:</th>
    <td><?php print_r($zodiac[$selectZ])?></td>
  </tr>
  <tr>
    <th>Place:</th>
    <td><?php print_r($places[$select])?></td>
  </tr>
  <tr>
    <th>Action:</th>
    <td><?php print_r($action[$selectA])?></td>
  </tr>
</table>




</body>
</html>