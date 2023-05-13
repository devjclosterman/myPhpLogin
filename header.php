<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Login</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <nav>
     <div class="topnav" id="myTopnav">
    <a href="index.php" class="active">Home</a>
    <?php
    if (isset($_SESSION["useruid"])) {
        echo "<a href='profile.php'>Profile Page</a>";
        echo "<a href='logout.php'>Log Out</a>";
    }
    else {
        echo "<a href='signup.php'>Sign Up</a>";
        echo "<a href='login.php'>Log In</a>";
    }
    ?>
    <!-- <a href="signup.php">Sign up</a>
    <a href="login.php">Log In</a>
    <a href="logout.php">Log Out</a> -->
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
   </nav> 
 
   <div class="wrapper">