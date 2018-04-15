<?php
// Initialize the session
session_start();
$var = 'THANKS';
if(isset($_SESSION['username']) || empty($_SESSION['username']))
{
echo $var;
}

 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
