<?php
require_once('../../config.php');
require_once('../../auth.php');
require_once(DBAPI);
$resultados = null;
$resultado = null;

function index() {
	global $resultados;
	$resultados = find_all('cars');
}

function add() {
  if (!empty($_POST['q15'])) {
    
    $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $resultado = $_POST['resultado'];
    $resultado['id_paciente'] = '1';
    $resultado['id_profissional'] = $_COOKIE['id_profissional'];
    $resultado['resultado'] = $_POST['q1'] + $_POST['q2'] + $_POST['q3'] + $_POST['q4'] + $_POST['q5'] + $_POST['q6'] + $_POST['q7'] + $_POST['q8'] + $_POST['q9'] + $_POST['q10'] + $_POST['q11'] + $_POST['q12'] + $_POST['q13'] + $_POST['q14'] + $_POST['q15'];
    $resultado['data'] = $now->format("Y-m-d");

    save('cars', $resultado);
    header('location: index.php');
  }
}

function view($id = null) {
  global $resultado;
  $resultado = find('cars', $id);
}