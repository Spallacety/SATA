<?php 

require_once('../../inc/database.php');

$verify = verifyIfAdmin($_COOKIE['id_profissional']);

if ($verify != '1'){
  header("Location: /login.php");
  exit;
}

?>