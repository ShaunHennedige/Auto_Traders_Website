<?php

session_start();
// header('location:login.html');
header('Refresh: 5; URL=SignUp.html');

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
$email = $_POST['email'];
$password = $_POST['psw'];
$password2 = $_POST['psw-repeat'];

//checking if username already exists
$dup = "select * from userdetails where username ='$name'";

$result = mysqli_query($conn, $dup);

$num = mysqli_num_rows($result);



if ($num == 1) {
    echo "<h1>Username is already taken</h1>";
} elseif ($password == $password2) {
    $reg = "insert into userdetails(username, email, password) values('$name','$email','$password')";
    mysqli_query($conn, $reg);
    echo "<h1>Registration Successful</h1>";
} else {
    echo "<h1>Passwords do not match! Try again</h1>";
}
?>

<html>

</html>