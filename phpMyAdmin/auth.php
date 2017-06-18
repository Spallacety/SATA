<?php 

function verifyIfAdmin( $id ){
  $user = find('profissionais', $id);
  if ($user['nivelacesso'] == 1){
    return 1;
  }
  return 0;
}

$verify = verifyIfAdmin($_COOKIE['id_profissional']);

if ($verify != 1){
  header("Location: /login.php");
  exit;
}

?>