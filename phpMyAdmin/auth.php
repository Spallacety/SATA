<?php 

if ($_COOKIE['id_profissional'] != '1'){
  header("Location: /login.php");
  exit;
}

?>