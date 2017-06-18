<?php 

if ($_COOKIE['nivel_acesso'] != '1'){
  header("Location: /login.php");
  exit;
}

?>