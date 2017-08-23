<?php
require_once('../../config.php');
require_once('../../auth.php');
require_once(DBAPI);
$responsaveis = null;
$responsavel = null;
$pacientes = null;
$relacao = null;

function initAttr () {
  global $pacientes;
  $pacientes = find_all('pacientes');
}

function index() {
	global $responsaveis;
	$responsaveis = find_responsaveis('profissionais');
}

function add() {
  if (!empty($_POST['responsavel'])) {
    
    $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $responsavel = $_POST['responsavel'];
    $responsavel['modificacao'] = $responsavel['criacao'] = $today->format("Y-m-d H:i:s");
    $pass = md5($_POST['senhaSemHash']);
    $responsavel['senha'] = $pass;
    $responsavel['nivelacesso'] = '2';
    $responsavel['id_profissao'] = '2';
    $responsavel['id_instituicao'] = '2';
    
    save('profissionais', $responsavel);

    $relacao['id_paciente'] = $_POST['id_paciente'];
    $relacao['id_profissional'] = get_last_id('profissionais');
    $relacao['status'] = 1;
    
    save('relacoes', $relacao);

    header('location: index.php');
  }
}

function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['responsavel'])) {
      $responsavel = $_POST['responsavel'];
      $responsavel['modificacao'] = $now->format("Y-m-d H:i:s");
      $pass = md5($_POST['senhaSemHash']);
      $responsavel['senha'] = $pass;

      update('profissionais', $id, $responsavel);
      header('location: index.php');
    } else {
      global $responsavel;
      $responsavel = find('profissionais', $id);
    } 
  } else {
    header('location: index.php');
  }
}

function view($id = null) {
  global $responsavel;
  $responsavel = find('profissionais', $id);
}

function delete($id = null) {
  global $responsavel;
  $responsavel = remove('profissionais', $id);
  header('location: index.php');
}

function find_responsaveis() {

  $database = open_database();
  $found = null;
  try {
    $sql = "SELECT * FROM profissionais WHERE id_profissao = 2";
    $result = $database->query($sql);
    
    $found = array();
    while ($row = $result->fetch_assoc()) {
      array_push($found, $row);
    }
      
  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  close_database($database);
  return $found;
}

function find_relacao( $id_profissional ){
  $database = open_database();
  $found = null;
  
  try {
    $sql = "SELECT * FROM relacoes WHERE id_profissional = " . $id_profissional;
    $result = $database->query($sql);
    
    if ($result->num_rows > 0) {
      $found = $result->fetch_assoc();
    }

  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  close_database($database);
  return $found;
}