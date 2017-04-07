<?php 

if (!$_COOKIE){
  session_destroy();
  header("Location: https://sada-lims.herokuapp.com/index.php");
  exit;
}

?>