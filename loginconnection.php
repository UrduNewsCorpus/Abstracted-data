<?php

$em = $ps= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(!empty($_POST['email'] && $_POST['password']))
    {
        $em = $_POST['email'];
        $ps = $_POST['password'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "customer";
    
        $conn = mysqli_connect($servername, $username, $password, $database);
// check database connection with local xampp server
        if (!$conn) {
                die("Connection failed!");
        }
        $sql = "SELECT email, password FROM form WHERE email='$em'";
        $result = mysqli_query($conn, $sql);

        if(!$result) {
                echo "Error: " . mysqli_error($conn);
        }
        else {
            $row = mysqli_fetch_assoc($result);
            $match_em = $row["email"];
            $match_ps = $row["password"];

            if(!(strcasecmp($match_em, $em) && strcmp($match_ps, $ps))) {
                echo "Login Success!";
            header("location:adminDashboard.php");   
            } 
            else {

                echo"<center>";
                echo "Incorrect Email or Password!";
                echo "</center>";
            }
        }
        mysqli_close($conn);

    }
    else{
        echo "Empty Email or Password!";
    }
}
?>