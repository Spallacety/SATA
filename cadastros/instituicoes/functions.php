<?php
require_once('../../config.php');
require_once(DBAPI);
$instituicoes = null;
$instituicao = null;

/**
 *  Listagem de Instituições
 */
function index() {
	global $instituicoes;
	$instituicoes = find_all('instituicoes');
}

/**
 *  Cadastro de Instituições
 */

function add() {
  if (!empty($_POST['instituicao'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $instituicao = $_POST['instituicao'];
    $instituicao['modificacao'] = $instituicao['criacao'] = $today->format("Y-m-d H:i:s");
    
    save('instituicoes', $instituicao);
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de Instituições
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['instituicao'])) {
      $instituicao = $_POST['instituicao'];
      $instituicao['modificacao'] = $now->format("Y-m-d H:i:s");
      update('instituicoes', $id, $instituicao);
      header('location: index.php');
    } else {
      global $instituicao;
      $instituicao = find('instituicoes', $id);
    } 
  } else {
    header('location: index.php');
  }
}


/**
 *  Visualização de uma Instituição
 */
function view($id = null) {
  global $instituicao;
  $instituicao = find('instituicoes', $id);
}


/**
 *  Exclusão de uma Instituição
 */
function delete($id = null) {
  global $instituicao;
  $instituicao = remove('instituicoes', $id);
  header('location: index.php');
}
