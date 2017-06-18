<?php 

require_once DBAPI;

if (!verifyIfAdmin($_COOKIE['id_profissional'])){
  header("Location: /login.php");
  exit;
}

?>