<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "customer";

$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['submit']))
{

if(!empty($_POST['first']) && !empty($_POST['last']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm password']))
{
$fn = $_POST['first'];
$ln = $_POST['last'];
$em = $_POST['email'];
$ps = $_POST['password'];
$pc = $_POST['confirm password'];


$sql = "INSERT INTO form(firstname,lastname,email,password,confirm password) values ('$fn','$ln', '$em', '$ps' , '$pc')";

$run=mysqli_query($conn, $sql) or die(mysqli_error());
if($run)
{
	echo "Record inserted successfully";
}
else
{
	echo "Data not insert";
}
}
else {
echo "All field Required!";
}

}
?>