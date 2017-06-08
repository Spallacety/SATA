<?php
require_once('../../config.php');
require_once(DBAPI);
$relatorios = null;
$relatorio = null;

/**
 *  Listagem de Relatórios
 */
function index() {
	global $relatorios;
	$relatorios = findLast(7);
}

/**
 *  Cadastro de Relatório
 */

function add() {
  if (!empty($_POST['relatorio'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $relatorio = $_POST['relatorio'];
    $relatorio['modificacao'] = $relatorio['criacao'] = $today->format("Y-m-d H:i:s");
    
    save('relatorios', $relatorio);
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de Relatórios
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['relatorio'])) {
      $relatorio = $_POST['relatorio'];
      $relatorio['modificacao'] = $now->format("Y-m-d H:i:s");
      update('relatorios', $id, $relatorio);
      header('location: index.php');
    } else {
      global $relatorio;
      $relatorio = find('relatorios', $id);
    } 
  } else {
    header('location: index.php');
  }
}


/**
 *  Visualização de um Relatório
 */
function view($id = null) {
  global $relatorio;
  $relatorio = find('relatorios', $id);
}


/**
 *  Exclusão de um Relatório
 */
function delete($id = null) {
  global $relatorio;
  $relatorio = remove('relatorios', $id);
  header('location: index.php');
}

function findLast($id = null){
  
  $database = open_database();
  $found = null;

  try {
    if ($id) {
      $sql = "SELECT * FROM avaliacoes WHERE id_paciente = " . $id . " ORDER BY DESC LIMIT 10";
      $result = $database->query($sql);
      
      if ($result->num_rows > 0) {
        $found = $result->fetch_assoc();
      }
      
    }

  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  close_database($database);
  return $found;
}