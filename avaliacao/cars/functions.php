<?php
require_once('../../config.php');
require_once('../../auth.php');
require_once(DBAPI);
$resultados = null;
$resultado = null;
$paciente = null;

function index() {
  global $resultados;
  $temp = null;
  $temp = find_all('profissionais2pacientes');

  foreach ($temp as $paciente) {
    array_push($resultados, find('pacientes', $paciente['id_profissional']));
  }

}

function initAttr($id = null){
  global $paciente;
  $paciente = find('pacientes', $id);
}

function add() {
  if (!empty($_POST['q15'])) {
    
    $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $resultado['id_paciente'] =  $_POST['id_paciente'];
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
    $resultado['modificacao'] = $today->format("Y-m-d");

    save('avaliacoes', $resultado);
    header('location: /avaliacao/cars/');
  }
}

function edit() {
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['q15'])) {
      $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
      $resultado['id_paciente'] =  $_POST['id_paciente'];
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
      $resultado['modificacao'] = $today->format("Y-m-d");
      update('avaliacoes', $id, $resultado);
      header('location: /avaliacao/cars/');
    } else {
      global $resultado;
      $resultado = find('avaliacoes', $id);
    } 
  } else {
    header('location: /avaliacao/cars/');
  }
}

function view($id = null) {
  global $resultado;
  $resultado = find('avaliacoes', $id);
}

function delete($id = null) {
  global $resultado;
  $resultado = remove('avaliacoes', $id);
  header('location: /avaliacao/cars/');
}