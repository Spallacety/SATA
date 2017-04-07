<?php 

if (!$_COOKIE){
  session_destroy();
  header("Location: index.php");
  exit;
}

?>