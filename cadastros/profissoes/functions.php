<?php
require_once('../../config.php');
require_once(DBAPI);
$profissoes = null;
$profissao = null;

/**
 *  Listagem de Profissões
 */
function index() {
	global $profissoes;
	$profissoes = find_all('profissoes');
}

/**
 *  Cadastro de Profissões
 */

function add() {
  if (!empty($_POST['profissao'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $profissao = $_POST['profissao'];
    $profissao['modificacao'] = $profissao['criacao'] = $today->format("Y-m-d H:i:s");
    
    save('profissoes', $profissao);
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de Profissões
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['profissao'])) {
      $profissao = $_POST['profissao'];
      $profissao['modificacao'] = $now->format("Y-m-d H:i:s");
      update('profissoes', $id, $profissao);
      header('location: index.php');
    } else {
      global $profissao;
      $profissao = find('profissoes', $id);
    } 
  } else {
    header('location: index.php');
  }
}


/**
 *  Visualização de um Profissão
 */
function view($id = null) {
  global $profissao;
  $profissao = find('profissoes', $id);
}


/**
 *  Exclusão de um Profissão
 */
function delete($id = null) {
  global $profissao;
  $profissao = remove('profissoes', $id);
  header('location: index.php');
}
