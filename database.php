<html>
<head>
<title>connecting with database</title>
</head>
<center>
<body>
<?php
$starconn=mysqli_connect("localhost","root","") or die("couldnt connect");
mysqli_select_db($starconn,"student");
$sqli="select * from data";
$rec=mysqli_query($starconn,$sqli);
?>
<table>
<tr>
	<th><b>Name</b></th>
	<th><b>Year</b></th>
	<th><b>Percentage</b></th>
</tr>
<?php
while($row=mysqli_fetch_array($rec))
{
	echo "<tr><form action=updating_data.php method=post>";
			echo "<td><input type=text name=name value='".$row['Name']."'></td>";
			echo "<td><input type=text name=year value='".$row['Year']."'></td>";
			echo "<td><input type=text name=perc value='".$row['Percentage']."'></td>";

			echo "<input type=hidden name=rollno value='".$row['RollNo']."'>";
			echo "<td><input type=submit value=Done>";
			echo "</form></tr>";


}
?>
</table>
</body>
</center>
</html>