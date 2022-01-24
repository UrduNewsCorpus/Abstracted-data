<!DOCTYPE html>
<html>
<head>
<style>
	body
	{
	   background-color:yellow;
	   background-image: url("malik.jpg");
	   color:white;
	   background-repeat: no-repeat;
	   background-attachment: fixed;
	   background-size: 100% 100%;

	   cursor:pointer;
	}
       table
	{
		background-color: white;
		width: :10%;
		color: black;
	}
	table:hover
	{
		background-color: yellow;
	}
</style>
</head>
<body>
	
<h1>Customer Data</h1>
<div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "customer";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed!");
}

$sql = "SELECT * FROM form";
$result = mysqli_query($conn, $sql);

if(!$result) {
die("Error!");
}

echo "<table border=3>";
echo "<tr><th>FirstName</th><th>LastName</th><th>Email</th><th>Password</th></tr>";

while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	foreach($row as $value)
	{	
		echo "<td>$value</td>";
		
	}
	echo"</tr>";
}

echo "</table>";

mysqli_close($conn);
?>
</div>
</body>
</html>
