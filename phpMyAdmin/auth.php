<?php 

if ($_COOKIE['id_profissional'] != '1'){
  header("Location: https://sata-lims.herokuapp.com/login.php");
  exit;
}

?>