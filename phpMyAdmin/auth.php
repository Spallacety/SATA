<?php 

require_once DBAPI;

$verify = verifyIfAdmin($_COOKIE['id_profissional']);

if ($verify != 1){
  header("Location: /login.php");
  exit;
}

?>