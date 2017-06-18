<?php 

function find( $table = null, $id = null ) {
  
  $database = open_database();
  $found = null;
  try {
    if ($id) {
      $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
      $result = $database->query($sql);
      
      if ($result->num_rows > 0) {
        $found = $result->fetch_assoc();
      }
      
    } else {
      
      $sql = "SELECT * FROM " . $table;
      $result = $database->query($sql);
      
      if ($result->num_rows > 0) {
        $found = $result->fetch_all(MYSQLI_ASSOC);
        
        /* Metodo alternativo
        $found = array();
        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        } */
      }
    }
  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  close_database($database);
  return $found;
}

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