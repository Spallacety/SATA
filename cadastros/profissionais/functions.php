<?php
require_once('../../config.php');
require_once(DBAPI);
$profissionais = null;
$profissional = null;
$instituicoes = null;
$profissoes = null;

function initAttr () {
  global $instituicoes;
  $instituicoes = find_all('instituicoes');
  global $profissoes;
  $profissoes = find_all('profissoes');
}

function index() {
	global $profissionais;
	$profissionais = find_all('profissionais');
}

/**
 *  Cadastro de Profissionais
 */

function add() {
  if (!empty($_POST['profissional'])) {
    
    $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $profissional = $_POST['profissional'];
    $profissional['modificacao'] = $profissional['criacao'] = $today->format("Y-m-d H:i:s");
    $profissional['senha'] = md5($profissional['senha']);
    
    save('profissionais', $profissional);
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de Profissionais
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['profissional'])) {
      $profissional = $_POST['profissional'];
      $profissional['modificacao'] = $now->format("Y-m-d H:i:s");
      $senha = md5($profissional['senha']);
      $profissional['senha'] = $senha;

      update('profissionais', $id, $profissional);
      header('location: index.php');
    } else {
      global $profissional;
      $profissional = find('profissionais', $id);
    } 
  } else {
    header('location: index.php');
  }
}


/**
 *  Visualização de um Profissional
 */
function view($id = null) {
  global $profissional;
  $profissional = find('profissionais', $id);
}


/**
 *  Exclusão de um Profissional
 */
function delete($id = null) {
  global $profissional;
  $profissional = remove('profissionais', $id);
  header('location: index.php');
}