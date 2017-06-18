<?php 

require_once('/inc/database.php');

if (!verifyAcess($_COOKIE['id_profissional'])){
  header("Location: /login.php");
  exit;
}

?>