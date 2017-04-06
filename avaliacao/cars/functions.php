<?php
require_once('../../config.php');
require_once(DBAPI);
$cars = null;
$car = null;

/**
 *  Listagem de Avaliações
 */
function index() {
	global $cars;
	$cars = find_all('cars');
}

/**
 *  Cadastro de Avaliações
 */

function add() {
  if (!empty($_POST['car'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $car = $_POST['car'];
    $car['modificacao'] = $car['criacao'] = $today->format("Y-m-d H:i:s");
    
    save('cars', $car);
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de Avaliações
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['car'])) {
      $car = $_POST['car'];
      $car['modificacao'] = $now->format("Y-m-d H:i:s");
      update('cars', $id, $car);
      header('location: index.php');
    } else {
      global $car;
      $car = find('cars', $id);
    } 
  } else {
    header('location: index.php');
  }
}


/**
 *  Visualização de Avaliações
 */
function view($id = null) {
  global $car;
  $car = find('cars', $id);
}


/**
 *  Exclusão de Avaliações
 */
function delete($id = null) {
  global $car;
  $car = remove('cars', $id);
  header('location: index.php');
}
