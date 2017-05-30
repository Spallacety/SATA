<?php 

if (!$_COOKIE){
  header("Location: https://sata-lims.herokuapp.com/login.php");
  exit;
}

?>