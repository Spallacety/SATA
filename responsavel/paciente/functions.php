<?php
require_once('../../config.php');
require_once('../../auth.php');
require_once(DBAPI);
$profissionais = null;
$paciente = null;

function add(){
  global $profissionais;

  $relacao = find_relacao($_COOKIE['id_profissional']);

  $paciente = find('pacientes', $relacao['id_paciente']);

  $database = open_database();
  $found = null;
  try {

    $sql = "SELECT * FROM profissionais WHERE id_profissao != 2 AND id NOT IN (SELECT id_profissional FROM profissionais INNER JOIN relacoes ON profissionais.id = relacoes.id_profissional WHERE profissionais.id_profissao != 2 AND relacoes.id_paciente = " . $relacao['id_paciente'] . " AND status = 1)";
    $result = $database->query($sql);
    
    if ($result->num_rows > 0) {
      $found = $result->fetch_all(MYSQLI_ASSOC);
    }

  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  close_database($database);
  
  $profissionais = $found;

  if (!empty($_POST['nova_relacao'])) {
        
    $nova_relacao = $_POST['nova_relacao'];
    $nova_relacao['id_paciente'] = $relacao['id_paciente'];
    $nova_relacao['status'] = 1;
    
    save('relacoes', $nova_relacao);
    header('location: list_professionals.php');
  }
}

function delete($id = null) {
  $relacao = find_relacao($id);
  $relacao['status'] = 0;

  update('relacoes', $relacao['id'], $relacao);

  header('location: list_professionals.php');
}

function view($id = null) {
  global $paciente;
  $paciente = find('pacientes', $id);
}

function list_professionals(){
  global $profissionais;

  $relacao = find_relacao($_COOKIE['id_profissional']);

  $paciente = find('pacientes', $relacao['id_paciente']);

  $database = open_database();
  $found = null;
  try {

    $sql = "SELECT * FROM profissionais INNER JOIN relacoes ON profissionais.id = relacoes.id_profissional WHERE profissionais.id_profissao != 2 AND relacoes.id_paciente = " . $relacao['id_paciente'] . " AND status = 1";
    $result = $database->query($sql);
    
    if ($result->num_rows > 0) {
      $found = $result->fetch_all(MYSQLI_ASSOC);
    }

  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  close_database($database);
  
  $profissionais = $found;

}