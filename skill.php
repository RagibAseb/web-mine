<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
			color: #008080;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}

		th {
			background-color: #588c7e;
			color : white;
		}
		tr:nth-child(even) { background-color: #f2f2f2}
	</style>
</head>
<body>
<?php  $page = 'about'; include 'includes/navbar.php'; ?>
<br>
<br>
<br>
<br>
<br>
	<table>
		<tr>
			<th>Language </th>
			<th>Skill </th>
			<th>Experience </th>
		</tr>

	<?php
	$conn = mysqli_connect("localhost","root","","myself");
	if($conn-> connect_error) {
		die("Connection Failed:". $conn-> connect_error);
	}
	 $sql = "Select * from skill";
	 $result = $conn-> query($sql);
	 if ($result-> num_rows > 0)
	 {
		 while($row = $result-> fetch_assoc()) {
			 echo "<tr> <td>".$row["language"]."</td> <td>".$row["skill"]."</td> <td>".$row["experience"]."</td></tr>";
		 }
		 echo "</table>";
	 }
	 else {
		 echo "0 result";
	 }

	 $conn->close();

	 ?>
	 </table>
   </body>
</html>