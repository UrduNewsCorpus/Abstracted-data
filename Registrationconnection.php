<?php
$fn = $ln = $em = $ps= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if(!empty($_POST['firstname'] && $_POST['lastname']&& $_POST['email'] && $_POST['password']))
{
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$em = $_POST['email'];
$ps = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "customer";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed!");
}

$sql = "INSERT INTO form(firstname, lastname, email, password) VALUES ('$fn','$ln','$em', '$ps')";

if (mysqli_query($conn, $sql)) {
    echo "New record inserted";
} else {
    echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);

}
else {
echo "Provide data to register!";
}

}
?>