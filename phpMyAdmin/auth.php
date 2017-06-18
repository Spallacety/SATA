<?php 

function verifyAdmin( $id ){
  $user = find('profissionais', $id);
  if ($user['nivelacesso'] == 1){
    return true;
  }
}

if (!verifyAcess($_COOKIE['id_profissional'])){
  header("Location: /login.php");
  exit;
}

?>