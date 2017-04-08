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
  if (!empty($_POST['resultado'])) {
    
    $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $resultado = $_POST['resultado'];
    $resultado['id_paciente'] = '1';
    $resultado['id_profissional'] = $_COOKIE['id_profissional'];
    $resultado['resultado'] = $resultado['q1'] + $resultado['q2'] + $resultado['q3'] + $resultado['q4'] + $resultado['q5'] + $resultado['q6'] + $resultado['q7'] + $resultado['q8'] + $resultado['q9'] + $resultado['q10'] + $resultado['q11'] + $resultado['q12'] + $resultado['q13'] + $resultado['q14'] + $resultado['q15'];
    $resultado['data'] = $now->format("Y-m-d");

    save('cars', $resultado);
    header('location: index.php');
  }
}

function view($id = null) {
  global $resultado;
  $resultado = find('cars', $id);
}