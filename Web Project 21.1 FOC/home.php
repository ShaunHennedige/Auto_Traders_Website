<html>

<head>
    <title>User Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>

<body>
<?php

session_start();

//checking if already logged in
if (!isset($_SESSION['username'])) {
    header('location:login.html');
}
// $name = $_POST['uname'];

?>
    
    
     <!-- Jumbotron -->
  <div class="p-5 text-center bg-light">
    <h1 class="mb-3">Welcome</h1>
    <h4 class="mb-3"><?php echo $_SESSION['username']; ?></h4>
    <a class="btn btn-primary" href="logout.php" role="button">LOGOUT</a>
  </div>
  <!-- Jumbotron -->
</header>
