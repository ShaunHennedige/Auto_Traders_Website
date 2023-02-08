<?php

session_start();
// header('location:login.html');
// header('Refresh: 10; URL=login.php');

$server = "localhost";
$username = "root";
$password = "";
$database = "auto-traders";


// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    // echo "Connected successfully";
}


$name = $_POST['uname'];
// $email = $_POST['email'];
$password = $_POST['psw'];
// $password2 = $_POST['psw-repeat'];

//checking if username already exists
$dup = "select * from userdetails where username ='$name' && password ='$password'";

$result = mysqli_query($conn, $dup);

$num = mysqli_num_rows($result);



if ($num == 1) {
    $_SESSION['username'] = $name;
    header('location:home.php');
} else {

    echo "<h1>Password Incorrect. Try Again!</h1>";
    // header('location:login.html');
}

?>

<html>

</html>