<?php
require_once('../../config.php');
require_once('../../auth.php');
require_once(DBAPI);
$resultados = null;
$resultado = null;
$pacientes = null;

function index() {
  global $resultados;
  $resultados = find_all('cars');
}

function initAttr(){
  global $pacientes;
  $pacientes = find_all('pacientes');
}

function add() {
  if (!empty($_POST['q15'])) {
    
    $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $resultado['id_paciente'] = $_POST['paciente'];
    $resultado['id_profissional'] = $_COOKIE['id_profissional'];
    $resultado['q1'] = $_POST['q1'];
    $resultado['q2'] = $_POST['q2'];
    $resultado['q3'] = $_POST['q3'];
    $resultado['q4'] = $_POST['q4'];
    $resultado['q5'] = $_POST['q5'];
    $resultado['q6'] = $_POST['q6'];
    $resultado['q7'] = $_POST['q7'];
    $resultado['q8'] = $_POST['q8'];
    $resultado['q9'] = $_POST['q9'];
    $resultado['q10'] = $_POST['q10'];
    $resultado['q11'] = $_POST['q11'];
    $resultado['q12'] = $_POST['q12'];
    $resultado['q13'] = $_POST['q13'];
    $resultado['q14'] = $_POST['q14'];
    $resultado['q15'] = $_POST['q15'];
    $resultado['resultado'] = $_POST['q1'] + $_POST['q2'] + $_POST['q3'] + $_POST['q4'] + $_POST['q5'] + $_POST['q6'] + $_POST['q7'] + $_POST['q8'] + $_POST['q9'] + $_POST['q10'] + $_POST['q11'] + $_POST['q12'] + $_POST['q13'] + $_POST['q14'] + $_POST['q15'];
    $resultado['criacao'] = $today->format("Y-m-d H:i:s");

    save('cars', $resultado);
    header('location: index.php');
  }
}

function view($id = null) {
  global $resultado;
  $resultado = find('cars', $id);
}