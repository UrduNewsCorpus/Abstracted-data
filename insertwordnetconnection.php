<?php
$Alifby = $word = $title = $description= $subtitle = $subdescription="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(!empty($_POST['alifby'] && $_POST['word']&& $_POST['title'] && $_POST['description']))
{
$Alifby = $_POST['alifby'];
$word = $_POST['word'];
$title= $_POST['title'];
$description = $_POST['description'];
$subtitle=$_POST['subtitle'];
$subdescription=$_POST['subdescription'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "customer";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed!");
}

$sql = "INSERT INTO insertwordnet(alifby, word, title, description,subtitle,subdescription) VALUES ('$Alifby','$word','$title', '$description','$subtitle','$subdescription')";

if (mysqli_query($conn, $sql)) {
    echo "Record insert Successfully!";
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