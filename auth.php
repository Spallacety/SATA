<?php 

if (!$_COOKIE){
  session_destroy();
  header("Location: https://" . echo $_SERVER['SERVER_NAME'] . "");
  exit;
}

?>