<?php 

require_once('/inc/database.php');

if (!verifyAccess($_COOKIE['id_profissional'])){
  header("Location: /login.php");
  exit;
}

?>