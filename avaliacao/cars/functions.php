<?php
require_once('../../config.php');
require_once('../../auth.php');
require_once(DBAPI);
$resultados = array();
$resultado = null;
$paciente = null;
$allcars = null;
$minhasavaliacoes = null;
$outrasavaliacoes = null;

function index() {
  global $resultados;
  $temp = null;
  $temp = find_all('relacoes');

  foreach ($temp as $paciente) {
    if ($paciente['status'] == 1 && $paciente['id_profissional'] == $_COOKIE['id_profissional']){
      array_push($resultados, find('pacientes', $paciente['id_paciente']));
    }
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
  global $paciente;
  global $allcars;
  $paciente = find('pacientes', $id);
  findAllCars($id);
}

function delete($id = null) {
  global $resultado;
  $resultado = remove('avaliacoes', $id);
  header('location: /avaliacao/cars/');
}

function findAllCars( $id ){
  global $allcars;

  $database = open_database();
  $found = null;

  try {
      $sql = "SELECT * FROM avaliacoes WHERE id_paciente = " . $id;
      $result = $database->query($sql);
      
      if ($result->num_rows > 0) {
        $found = $result->fetch_all(MYSQLI_ASSOC);
      }

  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  close_database($database);

  $allcars = $found;
  return $allcars;
}

function findFirstCars( $id ){
  global $firstcars;

  $database = open_database();
  $found = null;

  try {
      $sql = "SELECT * FROM avaliacoes WHERE id_paciente = " . $id . "ORDER BY modificacao DESC LIMIT 3";
      $result = $database->query($sql);
      
      if ($result->num_rows > 0) {
        $found = $result->fetch_all(MYSQLI_ASSOC);
      }

  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  close_database($database);

  $firstcars = $found;
  return $firstcars;
}

function findAnswer($questao, $valor){
  $database = open_database();
  $found = null;

  try {
    $sql = "SELECT * FROM carsrespostas WHERE questao = " . $questao . " AND valor = " . $valor;
    $result = $database->query($sql);
    
    if ($result->num_rows > 0) {
      $found = $result->fetch_assoc();
    }

  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  close_database($database);
  return $found['significado'];
}

function myList($id){
  global $minhasavaliacoes;
  $database = open_database();

  try {
      $sql = "SELECT * FROM avaliacoes WHERE id_paciente = " . $id . " AND id_profissional = " . $_COOKIE['id_profissional'] . " ORDER BY modificacao DESC";
      $result = $database->query($sql);
      
      if ($result->num_rows > 0) {
        $minhasavaliacoes = $result->fetch_all(MYSQLI_ASSOC);
      }

  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  close_database($database);

  return $minhasavaliacoes;
}

function otherList($id){
  global $outrasavaliacoes;
  $database = open_database();

  try {
      $sql = "SELECT * FROM avaliacoes WHERE id_paciente = " . $id . " AND id_profissional != " . $_COOKIE['id_profissional'] . " ORDER BY modificacao DESC";
      $result = $database->query($sql);
      
      if ($result->num_rows > 0) {
        $outrasavaliacoes = $result->fetch_all(MYSQLI_ASSOC);
      }

  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  close_database($database);

  return $outrasavaliacoes;
}

function details($id){
  global $resultado;
  $resultado = find('avaliacoes', $id);
}

function result($resultado){
  if ($resultado <= 30){
    return "Sem autismo";
  }
  if ($resultado <= 36){
    return "Autismo leve";
  }
  else{
    return "Autismo severo";
  }
}



#SELECT (SUM(q1)/COUNT(*)) AS q1, (SUM(q2)/COUNT(*)) AS q2, (SUM(q3)/COUNT(*)) AS q3, (SUM(q4)/COUNT(*)) AS q4, (SUM(q5)/COUNT(*)) AS q5, (SUM(q6)/COUNT(*)) AS q6, (SUM(q7)/COUNT(*)) AS q7, (SUM(q8)/COUNT(*)) AS q8, (SUM(q9)/COUNT(*)) AS q9, (SUM(q10)/COUNT(*)) AS q10, (SUM(q11)/COUNT(*)) AS q11, (SUM(q12)/COUNT(*)) AS q12, (SUM(q13)/COUNT(*)) AS q13, (SUM(q14)/COUNT(*)) AS q14, (SUM(q15)/COUNT(*)) AS q15, (SUM(resultado)/COUNT(*)) AS resultado FROM avaliacoes WHERE id_paciente = 1
