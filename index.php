<?php
$con=mysqli_connect("localhost","root","","pao_belgische_bier_db");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM bier");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Naam</th>
<th>Brouwer</th>
<th>Type</th>
<th>Gisting</th>
<th>Perc</th>
<th>Inkoop prijs</th>
<th>Like</th>

</tr>";

while($row = mysqli_fetch_array($result))

{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['naam'] . "</td>";
echo "<td>" . $row['brouwer'] . "</td>";
echo "<td>" . $row['type'] . "</td>";
echo "<td>" . $row['gisting'] . "</td>";
echo "<td>" . $row['perc'] . "</td>";
echo "<td>" . $row['inkoop_prijs'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>