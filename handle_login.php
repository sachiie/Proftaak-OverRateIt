<?php
include 'inc/conn.php';
// handleLogin.php
session_start();


function userisloggedin()
{
  if(!isset($_SESSION['userloggedin']))
  {
    $_SESSION['userloggedin'] = false;
    return false;
  }
  // elseif(isset($_SESSION['userloggedin'] == true)
  // {
  //     return true;
  // }
}

if(!isset($_POST['myLogin']))
{
  // no form data from a login format
  // redirect to some ....
  header("Location:login_register.php");
}

// sql query
$sql = "SELECT * from `users` WHERE `Email` = '".$_POST['Email']."' and `password` = '" .$_POST['password']. "'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)== 1) {
  $_SESSION['userloggedin'] = true;
  $wewyoufuckingdidityourootingtootingmotherfuckingsonofabitch = "Wow You logged in";
  echo "hey";
}


?>
