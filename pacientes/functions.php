<?php
require_once('../config.php');
require_once('../auth.php');
require_once(DBAPI);
$pacientes = null;
$paciente = null;

/**
 *  Listagem de Pacientes
 */
function index() {
	global $pacientes;
	$pacientes = find_all('pacientes');
}

/**
 *  Cadastro de Pacientes
 */

function add() {
  if (!empty($_POST['paciente']) and !empty($_POST['responsavel'])) {
    
    $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $paciente = $_POST['paciente'];
    $paciente['modificacao'] = $paciente['criacao'] = $today->format("Y-m-d H:i:s");
    
    save('pacientes', $paciente);

    $responsavel = $_POST['responsavel'];
    $responsavel['modificacao'] = $responsavel['criacao'] = $today->format("Y-m-d H:i:s");
    $pass = md5($_POST['senhaSemHash']);
    $responsavel['senha'] = $pass;
    $responsavel['nivelacesso'] = '2';
    $responsavel['id_profissao'] = '2';
    $responsavel['id_instituicao'] = '2';
    
    save('profissionais', $responsavel);
  
    $relacao['id_paciente'] = get_last_id('pacientes');
    $relacao['id_profissional'] = get_last_id('profissionais');
    $relacao['status'] = 1;
    
    save('relacoes', $relacao);

    header('location: /cadastros/pacientes/');
  }
}

/**
 *	Atualizacao/Edicao de Paciente
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['paciente'])) {
      $paciente = $_POST['paciente'];
      $paciente['modificacao'] = $now->format("Y-m-d H:i:s");
      update('pacientes', $id, $paciente);
      header('location: /cadastros/pacientes/');
    } else {
      global $paciente;
      $paciente = find('pacientes', $id);
    } 
  } else {
    header('location: /cadastros/pacientes/');
  }
}


/**
 *  Visualização de um Paciente
 */
function view($id = null) {
  global $paciente;
  $paciente = find('pacientes', $id);
}


/**
 *  Exclusão de um Paciente
 */
function delete($id = null) {
  global $paciente;
  $paciente = remove('pacientes', $id);
  header('location: /cadastros/pacientes/');
}
