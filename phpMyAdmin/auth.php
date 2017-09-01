<?php 

if ($_COOKIE['nivel_acesso'] != '9'){
  header("Location: /login.php");
  exit;
}

?>