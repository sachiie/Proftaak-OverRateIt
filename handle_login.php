<?php
// handleLogin.php
session_start();

if(!isset($_SESSION['userloggedin']))
{
  $_SESSION['userloggedin'] = false;
}

function userisloggedin()
{
  if(!isset($_SESSION['userloggedin']))
  {
    $_SESSION['userloggedin'] = false;
    return false;
  }
  elseif(isset($_SESSION['userloggedin'] == true)
  {
      return true;
  }
}

if(!isset($_POST['myLogin']))
{
  // no form data from a login format
  // redirect to some ....
  header("Location:myProfile.php");
}

// sql query
$sql = "select * from `login` WHERE `Email` = '".$_POST['Email']."' and `password` = '" . sha1($_POST['password']). "'";

die($sql);

$result = mysqli_query($conn, $sql);



?>
